@extends('form.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form 1</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('form.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <p>Tên người nộp thuế: {{$entity->name}}</p>
    <p>Mã số thuế: {{$entity->tax_code}}</p>
    <p>Địa chỉ: {{$entity->address}}</p>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Chỉ tiêu</th>
            <th>Mã chỉ tiêu</th>
            <th width="280px">Số phát sinh</th>
            <th width="280px">Số lũy kế</th>
        </tr>
        @foreach ($entity->details as $key => $item)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['code'] }}</td>
                <td>{{ $item['number_generated'] }}</td>
                <td>{{ $item['cumulative_number'] }}</td>
            </tr>
        @endforeach
    </table>


@endsection
