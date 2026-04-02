@extends('admin.auth-layout')

@section('title')
    User Register
@endsection

@section('heading-title')
    <h1>
        Register Your self First
    </h1>
@endsection

@section('content')
    <form action="{{ route('registerSave') }}" method="POST">
        @csrf
        <div class="form-group">
            <label f>Name</label>
            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                name="name">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror "
                id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"
                name="password">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="text" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"
                name="password_confirmation">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>


        <button type="submit" class="mt-4 btn btn-primary">Register</button>
        <a href="/" type="submit" class="mt-4 btn btn-primary">Back</a>

    </form>
@endsection
