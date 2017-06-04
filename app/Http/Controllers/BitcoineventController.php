<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\DB;
use App\bitcoin;
use App\qrcode;
use Validator, Input, Redirect;


class BitcoineventController extends Controller
{
  public function post_back()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back',$data);
  }

  public function post_back2()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back2',$data);
  }

  public function post_back3()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back3',$data);
  }


  public function post_back4()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back4',$data);
  }



  public function post_back5()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back5',$data);
  }


  public function post_back6()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back6',$data);
  }


  public function post_back7()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back7',$data);
  }


  public function post_back8()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back8',$data);
  }



  public function post_back9()
  {


    $objs = DB::table('bitcoins')
              ->select(
              'bitcoins.*',
              'bitcoins.status_user',
              'bitcoins.user_id',
              'social_accounts.user_id',
              'social_accounts.provider_user_id',
              'bitcoins.name_bit'
              )
              ->leftjoin('social_accounts', 'social_accounts.user_id', '=', 'bitcoins.user_id')
              ->groupBy('social_accounts.user_id')
              ->where('bitcoins.status_user', 1)
              ->where('bitcoins.status_user_confirm', 1)
              ->orderBy('bitcoins.id_bit','DESC')
              ->get();

    $data['objs'] = $objs;


      return view('bitcoin_event.post_back9',$data);
  }


}
