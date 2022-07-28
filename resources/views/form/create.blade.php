@extends('form.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>create</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('form.index') }}">Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên người nộp thuế:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Mã số thuế:</strong>
                    <input type="text" name="tax_code" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Địa chỉ:</strong>
                    <input type="text" name="address" class="form-control">
                </div>
            </div>
            <b>I. Doanh thu từ hoạt động đại lý xổ số</b>
            <p>1.Tổng doanh thu trả trong kỳ:</p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="code_13" class="form-control" value="13">
                <div class="form-group">
                    <strong>Số phát sinh trong kỳ:</strong>
                    <input type="number" name="number_generated_13" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Số lũy kế:</strong>
                    <input type="text" name="cumulative_number_13" class="form-control">
                </div>
            </div>
            <p>2.Tổng doanh thu thuộc diện khấu trừ thuế</p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="code_14" class="form-control" value="14">
                <div class="form-group">
                    <strong>Số phát sinh trong kỳ:</strong>
                    <input type="number" name="number_generated_14" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Số lũy kế:</strong>
                    <input type="text" name="cumulative_number_14" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
