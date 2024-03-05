@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-header">
                    <div class="row">
                            <div class="col-md-10">
                                Send Mail
                                <div><small class="text-success">Core php, Laravel</small></div>
                            </div>
                            <div class="col-md-2">
                                <select name="" id="" class="form-select">
                                    <option value="">Php</option>
                                    <option value="">Laravel</option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! $parsedContent !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection