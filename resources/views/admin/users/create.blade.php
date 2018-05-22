@extends('layouts.admin')

@section('content')
    <h1>
        create user
    </h1>

    {!!Form::open(['method'=>'POST' , 'action'=>'AdminUsersController@store' , 'files'=>true])!!}



            <div class="form-group">
                {!! Form::label('name' , 'Name :') !!}
                {!! Form::text('name' , null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email' , 'Email :') !!}
                {!! Form::email('email' , null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id' , 'role_id :') !!}
                {!! Form::select('role_id' ,$roles ,null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active' , 'status :') !!}
                {!! Form::select('is_active' ,array(1=>'Active' , 0=>'Not Active'), 0 , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('file' , 'file :') !!}
                {!! Form::file('file' ,null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password' , 'password :') !!}
                {!! Form::password('password' , ['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Add User' ,['class'=>'btn btn-primary']) !!}





        {!! Form::close() !!}

        @include('includes.form_error')


@endsection