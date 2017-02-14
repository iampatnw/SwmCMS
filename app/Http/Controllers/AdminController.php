<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;       //from user manual
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function Adminwelcome()
	{
		return View('adminsys.index');
	}

    public function Settingpage()
	{
        $row = DB::table('tb_info')->where('id','=', 1)->first();
		return View('adminsys.setting')->with('data',$row );
	}

     public function Newspage()
	{
        $row = DB::table('tb_news')->get();
		return View('adminsys.news')->with(array('data' => $row ));
	}

    public function Newsaddpage()
	{
		return View('adminsys.newsadd');
	}

    public function Historypage()
	{
        $row = DB::table('tb_history')->where('id','=', 1)->first();
		return View('adminsys.history')->with('data',$row );
	}

    public function Webinfo()
	{
        $row = DB::table('tb_webinfo')->where('id','=', 1)->first();
		$row1 = DB::table('tb_webinfo')->where('id','=', 2)->first();
		return View('adminsys.webinfo')->with(array('data' => $row,'data1'=>$row1 ));
	}

    public function Calendar()
	{
        $row = DB::table('tb_event')->get();
		return View('adminsys.calendar')->with(array('data' => $row ));
	}

    public function Guestbook()
    {
       $row = DB::table('tb_guestbook')->get();
		return View('adminsys.guestbook')->with(array('data' => $row ));
    }

    public function Editbook($id)
	{
    $row = DB::table('tb_guestbook')->where('id','=',$id)->first();
		return View('adminsys.upbook')->with('data',$row);
	}

    public function Editcalendar($id)
	{
        $row = DB::table('tb_event')->where('id','=',$id)->first();
		return View('adminsys.upcalendar')->with('data',$row);
	}

}
