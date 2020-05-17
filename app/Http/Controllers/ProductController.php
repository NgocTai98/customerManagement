<?php

namespace App\Http\Controllers;

use App\models\images;
use App\models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getProduct(){
        $data['product'] = product::orderBy('id','DESC')->paginate(9);
        return view('product', $data);
    }
    public function getAddProduct(){
        return view('add-product');

    }
    public function postAddProduct(Request $r){
        $product = new product();
        $product->name = $r->name;
        $product->price = $r->price;
        $product->description = $r->describe;
        $product->information = $r->info;
        $product->address = $r->address;
        $product->save();

        if($r->hasFile('img'))
        {
           
            foreach ($r->img as  $value) {
                $image = new images();
                $file = $value;
                $filename= str::random(9).'.'.$file->getClientOriginalExtension();
                $file->move('img', $filename);
                $image->img= $filename;
                $image->product_id = $product->id;
                $image->save();
            }
               
                
        }
            
        return redirect('/list-product')->with('thongbao', 'Đã thêm thành công')->withInput();

    }
    public function getDetailProduct($id){
        $data['product'] = product::find($id);
        $data['image'] = images::where('product_id',$id)->get();
        return view('detail-product', $data);
    }
    public function getEditProduct($id){
        $data['product'] = product::find($id);
        return view('edit-product', $data);
    }
    public function postEditProduct(Request $r,$id){
        $product = product::find($id);
        $product->name = $r->name;
        $product->address = $r->address;
        $product->price = $r->price;
        $product->description = $r->description;
        $product->information = $r->information;
        $product->save();
        if ($r->hasFile('img')) {
            foreach ($r->img as  $value) {
                $image = new images();
                $file = $value;
                $filename= str::random(9).'.'.$file->getClientOriginalExtension();
                $file->move('img', $filename);
                $image->img= $filename;
                $image->product_id = $product->id;
                $image->save();
            }
        }
        return redirect('/edit-product'.'/'.$id)->with('thongbao', 'Đã sửa thành công');
    }
    public function deleteProduct($id){
        $product = product::find($id);
        if ($product) {
            $image = images::where('product_id',$id)->get();
            foreach ($image as $value) {
               images::destroy($value->id);
            }
            product::destroy($id);
        }
        
        return redirect('/list-product')->with('thongbao', 'Đã xóa thành công');
    }
    public function deleteImage($id){
        $image = images::destroy($id);
        return redirect('/edit-product'.'/'.$id)->with('thongbao','Đã xóa thành công');
    }
}
