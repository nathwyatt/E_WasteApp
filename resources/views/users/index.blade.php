@extends('Backend.Layout.app')

@section('main-content')
<div class="container">
 <div class="row">
        <div class="card card-table-border-none bg-white dt-responsive nowrap" style="width:100%" id="recent-orders">
            <div class="card-header justify-content-between bg-white text-center">
                <h2>Users Management</h2>
                <div class="date-range-report">
                    <span></span>
                </div>
            </div>
            <div class="pull-left">
                <a href="{{ route('users.create') }}" class="dropdown-item">
                    <i class="nav-icon fas fa-user-plus"></i> Add User
                </a>
            </div>
    
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="180px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success bg-dark">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                
                <td >
                                <a class="badge badge-success nav-icon fas fa-view bg-dark"
                                    href="{{ route('users.show',$user->id) }}">Show</a>

                                    <a class="badge badge-success nav-icon fas fa-view bg-dark"
                                    href="{{ route('users.edit',$user->id) }}">edit</a>

                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                            $user->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                
                            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
                                    </div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            responsive: true,
            paging: true,
            pageLength: 10, // Adjust as needed
            ordering: true, // Enable column sorting
            searching: true, // Enable searching
            lengthChange: true, // Show page length options
            language: {
                paginate: {
                    next: 'Next',
                    previous: 'Previous'
                }
            }
        });
    });
</script>
@endpush
