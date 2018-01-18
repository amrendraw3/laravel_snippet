<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use App\file;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDashboard(Request $request)
    {
        $registerd_users  = DB::table('users')->where('admin',"=",'0')->get();
        return View('admin.dashboard.dashboard')->with('users', $registerd_users);
    }

    public function userProfile($id)
    {
        $register_user_info  = DB::table('users')->where('id',"=",$id)->get();
        return View('admin.dashboard.user-profile')->with('user_info', $register_user_info);
    } 
}    
   
