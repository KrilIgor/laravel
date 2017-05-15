@extends('layouts.app')

@section('content')
    <div class="block-content collapse in">
        <div class="span5">
            <h1 class="page-header">User</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Created notes</th>
                    </tr>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->profile->last_name}}</td>
                        <td>{{$user->profile->age}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->profile->phone}}</td>
                        <td>{{$user->profile->address}}</td>
                        <td><a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a></td>
                        <td><a class="btn btn-primary" href="{{ route('notes.create') }}">Created notes</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection