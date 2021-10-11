@extends('admin_layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                    <?php
                        $msg = Session::get('message');
                        if($msg) {
                            echo  '<p class="text-success font-weight-bold">'.$msg.'<p>';
                            Session::put('message', null);
                        }
                    ?>
                        @foreach($edit_product as $k => $pro)
                            <form role="form" action="{{URL::to('/update-product/'. $pro->product_id)}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" value="{{$pro->product_name}}">
                                </div>

                                <div class="row ">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input type="text" name="product_price" class="form-control" id="product_price" value="{{$pro->product_price}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Hình ảnh sản phẩm</label>
                                            <input type="file" name="product_image" class="form-control" id="product_image" >
                                            <img src="{{URL::to('uploads/product/'.$pro->product_image)}}" alt="image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" style="resize: none" name="product_desc" id="product_desc" placeholder="Mô tả sản phẩm" rows="4" >
                                        {{$pro->product_desc}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung sản phẩm</label>
                                    <textarea class="form-control" style="resize: none" name="product_content" id="product_content" placeholder="Tóm tắt sản phẩm" rows="4" >
                                        {{$pro->product_content}}
                                    </textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Danh mục sản phẩm</label>
                                            <select name="product_cate" class="form-control input-sm m-bot15">
                                                @foreach($cat_product as $k => $cat)
                                                    @if ($cat->category_id == $pro->category_id)
                                                        <option selected value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                                    @else
                                                        <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Thương hiệu sản phẩm</label>
                                            <select name="product_brand" class="form-control input-sm m-bot15">
                                                @foreach($brand_product as $k => $brand)
                                                    @if ($brand->brand_id == $pro->brand_id)
                                                        <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                                    @else
                                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Hiển thị</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                            </form>
                        @endforeach
                    </div>

                </div>
            </section>
    </div>
</div>
@endsection