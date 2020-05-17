<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCustomerRequest;
use App\models\host;
use Illuminate\Http\Request;

class hostController extends Controller
{
    public function getHost(){
        $data['host'] = host::paginate(8);
        return view('host', $data);
    }
    public function getAddHost(){
        return view('add-host');
    }
    public function postAddHost(AddCustomerRequest $r){
        $host = new host();
        $host->name = $r->name;
        $host->phone = $r->phone;
        $host->address = $r->address;
        $host->email = $r->email;
        $host->save();
        return redirect('/host')->with('thongbao', 'Đã thêm mới thành công chủ nhà')->withInput();
    }
    public function getEditHost($id){
        $data['host'] = host::find($id);
        return view('edit-host', $data);
    }
    public function postEditHost(AddCustomerRequest $r ,$id){
        $host = host::find($id);
        $host->name = $r->name;
        $host->phone = $r->phone;
        $host->address = $r->address;
        $host->email = $r->email;
        $host->save();
        return redirect('/host')->with('thongbao','Đã sửa thành công')->withInput();
    }
    public function deleteHost($id){
        $host = host::destroy($id);
        return redirect('/host')->with('thongbao', 'Đã xóa thành công')->withInput();
    }
}
