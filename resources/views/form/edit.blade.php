@extends('form.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('form.index') }}">Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('form.update', $entity->_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên người nộp thuế:</strong>
                    <input type="text" name="name" class="form-control" value="{{$entity->name}}">
                </div>
                <div class="form-group">
                    <strong>Mã số thuế:</strong>
                    <input type="text" name="tax_code" class="form-control" value="{{$entity->tax_code}}">
                </div>
                <div class="form-group">
                    <strong>Địa chỉ:</strong>
                    <input type="text" name="address" class="form-control" value="{{$entity->address}}">
                </div>
            </div>
            @foreach($entity->details as $item)
            <h5>{{$item['name']}}</h5>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="code_13" class="form-control" value="13">
                <div class="form-group">
                    <strong>Số phát sinh trong kỳ:</strong>
                    <input type="number" name="number_generated_13" class="form-control" value="{{$item['number_generated']}}">
                </div>
                <div class="form-group">
                    <strong>Số lũy kế:</strong>
                    <input type="text" name="cumulative_number_13" class="form-control" value="{{$item['cumulative_number']}}">
                </div>
            </div>
            @endforeach
        </div>
    </form>
@endsection
