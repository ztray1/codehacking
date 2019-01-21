@extends('layouts.admin')



@section('content')
    <h1>Edit Users</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$user2->photo?$user2->photo->file:'https://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
        {!! Form::model($user2,['method'=>"PATCH","action"=>["AdminUsersController@update",$user2->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id',$roles1,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @include ('includes.form_error')
    </div>
@stop