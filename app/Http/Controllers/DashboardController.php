<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\DB;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\qrcode;
use App\member;

class DashboardController extends Controller
{
  public function index()
  {





    $count_user = member::where('members.confirmed', 1)->count();

    $count_user_all = member::where('members.confirmed', 0)->count();

  //  dd($count_user_all);
    //$objs = bitcoin::paginate(15);
    $objs = DB::table('members')
              ->select(
              'members.*'
              )
              ->where('members.confirmed', 1)
              ->orderBy('members.updated_at','ASC')
              ->paginate(15);

    $data['header'] = 'รายชื่อผู้ลงทะเบียนเข้างาน';
    $data['objs'] = $objs;
    $data['count_user'] = $count_user;
    $data['count_user_all'] = $count_user_all;
    return view('admin.dashboard.index', $data);
  }
}
