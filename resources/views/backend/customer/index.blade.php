@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        {{ link_to_route('admin.customer.add', 'Thêm Khách Hàng Mới', null, ['class' => 'btn btn-primary']) }}
    </div>
    <div class="col-lg-12" style="margin-top: 20px;">
        @if(count($customers) > 0)
            <div class="col-lg-12">
            </div>
            <div class="col-lg-12 table-responsive">
                <table class="table room-table-news">
                    <thead>
                    <tr>
                        <th style="width: 15%">STT</th>
                        <th style="width: 15%">Tên Sản Phẩm</th>
                        <th style="width: 30%">Ảnh Đại Diện</th>
                        <th style="width: 30%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->customer_name }}</td>
                            <td>
                                <a class="img-zoom"><img style="width: 160px; height: 160px;"  src="{{url('assets/customers/'.$customer->customer_picture)}}"></a>
                            </td>
                            <td>
                                {{ link_to_route('admin.customer.edit', 'Chỉnh Sửa', $customer->id, ['class' => 'btn btn-success']) }}
                                {{ link_to_route('admin.customer.delete', 'Xóa Khách Hàng', $customer->id, ['class' => 'btn btn-danger']) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center" colspan="3" style="border: none">Chưa Có Khách Hàng</p>
        @endif

    </div>

@stop

