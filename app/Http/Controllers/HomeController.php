<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function edit(Request $request)
    {
        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$request->name, 'email'=>$request->email,'password'=>$request->password,'contact_no'=>$request->contact_no]);
        Session::flash('update_success','Your Data Are Updated Successfully.');
        return redirect('/home');
    }
}
