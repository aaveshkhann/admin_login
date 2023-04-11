<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.login");
    }


    public function store(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result = Admin::where(['email'=>$email,'password'=>$password])->get();
        $result = Admin::where(['email'=>$email])->first();
        if($result){
                    if(Hash::check($request->post('password'),$result->password)){
                        $request->session()->put('ADMIN_LOGIN',true);
                        $request->session()->put('ADMIN_ID',$result->id);
                        return redirect('_admin/dashboard');
                    }
                    else{
                        $request->session()->flash('error','please enter valid  password');
                        return redirect('_admin');
                    }
         }
        else{
            $request->session()->flash('error','please enter valid email ');
            return redirect('_admin');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

}
