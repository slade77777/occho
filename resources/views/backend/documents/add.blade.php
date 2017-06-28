@extends('backend.layouts.app')

@section('content')
    {{ Form::open(['route' => 'admin.document.create', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post',  'enctype' => 'multipart/form-data']) }}

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">them san pham</h3>
        </div><!-- /.box-header -->

        <div class="box-body" >
            <div class="col-lg-2">
                <b>ten tai lieu</b>
            </div>
            <div class="col-lg-8 form-group">
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="box-body">
            <div class="col-lg-2">
                <b>anh san pham</b>
            </div>

            <div class="col-lg-2 form-group">
                {{ Form::file('type', ['id' => 'avatar_url', 'class' => 'file-loading']) }}
            </div>
        </div><!--form control-->

        <div class="box-body">
            <!-- Buttons -->
            <div class="clearfix"></div>
            <div class="pull-left">
                {{ Form::submit('tao moi', ['class' => 'btn btn-success']) }}
            </div><!--pull-left-->

        </div><!-- /.box-body -->
    </div><!--box-->
    {{ Form::close() }}
@stop
