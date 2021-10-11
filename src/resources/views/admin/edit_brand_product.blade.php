@extends('admin_layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thương hiệu sản phẩm
                </header>
                   
                <div class="panel-body">
                    <?php foreach($edit_brand_product as $k => $v){?>
                        <div class="position-center">

                            <form role="form" action="{{URL::to('/update-brand-product/'.$v->brand_id)}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên thương hiệu</label>
                                    <input type="text" name="brand_product_name" class="form-control" id="brand_product_name" value="<?php echo $v->brand_name;?>">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả thương hiệu</label>
                                    <textarea class="form-control" name="brand_product_desc" id="brand_product_desc" >
                                        {{$v->brand_desc}}
                                    </textarea>
                                </div>
                                
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu</button>
                            </form>

                        </div>
                    <?php }?>
                </div>
            </section>
    </div>
</div>
@endsection