<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCustomerRequest;
use App\Http\Requests\EditCustomerRequest;
use App\models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function getCustomer() {
        $data['customer'] = customer::paginate(8);
        return view('customer',$data);
    }
    public function getAddCustomer() {
        
        return view('add-customer');
    }
    public function postAddCustomer(AddCustomerRequest $r) {
        $customer = new customer();
        $customer->name = $r->name;
        $customer->phone = $r->phone;
        $customer->address = $r->address;
        $customer->need = $r->need;
        $customer->rate = $r->rate;
        $customer->save();
        return redirect('/customer1')->with('thongbao', 'Đã thêm thành công')->withInput();
    }

    public function getEditCustomer($id){
        $data['customer'] = customer::find($id);
        return view('/edit-customer', $data);
    }

    public function postEditCustomer(EditCustomerRequest $r, $id) {
        $customer = customer::find($id);
        $customer->name = $r->name;
        $customer->phone = $r->phone;
        $customer->address = $r->address;
        $customer->need = $r->need;
        $customer->rate = $r->rate;
        $customer->save();
        return redirect('/customer1')->with('thongbao', 'Đã sửa thành công')->withInput();
    }
    public function deleteCustomer($id){
        $customer = customer::destroy($id);
        return redirect('/customer1')->with('thongbao', 'Đã xóa thành công')->withInput();
    }
    public function searchCustomer(Request $r){
      
        $name = customer::where('name','LIKE','%'.$r->search.'%')->get(); 
        $phone = customer::where('phone','LIKE','%'.$r->search.'%')->get();
        $address = customer::where('address','LIKE','%'.$r->search.'%')->get();
        $need = customer::where('need','LIKE','%'.$r->need.'%')->get();
        if (customer::where('rate',$r->rate)->count()) {
            $data['customer'] = customer::where('rate',$r->rate)->get();
        }
        elseif ($r->search) {
            if (customer::where('name','LIKE','%'.$r->search.'%')->count()) {
                $data['customer'] = $name;
            }
            elseif (customer::where('phone','LIKE','%'.$r->search.'%')->count()) {
                $data['customer'] = $phone;
            }
            elseif (customer::where('address','LIKE','%'.$r->search.'%')->count()) {
                $data['customer'] = $address;
            }
            elseif (customer::where('need','LIKE','%'.$r->need.'%')->count()) {
                $data['customer'] = $need;
            }
            else{
                $data['customer'] = [];
            }
        }
        else {
            $data['customer'] = [];
        }
        return view('customer', $data);
    }
}
