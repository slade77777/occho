@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        {{ link_to_route('admin.product.add', 'them moi san pham', null, ['class' => 'btn btn-primary']) }}
    </div>
    <div class="col-lg-12" style="margin-top: 20px;">
        @if(count($products) > 0)
            <div class="col-lg-12">
                <div style="float: right">
                    @include('includes.partials.pagination', ['paging' => $products])
                </div>
            </div>
            <div class="col-lg-12 table-responsive">
                <table class="table room-table-news">
                    <thead>
                    <tr>
                        <th style="width: 15%">id</th>
                        <th style="width: 15%">ten san pham</th>
                        <th style="width: 30%">anh dai dien</th>
                        <th style="width: 30%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <a class="img-zoom"><img style="width: 200px" src="{{ $product->product_picture }}"></a>
                            </td>
                            <td>
                                {{ link_to_route('admin.product.edit', 'chinh sua', $product->id, ['class' => 'btn btn-success']) }}
                                {{ link_to_route('admin.product.delete', 'xoa san pham', $product->id, ['class' => 'btn btn-danger']) }}
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

