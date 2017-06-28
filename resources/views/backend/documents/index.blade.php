@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12">
        {{ link_to_route('admin.document.add', 'them moi san pham', null, ['class' => 'btn btn-primary']) }}
    </div>
    <div class="col-lg-12" style="margin-top: 20px;">
        @if(count($documents) > 0)
            <div class="col-lg-12">
                <div style="float: right">
                    @include('includes.partials.pagination', ['paging' => $documents])
                </div>
            </div>
            <div class="col-lg-12 table-responsive">
                <table class="table room-table-news">
                    <thead>
                    <tr>
                        <th style="width: 20%">id</th>
                        <th style="width: 30%">ten tai lieu</th>
                        <th style="width: 20%">tai tai lieu</th>
                        <th style="width: 30%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($documents as $document)
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->name }}</td>
                            <td>
                                <a class="btn btn-default" href="{{ $document->type }}" download>tai tai lieu</a>
                            </td>
                            <td>
                                {{ link_to_route('admin.document.delete', 'xoa tai lieu', $document->id, ['class' => 'btn btn-danger']) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center" colspan="3" style="border: none">chua co tai lieu</p>
        @endif

    </div>

@stop

