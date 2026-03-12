<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container w-50 mt-5">
        <h1>Add New User</h1>
        <form action="{{ route('employees.add') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" value="{{ old('username') }}"
                    class="form-control @error('username') is-invalid @enderror" id="exampleInputPassword1"
                    name="username">
                <span class="text-danger">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" value="{{ old('useremail') }}"
                    class="form-control @error('useremail') is-invalid @enderror " id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="useremail">
                <span class="text-danger">
                    @error('useremail')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" value="{{ old('userphone') }}"
                    class="form-control @error('userphone') is-invalid @enderror" id="exampleInputPassword1"
                    name="userphone">
                <span class="text-danger">
                    @error('userphone')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" value="{{ old('useraddress') }}"
                    class="form-control @error('useraddress') is-invalid @enderror" id="exampleInputPassword1"
                    name="useraddress">
                <span class="text-danger">
                    @error('useraddress')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" value="{{ old('usercity') }}"
                    class="form-control @error('usercity') is-invalid @enderror" id="exampleInputPassword1"
                    name="usercity">
                <span class="text-danger">
                    @error('usercity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" value="{{ old('usercountry') }}"
                    class="form-control @error('usercountry') is-invalid @enderror" id="exampleInputPassword1"
                    name="usercountry">
                <span class="text-danger">
                    @error('usercountry')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" value="{{ old('userposition') }}"
                    class="form-control @error('userposition') is-invalid @enderror" id="exampleInputPassword1"
                    name="userposition">
                <span class="text-danger">
                    @error('userposition')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
