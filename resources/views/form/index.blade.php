@extends('form.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('form.create') }}"> Create form</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Tên</th>
            <th>Mã số thuế</th>
            <th>Địa chỉ</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($entities as $entity)
            <tr>
                <td>{{ $entity->name }}</td>
                <td>{{ $entity->tax_code }}</td>
                <td>{{ $entity->address }}</td>
                <td>
                    <form action="{{ route('form.destroy',$entity->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('form.show',$entity->_id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('form.edit',$entity->_id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
