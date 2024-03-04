@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">Code Vibe - List</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            
                            <div class="div">
                                <a href="{{ url('slug') }}" class="nav-link">
                                    Send Mail
                                    <div><small class="text-success">Core php, Laravel</small></div>
                                </a>
                            </div>
                            <span class="badge bg-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                
                                <a href="{{ url('slug') }}" class="nav-link">
                                    Send mail via ajax 
                                    <div><small class="text-success">Core php</small></div>
                                </a>
                                </div>

                                <span class="badge bg-primary badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    
                                    <a href="{{ url('slug') }}" class="nav-link">
                                Send mail via ajax
                                <div><small class="text-success">Laravel</small></div>
                                    </a>
                            </div>
                            <span class="badge bg-primary badge-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection