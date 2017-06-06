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
    $data['objs'] = NULL;
    return view('bitcoin_event.post_back',$data);
  }

  public function post_back2()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back2',$data);
  }

  public function post_back3()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back3',$data);
  }


  public function post_back4()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back4',$data);
  }



  public function post_back5()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back5',$data);
  }


  public function post_back6()
  {


  $data['objs'] = NULL;
    $data['objs'] = $objs;


      return view('bitcoin_event.post_back6',$data);
  }


  public function post_back7()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back7',$data);
  }


  public function post_back8()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back8',$data);
  }



  public function post_back9()
  {


    $data['objs'] = NULL;
      return view('bitcoin_event.post_back9',$data);
  }


}
