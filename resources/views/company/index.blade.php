@extends('layout')
@section('content')
    <h3>List users</h3>

    <div class="row">
        <a href="{{ route('company.create') }}" class="btn btn-primary">Create</a>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</td>
                    <th scope="col">Name</td>
                    <th scope="col">Position</td>
                    <th scope="col">Birthday</td>
                    <th scope="col">=</td>
                </tr>
            </thead>
            <tbody>
            @foreach( $users as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->position }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>
                        <a href="{{ route( 'company.edit', $user->id ) }}">EDIT</a>
                        {!! Form::open( [ 'route' => [ 'company.remove', $user->id ], 'method' => 'delete' ] ) !!}
                        <button style="background: none; border: none; color: red; display: inline-block;">REMOVE</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
