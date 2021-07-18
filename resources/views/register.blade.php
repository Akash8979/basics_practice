<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="contaner-fluid row" style="background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
        <div class="col-sm-2">
            <h3 class="p-3"><a href="detailPage">Detail</a> </h3>
        </div>
        <div class="col-sm-2">
            <h3 class=" p-3"><a href="login">Login</a> </h3>
        </div>
        <div class="col-sm-8">

        </div>


    </div>
    <div class="container-float" style="margin: 150px 300px;background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">

        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

        <div class=" container" style=" margin-left: 250px;">
            <h3 style="padding: 5px;">
                Registrations
            </h3>
        </div>
        <div class=" container" style="margin-left: 120px;">
            <form action="{{route('post.register')}}" method="POST">
                @csrf

                <div class="form-group row p-2">

                    <div class="col-sm-8">

                        <input type="text" class="form-control @error('fname') is-invalid @enderror" value="{{old('fname')}}" name=" fname" placeholder="First Name" />
                        @error('fname')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row p-2">

                    <div class="col-sm-8">

                        <input type="text" class="form-control @error('lname') is-invalid @enderror" value="{{old('lname')}}" name="lname" placeholder="Last Name" />
                        @error('lname')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row p-2">


                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Email" />
                        @error('email')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                </div>
                <br>
                <div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Male">

                        <label for="gender" class="form-check-label">Male</label><span> @error('gender')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror</span>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Female">
                        <label for="gender" class="form-check-label">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Other">
                        <label for="gender" class="form-check-label">Other</label>

                    </div>
                </div>

                <br>

                <div class="form-group row">

                    <div class="col-sm-8">

                        <input type="text" class="form-control @error('departmentId') is-invalid @enderror" value="{{old('departmentId')}}" name="departmentId" placeholder="Department Id" />
                        @error('department')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row p-2">

                    <div class="col-sm-8">

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    </div>

                </div>



            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>