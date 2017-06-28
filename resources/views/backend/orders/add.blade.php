@extends('backend.layouts.app')

@section('content')
    {{ Form::open(['route' => 'admin.order.create', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post',  'enctype' => 'multipart/form-data']) }}

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">thêm sản phẩm</h3>
        </div><!-- /.box-header -->

        <div class="box-body" >
            <div class="col-lg-2">
                <b>tên người mua</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('user_name', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>chọn sản phẩm</b>
            </div>
            <div class="col-lg-10 form-group">
                {{ Form::select('product_id', $product, '') }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>số điện thoại</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('user_phone', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>địa chỉ email</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::email('user_email', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body">
            <div class="form-group">
                {{ Form::label('order_description', 'mô tả hoá đơn', ['class' => 'col-lg-12 form-label']) }}

                <div class="col-lg-12">
                    {{ Form::textarea('order_description', null, ['class' => 'form-control information-content']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <!-- Buttons -->
            <div class="clearfix"></div>
            <div class="pull-left">
                {{ Form::submit('tạo mới', ['class' => 'btn btn-success']) }}
            </div><!--pull-left-->

        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@stop
