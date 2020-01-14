@extends('layout')
@section('content')
    <h3>Edit user # {{ $user->id }}</h3>

    @if ( $errors->any() )
        <div class="row">
            <div class="alert alert-danger">
                @foreach( $errors->all() as $e )
                    <div>{{ $e }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            {!! Form::open( [ 'route' => [ 'company.update', $user->id ], 'method' => 'put' ] ) !!}
            <div class="form-group">
                <input type="text" class="form-control" name="name" required value="{{ $user->name }}">
                <br>
                <input type="text" class="form-control" name="position" required value="{{ $user->position }}">
                <br>
                <input type="date" class="form-control" name="birthday" required value="{{ $user->birthday }}">
                <br>
                <button class="btn btn-success">Submit</button> <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
