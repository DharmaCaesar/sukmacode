@extends('preload.default')

@section('container')
<div class="bodies" style="background-image: url(hit.jpg); background-size: cover; ">
    <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="col-md">
            {{-- <img src="39955316_p0.jpg" class="img-fluid"> --}}
        </div>

        <div class="col-md-3 pe-3 me-5 ps-2 d-flex align-items-center" style="height: 100vh">
            <div class="container-fluid bg-dark rounded-3 p-3 text-light">
                <form action="/" method="post">
                    @csrf
    
                    <div class="form-group mb-3">
                        <label for="username" class="form-label"> Username </label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="password" class="form-label"> Password </label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
    
                    <button type="submit" class="btn btn-secondary hoverbtn"> Login </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection