<?php


namespace App\Http\Controllers;
use App\Food;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function index() {
    }
    public function getFoods(){
        $foods = Food::all();
        return $foods;
    }
    public function delete($id){
        $current = Food::find($id);
        $current->delete();
        return view('index');
    }
    public function edit($id){
        $food = Food::find($id);
        return view('edit',compact('food','id'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'foodname' => 'required|min:4',
            'quantity' => 'required|gt:0',
            'price' => 'required|gt:0'
        ]);

        $data =  Food::find($id);
        $data->foodname = $request->foodname;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->email = Session::get('email');
        $data->save();
        return redirect('index')->with('success','Kamu berhasil update');
    }
    public function insert(Request $request){
        $this->validate($request, [
            'foodname' => 'required|min:4',
            'quantity' => 'required|gt:0',
            'price' => 'required|gt:0'
        ]);

        $data =  new Food();
        $data->foodname = $request->foodname;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->email = Session::get('email');
        $data->save();
        return redirect('index')->with('success','Kamu berhasil add food');
    }

}
