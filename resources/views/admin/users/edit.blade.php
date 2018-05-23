@extends('layouts.admin')

@section('content')
    <h1>
        Edit user
    </h1>

    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{$user->photo ? $user->photo->file : 'http//placehold.it/400x400'}}">
        </div>

        <div class="col-sm-9">
            {!!Form::model($user ,['method'=>'PATCH' , 'action'=>['AdminUsersController@update' , $user->id] , 'files'=>true])!!}



            <div class="form-group">
                {!! Form::label('name' , 'Name :') !!}
                {!! Form::text('name' ,$user->name , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email' , 'Email :') !!}
                {!! Form::email('email' , $user->email , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id' , 'role_id :') !!}
                {!! Form::select('role_id' ,$roles ,$user->role->name , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active' , 'status :') !!}
                {!! Form::select('is_active' ,array(1=>'Active' , 0=>'Not Active'), null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id' , 'file :') !!}
                {!! Form::file('photo_id' ,null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password' , 'password :') !!}
                {!! Form::password('password' , ['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Edit User' ,['class'=>'btn btn-primary col-sm-6']) !!}





            {!! Form::close() !!}

            {!!Form::open(['method'=>'DELETE' , 'action'=>['AdminUsersController@destroy' , $user->id]])!!}






                    <input type="submit" class="btn btn-danger col-sm-6" value="Delete User">

                {!! Form::close() !!}
        </div>
    </div>

   <div class="row">
       @include('includes.form_error')
   </div>


@endsection