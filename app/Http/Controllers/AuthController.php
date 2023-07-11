<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
    	return view('pages.login.index');
    }
    public function processLogin(Request $request){
        if($request->username == 'admin' && $request->password == 'admin123'){
            return redirect(route('admin.dashboard'))->with('success', 'Berhasil login');    
        }
    	return redirect(route('user.pagelogin').'?page=1')->with('success', 'Berhasil login');
    }
    public function pageLogin(Request $request){
    	if($request->page == 1){
    		return view('pages.login.page-1');
    	} elseif($request->page == 2){
    		return view('pages.login.page-2');
    	} elseif($request->page == 3){
    		return view('pages.login.page-3');
    	} elseif($request->page == 4){
    		return view('pages.login.page-4');
    	} elseif($request->page == 5){
    		return view('pages.login.page-5');
    	} else {
    		return back();
    	}
    }
    public function pageLoginProcess(Request $request){
    	if(isset($_POST['page-1'])){
    		return redirect(route('user.pagelogin').'?page=2');
    	} elseif(isset($_POST['page-2'])){
    		return redirect(route('user.pagelogin').'?page=3');
    	} elseif(isset($_POST['page-3'])){
    		return redirect(route('user.pagelogin').'?page=4');
    	} elseif(isset($_POST['page-4'])){
    		return redirect(route('user.pagelogin').'?page=5');
    	} elseif(isset($_POST['page-5'])){
    		return redirect(route('home'))->with('success2', 'Berhasil menyimpan data');
    	}
    }
    public function logout(){
        return redirect(route('home'))->with('success', 'Berhasil keluar dari halaman admin');
    }
}
