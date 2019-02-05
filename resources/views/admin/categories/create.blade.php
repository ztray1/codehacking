@extends('layouts.admin')


@section('content')
    <h1>Categories</h1>
    <div class="col-sm-6">
        {!! Form::open(['method'=>"POST","action"=>"AdminCategoriesController@store"]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control','required' => 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Creat Category',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>





@stop