@extends('backend.layouts.app')

@section('content')
    {{ Form::open(['route' => 'admin.customer.create', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post',  'enctype' => 'multipart/form-data']) }}

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm Khách Hàng</h3>
        </div><!-- /.box-header -->

        <div class="box-body" >
            <div class="col-lg-2">
                <b>Tên Khách Hàng</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('customer_name', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body">
            <div class="col-lg-2">
                <b>Ảnh Đại Diện</b>
            </div>

            <div class="col-lg-2 form-group">
                {{ Form::file('customer_picture', ['id' => 'avatar_url', 'class' => 'file-loading', 'accept' => 'image/*']) }}
            </div>
        </div><!--form control-->


            <!-- Buttons -->
            <div class="clearfix"></div>
            <div class="pull-left">
                {{ Form::submit('Tạo Mới', ['class' => 'btn btn-success']) }}
            </div><!--pull-left-->

        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@stop
