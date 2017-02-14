<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;       //from user manual
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;

class SaveController extends Controller {

  public function Savenews(){

        DB::table('tb_news')->insert(array('toppic' => Input::get('toppic'),'news' =>  Input::get('news'),'picture' =>  Input::get('image'),'date' =>  Input::get('date')));
        Session::flash('alert-success', 'บันทึกสำเร็จชิกสำเร็จ!');
		return Redirect('/adminsys/news');

    }


    public function Savebook(){


        DB::table('tb_guestbook')->insert(array('name' => Input::get('inputName'),'message' =>  Input::get('message'),'email' =>  Input::get('inputEmail'),'date' =>   date('Y-m-d'),'time' =>  date('h:i:sa'),'ipaddress' =>  $_SERVER['REMOTE_ADDR']));
        Session::flash('alert-success', 'บันทึกสำเร็จชิกสำเร็จ!');
		return Redirect('/guestbook');

    }

     public function Savecalendar(){


        DB::table('tb_event')->insert(array('title' => Input::get('inputtitle'),'activities' =>  Input::get('message'),'start' =>  Input::get('startdate'),'time_start' =>  Input::get('starttime'),'end' =>  Input::get('enddate'),'time_end' =>  Input::get('enstime'),'color' =>  Input::get('bgcolor'),'eventwho' =>  Input::get('eventwho'),'location' =>  Input::get('location')));
        Session::flash('alert-success', 'บันทึกสำเร็จชิกสำเร็จ!');
		return Redirect('/adminsys/calendar');

    }

    public function Savecomplain(){

            DB::table('tb_complain')->insert(array('title' => Input::get('inputtitle'),'message' =>  Input::get('message'),'email' =>  Input::get('inputEmail'),'name' =>  Input::get('inputName'),'phone' =>  Input::get('inputphone')));
            Session::flash('alert-success', 'บันทึกสำเร็จชิกสำเร็จ!');
    		return Redirect('/complain');

        }

}
