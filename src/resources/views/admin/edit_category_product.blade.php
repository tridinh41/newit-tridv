@extends('admin_layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục sản phẩm
                </header>
                   
                <div class="panel-body">
                    <?php foreach($edit_category_product as $k => $v){?>
                        <div class="position-center">

                            <form role="form" action="{{URL::to('/update-category-product/'.$v->category_id)}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="category_product_name" class="form-control" id="category_product_name" value="<?php echo $v->category_name;?>">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả danh mục</label>
                                    <textarea class="form-control" name="category_product_desc" id="category_product_desc" >
                                        {{$v->category_desc}}
                                    </textarea>
                                </div>
                                
                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>

                        </div>
                    <?php }?>
                </div>
            </section>
    </div>
</div>
@endsection