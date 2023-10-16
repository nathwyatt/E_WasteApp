@extends('Backend.Layout.app')
@section('main-content')


<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card-header justify-content-between bg-white text-center">
                    <h2>Add Dustbin</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dustbins.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        
        <form action="{{ route('dustbins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between bg-white text-center">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dustbin Id:</strong>
                        <input type="text" name="dustbin_id" class="form-control text-center" placeholder="Dustbin id">
                        @error('dustbin_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dustbin type:</strong>
                        <select name="Type" class="form-control" placeholder="Dustbin type">
                            <option > Degradable </option>
                            <option >Non-Degradable </option>
                     </select>
                        @error('Type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-center">
                        <strong>Block Id:</strong>
                        <select name="Block_id" class="form-control text-center" placeholder="Block id">
                             <option value="">Select block </option>
                            @foreach ($blocksupervisor as $sup)
                            <option value="{{$sup->block_id}}">{{$sup->block_name}} --- {{$sup->block_id}}</option> 
                            @endforeach
                        </select> 
                        @error('Block_id')
                        <div class="alert alert-danger mt-1 mb-1 text-center">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
@endsection