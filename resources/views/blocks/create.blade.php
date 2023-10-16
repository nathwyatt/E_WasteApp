@extends('Backend.Layout.app')
@section('main-content')

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card-header justify-content-between bg-white text-center">
                    <h2>Add Block</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('blocks.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        
        <form action="{{ route('blocks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between bg-white text-center">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Block Id:</strong>
                        <input type="text" name="block_id" class="form-control" placeholder=" id">
                        @error('Block_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Block-name:</strong>
                        <select name="block_name" class="form-control" placeholder="Block name">
                            <option > Administration Block </option>
                            <option >Library Block </option>
                            <option > Computer Labs Block </option>
                            <option >Main Hall Block </option>
                            <option > Secondary classroom Block </option>
                            <option >Hospitality Block </option>
                            <option > Workshop Block </option>
                            
                     </select>
                        @error('block_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Block-supervisor:</strong>
                        <select name="User_id" class="form-control" placeholder="Block super">
                             <option value="">Select supervisor </option>
                            @foreach ($usersupervisor as $sup)
                            <option value="{{$sup->id}}">{{$sup->name}} --- {{$sup->id}}</option> 
                            @endforeach
                        </select> 
                        @error('User_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

@endsection