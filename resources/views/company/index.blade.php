@extends('layout')
@section('content')
    <h3>List users</h3>

    <div class="row">
        <a href="{{ route('company.create') }}" class="btn btn-primary">Create</a>
    </div>

    <list-user-component></list-user-component>
{{--    <div class="row">--}}
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">ID</th>--}}
{{--                    <th scope="col">Name</th>--}}
{{--                    <th scope="col">Position</th>--}}
{{--                    <th scope="col">Birthday</th>--}}
{{--                    <th scope="col">=</th>--}}
{{--                </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach( $users as $user )--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{ $user->id }}</th>--}}
{{--                    <td>{{ $user->name }}</td>--}}
{{--                    <td>{{ $user->position }}</td>--}}
{{--                    <td>{{ $user->birthday }}</td>--}}
{{--                    <td>--}}
{{--                        <edit-component :to="{name: 'editCompany'}" class="btn btn-xs btn-default">EDIT</edit-component>--}}
{{--                        <router-link :to="{name:'createCompany'}" class="btn btn-xs btn-default">CREATE</router-link>--}}
{{--                        <a href="{{ route( 'company.edit', $user->id ) }}">EDIT</a>--}}
{{--                        {!! Form::open( [ 'route' => [ 'company.remove', $user->id ], 'method' => 'delete' ] ) !!}--}}
{{--                        <button style="background: none; border: none; color: red; display: inline-block;">REMOVE</button>--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}

    </div>
@endsection
