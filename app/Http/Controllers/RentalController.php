<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rental;
use App\Models\Computer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{

    public function rentalall()
    {
        $rental = Rental::where('user_id',Auth::user()->id)->get();
        return view('rentalall')->with(['rentals'=>$rental]);  // 租用列表  用户
    }

    public function rental($id)
    {
        Rental::where('id',$id)->update(['status'=>1]);
        return redirect('rentalall');
    }

    public function managerrental()
    {
        $rental = Rental::get();
        return view('managerrental')->with(['rentals'=>$rental]);  // 租用列表  用户
    }

    public function manager_confirm(Request $request,$id)
    {

        $remark = $request->remark;
        $insurance = $request->insurance;

        if(!$insurance){
            switch ($remark) {
                case 'normal':
                    $deduct_money = -50;
                    break;
                case 'minor damage':
                    $deduct_money = 100;
                    break;
                case 'major damage':
                    $deduct_money = 500;
                    break;
                default:
                    $deduct_money = -50;
                    break;
            }

        }else{

            $deduct_money = -50;

        }

        // 预留黑名单操作
        $time = date_create();
        User::where('id',$request->user_id)->decrement('balance',$deduct_money);
        Rental::where('id',$id)->update(['remark'=>$remark,'status'=>2,'rent_time'=>$time]);
        return redirect('managerrental');
    }

    public function usercenter()
    {
        return view('usercenter');
    }

    public function usercenter_update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $user = User::where('id',Auth::user()->id)->update($data);
        return redirect('usercenter');
    }

    public function manager_edit($id)
    {
        $rental = Rental::where('id',$id)->first();
        return view('edit')->with(['rental'=>$rental]);
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        unset($data['_token']);
        Rental::where('id',$id)->update($data);
        return redirect('managerrental');
    }

    public function add(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        Rental::create($data);
        return redirect('/managerrental');
    }
    public function manager_delete($id)
    {
        Rental::where('id',$id)->delete();

        return redirect('/managerrental');
    }
}


