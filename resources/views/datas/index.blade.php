@extends('Backend.Layout.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header justify-content-between bg-white text-center">
            <h2>Data Management</h2>
        </div>
        <div class="pull-right">
        @can('data-show')
        @foreach ($datasupervisor as $sup)
        <p>{{$sup->block_id}} - {{$sup->block_name}}</p>
        <a class="btn btn-success" href="{{ route('datas.show') }}">Show Data</a>
        @endforeach
        @endcan
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Dustbin id</th>
        <th>Block name</th>
        <th>Distance (cm)</th>
        <th>Arrived time</th>
        <th>Percentage (%)</th>
        <th>Status</th>
    </tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->Data_id }}</td>
        <td>{{ $data->Dustbin_id }}</td>
        <td>{{ $data->Block_name }}</td>
        <td>{{ $data->distance }}</td>
        <td>{{ $data->created_at }}</td>
        <td>
        {{ 100 - (($data->distance / 50) * 100) }}%
       </td>

        <td>
            <div style="width: 100%; height: 20px; background-color: 
                @if ($data->distance > 25)
                    green;
                @elseif ($data->distance >= 10)
                    yellow;
                @else
                    red;
                @endif
            "></div>
        </td>
    </tr>
    @endforeach
</table>

{{ $datas->links() }}
@endsection
