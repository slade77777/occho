@extends('backend.layouts.app')

@section('content')
    {{ Form::open(['route' => 'admin.product.update', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post',  'enctype' => 'multipart/form-data']) }}

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">chỉnh sửa sản phẩm</h3>
        </div><!-- /.box-header -->

        <div class="box-body" >
            <div class="col-lg-2">
                <b>tên sản phẩm</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('product_name', $product->product_name, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body">
            <div class="col-lg-2">
                <b>ảnh sản phẩm</b>
            </div>

            <div class="col-lg-2 form-group">
                {{ Form::file('product_picture', ['id' => 'avatar_url', 'class' => 'file-loading', 'accept' => 'image/*']) }}
            </div>
        </div><!--form control-->

        <div class="box-body">
            <div class="form-group">
                {{ Form::label('product_description', 'mô tả sản phẩm', ['class' => 'col-lg-12 form-label']) }}

                <div class="col-lg-12">
                    {{ Form::textarea('product_description', $product->product_description, ['class' => 'form-control information-content']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <!-- Buttons -->
            <div class="clearfix"></div>
            <div class="pull-left">
                {{ Form::hidden('id', $product->id) }}
                {{ Form::submit('cập nhật', ['class' => 'btn btn-success']) }}
            </div><!--pull-left-->

        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@stop
