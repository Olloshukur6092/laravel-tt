@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row col-md-6 offset-3">
            <div class="card card-body">
                <h4 class="text-center my-3">Login</h4>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <input type="submit" value="Login" class="btn btn-success w-100" >
                </form>
            </div>
        </div>
    </div>
@endsection
