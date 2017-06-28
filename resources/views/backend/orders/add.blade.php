@extends('backend.layouts.app')

@section('content')
    {{ Form::open(['route' => 'admin.product.create', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post',  'enctype' => 'multipart/form-data']) }}

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">them san pham</h3>
        </div><!-- /.box-header -->

        <div class="box-body" >
            <div class="col-lg-2">
                <b>ten nguoi mua</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('user_name', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>chon san pham</b>
            </div>
            <div class="col-lg-10 form-group">
                {{ Form::select('product_id', $product, '') }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>so dien thoai</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('user_phone', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body" >
            <div class="col-lg-2">
                <b>dia chi mail</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::email('user_email', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body">
            <div class="form-group">
                {{ Form::label('order_description', 'mo ta hoa don', ['class' => 'col-lg-12 form-label']) }}

                <div class="col-lg-12">
                    {{ Form::textarea('order_description', null, ['class' => 'form-control information-content']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <!-- Buttons -->
            <div class="clearfix"></div>
            <div class="pull-left">
                {{ Form::submit('tao moi', ['class' => 'btn btn-success']) }}
            </div><!--pull-left-->

        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@stop
