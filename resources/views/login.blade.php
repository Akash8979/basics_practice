<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="contaner-fluid row" style="background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
        <div class="col-sm-2">
            <h3 class="p-3"><a href="register">Add User</a> </h3>
        </div>
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">

        </div>

    </div>
    <div style="margin: 150px 300px;background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
        @if(session()->has('LoginFail'))
        <p class="text-danger p-1"><strong>* </strong>{{session()->pull('LoginFail')}}</p>

        @elseif(session()->has('NotLogin'))
        <p class="text-danger p-1"><strong>* </strong>{{session()->pull('NotLogin')}}</p>
        @endif

        <div style="margin-left:250px; padding: 10px;">
            <h3>
                Login
            </h3>
        </div>
        <div class="container" style="margin: 10px 100px;">

            <form action="{{route('post.login')}}" method="POST">
                @csrf

                <div class="col-sm-8 p-2">

                    <input type="email" class="form-control" value="" name="email" placeholder="Email ID" />
                </div>
                <div class="col-sm-8 p-2">

                    <input type="password" class="form-control" value="" name="password" placeholder="Password" />
                </div>


                <div class="col-sm-8" style="padding: 10px;">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>

            </form>


        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>