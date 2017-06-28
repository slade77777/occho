@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        {{ link_to_route('admin.order.add', 'them moi san pham', null, ['class' => 'btn btn-primary']) }}
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
                        <th style="width: 15%">ten san pham</th>
                        <th style="width: 20%">ten khach hang</th>
                        <th style="width: 20%">so dien thoai</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->product_id }}</td>
                            <td>{{ $order->user_name }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>
                                {{ link_to_route('admin.order.edit', 'chinh sua', $order->id, ['class' => 'btn btn-success']) }}
                                {{ link_to_route('admin.order.delete', 'xoa san pham', $order->id, ['class' => 'btn btn-danger']) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center" colspan="3" style="border: none">chua co san pham</p>
        @endif

    </div>

@stop

