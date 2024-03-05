@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-5">
                {{-- <div class="search-card card " style="background-image:url({{ url('/assets/front_img/giphy.gif')}});"> --}}
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        Code Vibe
                    </div>
                    <div class="card-body">

                        <form action="{{ url('search') }}">

                            <div class="row">
                                <div class="col-md-12">
                                    <select name="category" id="select" class="form-select">
                                        <option value="" selected disabled>Choose category</option>
                                        <option value="mail">Mail</option>
                                        <option value="pdf">Pdf</option>
                                        <option value="excel">Excel</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center mt-2">

                                        <input type="submit" value="Search" class="btn btn-primary">
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#select").select2({
            tags: true
        });
    </script>
@endsection
