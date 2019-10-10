@extends('backend.master.master')
@section('content')
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <form  method="post" enctype="multipart/form-data">
        @csrf
    <!--/.row-->
    <div class="row ">
        <div class="col-xs-12 col-md-12 col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h3>Tiêu đề</h3>
                    <div class="form-group">
                        <input name="title" style="font-weight: bold;font-size: 18px;" class="form-control"
                            placeholder="Tiêu Đề ...">
                           @error('title')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                           @enderror
                    </div>
                    
                    <div class="form-group">
                        <textarea name="describe" id="describe" ></textarea>
                        
                        @error('describe')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <h4>Mô tả</h4>
                    <div>
                        <textarea style="width: 100%;" name="content" id="content"></textarea>
                        <script>
                             CKEDITOR.replace('describe');
                           CKEDITOR.replace('content', {
                                    filebrowserBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html') }}',
                                    filebrowserImageBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html?type=Images') }}',
                                    filebrowserFlashBrowseUrl: '{{ asset('backend/ckfinder/ckfinder.html?type=Flash') }}',
                                    filebrowserUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                                    filebrowserImageUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                                    filebrowserFlashUploadUrl: '{{ asset('backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                } );

                        </script>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-md-12 col-lg-4">
            <div id="app-vue" class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group border-b">
                        <h4>
                            Ảnh Bài viết

                        </h4>
                        @error('img')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100%" src="img/images/no-img.jpg">
                    </div>
                    <div class="border-b">
                        <h4>Nổi bật <input type="checkbox" name="featured" id=""></h4>
                        
                    </div>
                    <div class="form-group border-b">
                        <h4>Danh Mục</h4>
                      <select class="form-control" name="category_id" id="">
                      {{ getCategory($categories,0,'',0) }}
                      </select>
                    </div>
                    
                    
                    @php
                        $tag='{{ tag }}';
                    @endphp
                    <h4>Thẻ SEO</h4>
                    <div style="margin-bottom: 10px;" class="tags">
                        <div v-for="(tag,index) in tags" class="tag">
                            {{ $tag }} <i @click="removeTag(index)" class="fas fa-times"></i>
                            <input type="hidden"  name="tags[]" :value="tag" >
                        </div>
                    </div>
                  
                    <div class="add-tag border-b">
                        <input  value="" v-model="txtTag">
                        <a class="btn btn-primary" @click="addTag()">Thêm</a>
                    </div>
                  
                   
                    <h4>Tuỳ Chọn</h4>
                
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Tạo Mới</button>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    </form>
    <!--/.row-->
</div>
@stop
@section('script')
@parent
<script src="https://vuejs.org/js/vue.min.js"></script>
<script>
    function changeImg(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function (e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        $('#avatar').click(function () {
            $('#img').click();
        });
    });


    new Vue({
  el: '#app-vue',
  data: {
    tags:[],
    txtTag:''
  },
  methods: {
      addTag(){
        this.tags.push(this.txtTag);
        this.txtTag='';
      },
      removeTag(index){
        this.tags.splice(index,1);
       
      }
  },

});

</script>

@stop

@section('css')
@parent
<script src="ckeditor/ckeditor.js"></script>
@stop
