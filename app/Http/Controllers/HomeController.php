<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;       //from user manual
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class HomeController extends Controller
{

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

	public function showWelcome()
	{
        $row = DB::table('tb_news')->get();
        $info = DB::table('tb_info')->where('id','=',1)->first();
        $webinfo = DB::table('tb_webinfo')->where('id','=',1)->first();
				$webinfo1 = DB::table('tb_webinfo')->where('id','=',2)->first();
				$download = DB::table('tb_download')->where('type','=',0 )->get();
				return View('index')->with(array('data' => $row,'info'=>$info,'webinfo'=>$webinfo,'webinfo1'=>$webinfo1,'download'=>$download ));
	}

    public function News($id)
	{
        $row = DB::table('tb_news')->where('id','=',$id)->first();
        $info = DB::table('tb_info')->where('id','=',1)->first();
				$webinfo = DB::table('tb_webinfo')->where('id','=',1)->first();
				$webinfo1 = DB::table('tb_webinfo')->where('id','=',2)->first();
				$download = DB::table('tb_download')->where('type','=',0 )->get();
		return View('news')->with(array('data' => $row,'info'=>$info,'webinfo'=>$webinfo,'webinfo1'=>$webinfo1,'download'=>$download ));
	}

     public function History()
	{
        $row = DB::table('tb_history')->where('id','=', 1)->first();
        $info = DB::table('tb_info')->where('id','=',1)->first();
		return View('history')->with(array('data' => $row,'info'=>$info ));
	}

    public function Book()
	{
        $row = DB::table('tb_guestbook')->orderBy('id', 'desc')->get();
        $info = DB::table('tb_info')->where('id','=',1)->first();
				$webinfo = DB::table('tb_webinfo')->where('id','=',1)->first();
				$webinfo1 = DB::table('tb_webinfo')->where('id','=',2)->first();
				$download = DB::table('tb_download')->where('type','=',0 )->get();
		return View('guestbook')->with(array('data' => $row,'info'=>$info,'webinfo'=>$webinfo,'webinfo1'=>$webinfo1 ));
	}

    public function Calendar()
	{
         $row = DB::table('tb_event')->get();
        $info = DB::table('tb_info')->where('id','=',1)->first();
		return View('calendar')->with(array('data' => $row,'info'=>$info ));
	}

     public function Even($id)
	{
        $row = DB::table('tb_event')->where('id','=',$id)->first();
        $info = DB::table('tb_info')->where('id','=',1)->first();
		return View('even')->with(array('data' => $row,'info'=>$info ));
	}
	public function download()
	{
        $row = DB::table('tb_news')->get();
        $info = DB::table('tb_info')->where('id','=',1)->first();
        $webinfo = DB::table('tb_webinfo')->where('id','=',1)->first();
				$webinfo1 = DB::table('tb_webinfo')->where('id','=',2)->first();
				$download = DB::table('tb_download')->where('type','=',0 )->get();
				return View('download')->with(array('data' => $row,'info'=>$info,'webinfo'=>$webinfo,'webinfo1'=>$webinfo1,'download'=>$download ));
	}

	public function complain()
{
			$info = DB::table('tb_info')->where('id','=',1)->first();
			$webinfo = DB::table('tb_webinfo')->where('id','=',1)->first();
			$webinfo1 = DB::table('tb_webinfo')->where('id','=',2)->first();
	return View('complain')->with(array('info'=>$info,'webinfo'=>$webinfo,'webinfo1'=>$webinfo1 ));
}

}
