@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-5">
                {{-- <div class="search-card card " style="background-image:url({{ url('/assets/front_img/giphy.gif')}});"> --}}
                <div class="search-card card shadow">
                    <div class="select-bar">
                        <select name="select" id="select" class="form-control border-rounded">
                            <option value="1">Name-1</option>
                            <option value="2">Name-2</option>
                            <option value="3">Name-3</option>
                            <option value="4">Name-4</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#select").select2({
            tags: true,
            // dropdownParent: $('#modal), // if select in modal
            theme: "bootstrap",
        });
    </script>
@endsection
