@extends('layout')
@section('content')
    <h3>Create user</h3>

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
            {!! Form::open( ['route' => 'company.save']) !!}
            <div class="form-group">
                <input type="text" class="form-control" name="name" required>
                <br>
                <input type="text" class="form-control" name="position" required>
                <br>
                <input type="date" class="form-control" name="birthday" required>
                <br>
                <button class="btn btn-success">Submit</button> <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
