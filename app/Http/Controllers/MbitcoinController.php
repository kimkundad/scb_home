<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\DB;
use App\member;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\qrcode;

class MbitcoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

      $count_user = member::where('members.confirmed', 0)->count();

      //$objs = bitcoin::paginate(15);
      $objs = DB::table('members')
                ->select(
                'members.*'
                )
                ->where('members.confirmed', 0)
                ->orderBy('members.id','ASC')
                ->paginate(15);

      $data['header'] = 'รายชื่อในระบบ';
      $data['objs'] = $objs;
      $data['count_user'] = $count_user;
      return view('admin.bitcoin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */










    public function get_chart()
    {
    //  dd("55555");
      $get_count = DB::table('members')
                ->select(
                'members.*'
                )
                ->where('members.confirmed', 1)
                ->count();

                $get_count2 = DB::table('members')
                          ->select(
                          'members.*'
                          )
                          ->where('members.confirmed', 0)
                          ->count();


                $arr[0] = [ 'label' => 'ผู้มางาน', 'data' =>[[1, $get_count]],'color' => '#e36159' ];
                $arr[1] = [ 'label' => 'ผู้ร่วมงานทั้งหมด', 'data' =>[[1, $get_count2]],'color' => '#734BA9' ];
              return response()->json($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_user(Request $request)
    {
      $name = $request['name'];
      $phone = $request['phone'];
      $groups = $request['groups'];
      $company = $request['company'];


      $get_all_count = DB::table('members')
                ->select(
                'members.*'
                )
                ->where('members.name', $name)
                ->count();

      if($get_all_count > 0){

        $arr['success'] = false;
        $arr['data_message'] = 'รายชื่อซ้ำ ในระบบ';
        return json_encode($arr);

      }else{

      if($groups == 0){

      $max_scores_tableq = DB::table('members')
      ->select(
      DB::raw('max(code_user) as max_code')
      )
      ->where('code_user', '>', 0)
      ->where('code_user', '<', 999)
      ->where('groups', 'other')
      ->first();

    //  dd($max_scores_table->max_code);

        if($max_scores_tableq->max_code == NULL){
          $code_to_user = 1;
        }else{
          $code_to_user = $max_scores_tableq->max_code+1;
        }
        $groups = "other";
      //  dd($code_to_user);

    }else if($groups == 1){

      $max_scores_table = DB::table('members')
      ->select(
      DB::raw('max(code_user) as max_code')
      )
      ->where('code_user', '>', 9000)
      ->where('code_user', '<', 9999)
      ->first();

      //dd($max_scores_table);
        if($max_scores_table->max_code == NULL){
          $code_to_user = 9001;
        }else{
          $code_to_user = $max_scores_table->max_code+1;
        }
        $groups = "distributor";
      //  dd($code_to_user);

    }else if($groups == 2){

        $max_scores_table = DB::table('members')
        ->select(
        DB::raw('max(code_user) as max_code')
        )
        ->where('code_user', '>=', 8000)
        ->where('code_user', '<', 8999)
        ->first();

          if($max_scores_table->max_code == NULL){
            $code_to_user = 8001;
          }else{
            $code_to_user = $max_scores_table->max_code+1;
          }
          $groups = "contractor & supplier";
        //  dd($code_to_user);

        }else{

      }

      $package = new member();
       $package->code_user = $code_to_user;
       $package->confirmed = 1;
       $package->company = $company;
       $package->char_user = 'NEW';
       $package->name = $name;
       $package->phone = $phone;
       $package->groups = $groups;
       $package->income_time = date('Y-m-d H:i:s', strtotime('+7 hour'));
       $package->save();

       $get_all_count = DB::table('members')
                 ->select(
                 'members.*'
                 )
                 ->where('members.confirmed', 0)
                 ->count();

     $get_count = DB::table('members')
               ->select(
               'members.*'
               )
               ->where('members.confirmed', 1)
               ->count();

     $arr['all_count_message'] = $get_all_count;
     $arr['new_count_message'] = $get_count;


     $the_id = $package->id;
     $get_data = DB::table('members')
               ->select(
               'members.*'
               )
               ->where('members.id', $the_id)
               ->first();


     $arr['id'] = $get_data->id;
     $arr['code_user'] = $get_data->code_user;
     $arr['name'] = $get_data->name;
     $arr['phone'] = $get_data->phone;
     $arr['company'] = $get_data->company;
     $arr['income_time'] = date('Y-m-d H:i:s', strtotime('+7 hour'));
     $arr['groups'] = $get_data->groups;

     $arr['success'] = true;
        $arr['data_message'] = 'เพิ่มคุณ '.$arr['name'].' รายชื่อสำเร็จ';
        return json_encode($arr);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_user(Request $request)
    {

      $name_user = $request['name_user'];
      $phone = $request['phone'];
      $company = $request['company'];


      $id = $request['id_user'];
      $upobj = DB::table('members')
          ->select(
          'members.*'
          )
          ->where('id', $id)
          ->update(array(
            'confirmed' => $request['status_user'],
            'company' => $company,
            'name' => $name_user,
            'phone' => $phone,
            'admin_id' => $request['admin_id'],
            'income_time' => date('Y-m-d H:i:s', strtotime('+7 hour'))
          ));

          if($request['status_user'] == 1){

            $get_all_count = DB::table('members')
                      ->select(
                      'members.*'
                      )
                      ->where('members.confirmed', 0)
                      ->count();

          $get_count = DB::table('members')
                    ->select(
                    'members.*'
                    )
                    ->where('members.confirmed', 1)
                    ->count();

          $arr['all_count_message'] = $get_all_count;
          $arr['new_count_message'] = $get_count;

          //$admin_id = $request['admin_id'];

          $get_data = DB::table('members')
                    ->select(
                    'members.*'
                    )
                    ->where('members.id', $id)
                    ->first();
          $arr['id'] = $get_data->id;
          $arr['code_user'] = $get_data->code_user;
          $arr['name'] = $get_data->name;
          $arr['phone'] = $get_data->phone;
          $arr['company'] = $get_data->company;
          $arr['income_time'] = date('Y-m-d H:i:s', strtotime('+7 hour'));
          $arr['groups'] = $get_data->groups;
          $arr['success'] = true;

        //  dd($arr);

          return json_encode($arr);
        }else{
          $arr['success'] = false;
          return json_encode($arr);
        }

    }





    public function searchbitcoin(Request $request)
    {





        $this->validate($request, [
            'q' => 'required'
        ]);

        $search = $request->get('q');
$count_user = member::where('members.confirmed', 1)->count();
      /*  $objs = bitcoin::where('name_bit', 'like', "%$search%")
            ->orWhere('email_bit', 'like', "%$search%")
            ->orWhere('line_id_bit', 'like', "%$search%")
            ->orWhere('career_bit', 'like', "%$search%")
            ->orWhere('phone_bit', 'like', "%$search%")
            ->paginate(15); */

            $objs = DB::table('members')
                      ->select(
                      'members.*'
                      )
                      ->where('name', 'like', "%$search%")
                          ->orWhere('phone', 'like', "%$search%")
                          ->orWhere('groups', 'like', "%$search%")
                          ->orWhere('company', 'like', "%$search%")
                      ->orderBy('members.id','ASC')
                      ->paginate(15);


        //dd($objs);
        $data['search'] = $search;
        $data['objs'] = $objs;
        $data['count_user'] = $count_user;
        return view('admin.bitcoin.search', $data);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function print($id)
     {
       $get_data = DB::table('members')
                 ->select(
                 'members.*'
                 )
                 ->where('members.id', $id)
                 ->first();

      $data['get_data'] = $get_data;
       return view('admin.bitcoin.print', $data);
     }


    public function destroy($id)
    {
      $obj = DB::table('members')
      ->where('members.id', $id)
      ->delete();


      return redirect(url('admin/bitcoin'))->with('del','ลบข้อมูลสำเร็จ');
    }
}
