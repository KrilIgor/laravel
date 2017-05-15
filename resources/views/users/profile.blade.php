@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div>
                                {!! Form::text('name', (isset($user->name) ? $user->name : null), array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>
                            {!! Form::text('last_name', (isset($user->profile->last_name) ? $user->profile->last_name : null), array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-md-4 control-label">Age</label>
                            {!! Form::text('age', (isset($user->profile->age) ? $user->profile->age : null), array('placeholder' => 'Age','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            {!! Form::text('email', (isset($user->email) ? $user->email : null), array('placeholder' => 'Email','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>
                            {!! Form::text('phone',(isset($user->profile->phone) ? $user->profile->phone : null), array('placeholder' => 'Phone','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            {!! Form::text('address', (isset($user->profile->address) ? $user->profile->address : null), array('placeholder' => 'Address','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

