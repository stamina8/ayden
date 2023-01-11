<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Computer;
use App\Models\User;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage(Request $request)
    {
       $response = Http::get('https://api.publicapis.org/entries')->json();

        return view('home')->with(['product'=>$response]);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name'     => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('homepage');

        }else{
            return "<script>alert('name or password error');
                setTimeout(function(){window.history.back();},5)</script>";
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('homepage');
    }

    public function registration()
    {
        return view('registration');
//        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([

            'phone_number' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'confirm_password'     => 'required|confirmed',
        ]);

        $contact = User::create([
            'name'         => $request->get('name'),
            'email'        => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'is_student'   => $request->get('is_student'),
            'type'         => $request->get('type'),
            'password'     => Hash::make($request->get('password'))
        ]);

        return redirect('/');
    }

    public function rentalpage($computer_id)
    {
        $computer = Computer::where('computer_id',$computer_id)->first();

        return view('rentalpage')->with('computer',$computer);  // 租用
    }

    public function rental(Request $request)
    {

        if($request->user()->is_student == true){

            $total = ($request->rent_time * $request->price)*0.9 + 50 + $request->insure;

        }else{

            $total = $request->rent_time * $request->price + 50 + $request->insure;

        }

        if($request->user()->balance < $total){

           return "<script>alert('账户余额不足，无法租赁');
                setTimeout(function(){window.history.back();},5)</script>";
        }

        Rental::create([
            'user_id'     => $request->user()->id,
            'computer_id' => $request->computer_id,
            'is_student'  => $request->user()->is_student,
            'insurance'   => $request->insure,
            'duration'    => $request->rent_time,
            'total_price' => $total,
            'status'      => 0
        ]);

        $balance = $request->user()->balance - $total;

        User::where('id',$request->user()->id)->update(['balance'=>$balance]);

        Computer::where('computer_id',$request->computer_id)->decrement('quantity');
        return redirect('rentalall');
    }

}


