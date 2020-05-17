
<div>
    <link href="../product/css/bootstrap.min.css" rel="stylesheet">
	
<link href="../product/css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="../product/js/lumino.glyphs.js"></script>
<link rel="stylesheet" href="../product/Awesome/css/all.css">
<div class="row">
    <div class="col-xs-6 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('thongbao') }}</strong>
            </div>
            @endif
            <div class="panel-heading">Sửa thông tin nhà</div>
            <form action="" method="post" enctype="multipart/form-data"> @csrf
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="address" class="form-control" value="{{ $product->address }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm (Giá chung)</label>
                                        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea id="editor" name="description" style="width: 100%;height: 100px;" >{{ $product->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Thông tin</label>
                                        <textarea name="information" style="width: 100%;height: 100px;">{{ $product->information }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ảnh đại diện sản phẩm</label>
                                        <input id="img" type="file" name="img[]" class="form-control hidden"
                                            onchange="changeImg(this)" multiple>
                                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="../product/img/import-img.png" >

                                    </div>
                                    <div class="imgPro">
                                        @foreach ($product->image as $item)
                                        <span class="img-item">
                                            <img src="../img/{{ $item->img }}" alt="" style="height: 100px; width: 150px">
                                            <a onclick="return delImg()" href="/del-image/{{ $item->id }}"><i class="fa fa-trash-alt" style="position: absolute;
                                                margin-left: -20px;
                                                color: #c11010;
                                                margin-top: 5px;"></i></a>
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <button class="btn btn-success" name="add-product" type="submit">Sửa</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../product/js/jquery-1.11.1.min.js"></script>
<script src="../product/js/bootstrap.min.js"></script>
{{-- <script src="../product/js/chart.min.js"></script>
<script src="../product/js/chart-data.js"></script> --}}
<script>
    function changeImg(input){
           //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
           if(input.files && input.files[0]){
               var reader = new FileReader();
               //Sự kiện file đã được load vào website
               reader.onload = function(e){
                   //Thay đổi đường dẫn ảnh
                   $('#avatar').attr('src',e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
           }
       }
       $(document).ready(function() {
           $('#avatar').click(function(){
               $('#img').click();
           });
       });

       function delImg() {
           return confirm("Bạn có chắc chắn muốn xóa");
       }

   </script>
   
</div>