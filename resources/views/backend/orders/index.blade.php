@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        {{ link_to_route('admin.order.add', 'thêm mới đơn hàng', null, ['class' => 'btn btn-primary']) }}
    </div>
    <div class="col-lg-12" style="margin-top: 20px;">
        @if(count($orders) > 0)
            <div class="col-lg-12">
                <div style="float: right">
                    @include('includes.partials.pagination', ['paging' => $orders])
                </div>
            </div>
            <div class="col-lg-12 table-responsive">
                <table class="table room-table-news">
                    <thead>
                    <tr>
                        <th style="width: 15%">id</th>
                        <th style="width: 15%">tên sản phẩm</th>
                        <th style="width: 20%">tên khách hàng</th>
                        <th style="width: 20%">số điện thoại</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->product_name }}</td>
                            <td>{{ $order->user_name }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>
                                {{ link_to_route('admin.order.edit', 'chỉnh sửa', $order->order_id, ['class' => 'btn btn-success']) }}
                                {{ link_to_route('admin.order.delete', 'xoá đơn hàng', $order->order_id, ['class' => 'btn btn-danger']) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center" colspan="3" style="border: none">chưa có đơn hàng nào</p>
        @endif

    </div>

@stop

