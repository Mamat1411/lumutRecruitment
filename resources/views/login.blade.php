@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1 class="my-3">Login</h1>

        <div class="container">
            <form action="/postlogin" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror my-2" placeholder="Username">
                    @error('username')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror my-2" placeholder="Password">
                    @error('username')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </form>
        </div>
    </div>
@endsection
