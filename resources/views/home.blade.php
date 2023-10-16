@extends('layouts.dashboard')

@section('content')

        <div class="container">
            <div class="content-header">
                <div class="row mb-2">

            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Supervisors</h5>
                            <p class="card-text">Card description goes here.</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <i class="fas fa-angle-right small text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Dustbins</h5>
                            <p class="card-text">Card description goes here.</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <i class="fas fa-angle-right small text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Blocks</h5>
                            <p class="card-text">Card description goes here.</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <i class="fas fa-angle-right small text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
                            
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                    </div>
                </main>
              
            </div>
@endsection
