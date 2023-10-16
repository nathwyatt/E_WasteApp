@extends('layouts.dashboard')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dustbin management system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back </a>
        </div>
    </div>
</div>

@foreach($data as $data)
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Dustbin id:</strong>
            {{ $data->Dustbin_id }}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Block name:</strong>
            {{ $data->block_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ $data->Status }}
        </div>
    </div>
</div>
@endforeach
@endsection