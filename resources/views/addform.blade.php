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
                <input type="text" class="form-control" id="exampleInputPassword1" name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="useremail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="userphone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="useraddress">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="usercity">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Country</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="usercountry">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Position</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="userposition">
            </div>

            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
