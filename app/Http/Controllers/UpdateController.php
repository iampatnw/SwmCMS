<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;       //from user manual
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class UpdateController extends Controller {

public function Updateinfo()
	{
       DB::table('tb_info')->where('id','=' , 1 )->update(array('school_th' => Input::get('school_th'),'school_en' => Input::get('school_en'),'school_cate' => Input::get('school_cate'),'school_area' => Input::get('school_area'),'course' => Input::get('course'),'schooltype' => Input::get('schooltype'),'bday' => Input::get('bday'),'founder_name' => Input::get('founder_name'),'llicensee_name' => Input::get('llicensee_name'),'address' => Input::get('address'),'tumbol' => Input::get('tumbol'),'amphur' => Input::get('amphur'),'province' => Input::get('province'),'zipcode' => Input::get('zipcode'),'phone' => Input::get('phone'),'fax' => Input::get('fax'),'manager' => Input::get('manager'),'phone_dir' => Input::get('phone_dir'),'email' => Input::get('email')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/setting');
	}

public function Updatehistory()
	{
       DB::table('tb_history')->where('id','=' , 1 )->update(array('toppic' => Input::get('toppic'),'history' => Input::get('history')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/history');
	}

    public function Updatewebinfo()
	{
       DB::table('tb_webinfo')->where('id','=' , 1 )->update(array('title' => Input::get('title'),'description' => Input::get('description'),'keywords' => Input::get('keywords'),'textruns' => Input::get('textruns'),'footer' => Input::get('footer'),'fbfanpage' => Input::get('fbfanpage')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/webinfo');
	}

	public function Updatewebinfo1(Request $request)
{
	$this->validate($request, [
					'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);

			$imageName = time().'.'.$request->image->getClientOriginalExtension();
			$request->image->move(public_path('images'), $imageName);
	  DB::table('tb_webinfo')->where('id','=' , 2 )->update(array('imgbg' => $imageName ,'bgcolor' => Input::get('bgcolor'),'menubarcolor' => Input::get('menubarcolor'),'menucolor' => Input::get('menucolor') ));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
				 return Redirect('/adminsys/webinfo');
}

    public function Approve()
	{
       DB::table('tb_guestbook')->where('id','=', Input::get('id') )->update(array('status' => Input::get('status')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/guestbook');
	}


      public function Delguestbook ($id)
	{
        $row = DB::table('tb_guestbook')->where('id','=',$id)->delete();
		   Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/guestbook');
	}

    public function Updatecalendar()
	{
       DB::table('tb_event')->where('id','=', Input::get('id') )->update(array('title' => Input::get('inputtitle'),'activities' =>  Input::get('message'),'start' =>  Input::get('startdate'),'time_start' =>  Input::get('starttime'),'end' =>  Input::get('enddate'),'time_end' =>  Input::get('enstime'),'color' =>  Input::get('bgcolor'),'eventwho' =>  Input::get('eventwho'),'location' =>  Input::get('location')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/adminsys/calendar');
	}
}
