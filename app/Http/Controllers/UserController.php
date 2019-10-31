<?php

namespace App\Http\Controllers;

use App\Food;
use App\User;
use App\user_db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function viewUsers() {
        $users = DB::table('user_dbs')->paginate(100);

        return view('view_users', ['user_dbs' => $users]);
    }

    public function searchUser(Request $request) {
        $search = $request->get('search');

        $users = DB::table('user_dbs')->where('username','like',"%".$search."%")->paginate(100);
        return view('view_users', ['user_dbs' => $users]);
    }

    public function isLoggedIn(){
        return Session::get('login');
    }
    public function index(){
        if($this->isLoggedIn()){$foods = Food::all();
            return view('index',[
                'foods'=>$foods
            ]);
        }
        else{
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }
    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('index');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
    public function view(){
        if($this->isLoggedIn()){
            $foods = Food::all();
            return view('view',[
                'foods'=>$foods
            ]);
        }else{
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }
    public function add(){
        if($this->isLoggedIn()){
            return view('add');
        }else{
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }
    public function delete($id){
        if($this->isLoggedIn()){
            $ctr = new FoodController();
            $ctr->delete($id);
            return redirect('index');
        }else{
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }

    public function home(){
        $foods = Food::all();
        return view('index')->with(
            'foods' -> $foods
        );
    }
}
