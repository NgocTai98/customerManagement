
<div>
    <link href="../product/css/bootstrap.min.css" rel="stylesheet">
	
<link href="../product/css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="../product/js/lumino.glyphs.js"></script>
<link rel="stylesheet" href="../product/Awesome/css/all.css">
<div class="row">
    <div class="col-xs-6 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Thêm mới thông tin căn nhà</div>
            <form action="" method="post" enctype="multipart/form-data"> @csrf
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Tên căn nhà</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá nhà (Giá chung)</label>
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Thông tin</label>
                                        <textarea name="info" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ảnh đại diện nhà</label>
                                        <input id="img" type="file" name="img[]" class="form-control hidden"
                                            onchange="changeImg(this)" multiple>
                                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="../product/img/import-img.png" >

                                        {{-- <div class="form-group">
                                            <label for="image 1">Chi tiết ảnh sản phẩm</label>
                                            <input type="file" name="files[]"  class="selectImage" id="images"/ multiple>
                                            <div class="show-progress">
                                                  
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row justify-content-center" id="showImage"> --}}

                                        

                                    </div>
                                </div>
                    </div>
                    
                    
                        <div class="row">
                            <div class="col-md-12">
                                
                                <button class="btn btn-success" name="add-product" type="submit">Thêm</button>
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


       
//     $(document).ready(function(){
 
//  var i=0;
//  var dataImage = new Array();
//  var dataPosition = new Array();

//  $("#images").change(function(){
//      var checkImage = this.value;
//      var ext = checkImage.substring(checkImage.lastIndexOf('.') + 1).toLowerCase();
//      if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
//      {
//          change(this);
//          var file = document.getElementById('images').files[0];
//          dataImage[i]=file; //add push to array dataImage
//          dataPosition[i]=i;  //add push position to dataPosition
//         //created html progress
//          var html_progress = '<div class="progress" style="margin-bottom:5px;"><div class="progress-bar" id="progress-'+i+'" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div></div>';
//          $(".show-progress").append(html_progress);
//          i++;
//      }
//      else
//          alert("Please select image file (jpg, jpeg, png).") 
//  });
//  var change = function(input){
//      if (input.files && input.files[0]) {
//          var reader = new FileReader();
//          reader.onload = function (e) {
//              var addImage = '<div class="col-md-3"><img src='+e.target.result+'></div>';
             
//              //add image to div="showImage"
//              $("#showImage").append(addImage);
//          }
//          reader.readAsDataURL(input.files[0]);
//      }
//  }
//  var upload = function(data,position){
//      var formData = new FormData(); 
//         //append data to formdata
//          formData.append('image',data);
//          var id = position;
//          $.ajaxSetup({
//              headers: {
//                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//              }
//          });
//          $.ajax({
//              type:'POST',
//              url:'http://localhost:8000/add-product',
//              data:formData,
//              contentType: false,
//              dataType:'json',
//              processData: false,
//              cache:false,
//              xhr: function () {
//                  console.log(id);
//                  var xhr = new window.XMLHttpRequest();
//                  xhr.upload.addEventListener("progress", function (evt) {
//                      if (evt.lengthComputable) {
//                          var percentComplete = evt.loaded / evt.total;
//                          percentComplete = parseInt(percentComplete * 100);
//                          if(percentComplete==100){
//                              dataImage.splice(id, 1);
//                              dataPosition.splice(id, 1);
//                          }
//                          $("#progress-"+id).text(percentComplete + '%');
//                          $("#progress-"+id).css('width', percentComplete + '%');
//                      }
//                  }, false);
//                  return xhr;
//              },
//              success:function(data){
//                  console.log(data);
//              }
             
//          });
//  }

//  $("form#upload").submit(function( event ) {
//          event.preventDefault();
//          var k=0;
//          for(k=0; k<dataImage.length;k++){
              
//              /**
//               * Function Upload
//               * params 1: data image
//               * params 2: position[ progressbar-1 or progressbar-2,...]
//               */
//              upload(dataImage[k],dataPosition[k]);
//          }   
//  });


// });



   </script>
   
</div>