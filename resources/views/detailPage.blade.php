<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

    <!-- <script src="js\main.js"></script> -->
</head>

<body>
    <div class="contaner-fluid row" style="background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
        <div class="col-sm-2">
            <h3 class="p-3"><a href="register">Add User</a> </h3>
        </div>
        <div class="col-sm-1">
            <h3 class=" p-3"><a href="login">Login</a> </h3>
        </div>
        <div class="col-sm-1">
            <h3 class=" p-3"><a href="login">Logout</a> </h3>
        </div>


        <div class="col-sm-9">

        </div>


    </div>
    <div id="detail" class="contaner-fluid">
        <div class="container-float" style="margin: 150px 250px;background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
            <div class="container p-2">
                <h3 class="text-center">Registered User</h3>
            </div>
            <div class="p-3">
                <table>
                    <thead>
                        <th class="p-2">
                            <p class="text-center">First name</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">last name</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Gender</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Email</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Department</p>
                        </th>

                        <th class="p-2">
                            <p class="text-center">Edit</p>
                        </th>


                        <th class="p-2">
                            <p class="text-center">Archive</p>
                        </th>


                    </thead>
                    <tbody id="table1">

                        @foreach($user as $data)
                        <tr>
                            <td class="p-2">
                                <p class="text-center">{{$data->fname}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->lname}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->gender}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->email}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->department}}</p>
                            </td>

                            <td class="p-2"> <button onclick="edit('{{$data->id}}')" style="margin:5px;"> <a style="padding: 5px;">Edit</a> </button>
                            </td>
                            <td class="p-2"> <button style="margin:5px;"> <a style="padding: 5px;" href=" delete?id={{$data->id}}">Archive</a> </button>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>

                </table>
            </div>


        </div>
        <div class="container-float" style="margin: 150px 250px;background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">
            <div class="container p-2">
                <h3 class="text-center">Archived User</h3>
            </div>
            <div class="p-3">
                <table>
                    <thead>
                        <th class="p-2">
                            <p class="text-center">First name</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">last name</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Gender</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Email</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Department</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Restore</p>
                        </th>
                        <th class="p-2">
                            <p class="text-center">Delete</p>
                        </th>


                    </thead>
                    <tbody id="table2">
                        @foreach($trash as $data)
                        <tr>
                            <td class="p-2">
                                <p class="text-center">{{$data->fname}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->lname}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->gender}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->email}}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{$data->department}}</p>
                            </td>

                            <td class="p-2"> <button style="margin:5px;"> <a style="padding: 5px;" href=" restore?id={{$data->id}}">Restore</a> </button>
                            </td>

                            <td class="p-2"> <button style="margin:5px;"> <a style="padding: 5px;" href=" forceDelete?id={{$data->id}}">Delete</a> </button>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <div id="edit" hidden style="margin: 250px 300px;">
        <div class=" container-fluid" style="background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;margin: 10px;">

            <div style="margin-left: 180px;padding-top:30px;">
                <form id="update" action="" method="POST">
                    @csrf

                    <div class="form-group row p-2">

                        <div class="col-sm-8">

                            <input type="text" id="user_id" class="form-control" value="" name="userid" hidden />
                            <input type="text" id="fname" class="form-control" value="" name="fname" placeholder="First Name" />
                        </div>

                    </div>
                    <div class="form-group row p-2">

                        <div class="col-sm-8">

                            <input type="text" id="lname" class="form-control" value="" name="lname" placeholder="Last Name" />
                        </div>

                    </div>
                    <div class="form-group row p-2">


                        <div class="col-sm-8">
                            <input type="text" id="email" class="form-control" value="" name="email" placeholder="Email" />
                        </div>

                    </div>



                    <div class="form-group row p-2">

                        <div class="col-sm-8">

                            <input type="text" id="department" class="form-control" value="" name="departmentId" placeholder="Department Id" />
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

    </div>

    <script>
        function edit(id) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var data = {

                'id': id,
            }
            $.post("{{route('post.edit')}}", {
                data: data
            }, function(result, status) {
                $('#edit').attr('hidden', false);
                $('#detail').attr('hidden', true);

                $('#user_id').val(result.user[0].id);
                $('#fname').val(result.user[0].fname);
                $('#lname').val(result.user[0].lname);
                $('#email').val(result.user[0].email);
                $('#department').val(result.user[0].department);
            });

        };



        $('#update').submit(function(e) {
            e.preventDefault();
            $.ajax({

                url: "{{route('post.edit')}}",
                method: "post",
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,


                success: function(data) {
                    $('#edit').attr('hidden', true);
                    $('#detail').attr('hidden', false);
                    var row = '';
                    for (x in data.users) {
                        row += "<tr>";
                        row += "<td class='p-2'> <p class='text-center'>" + data.users[x].fname + "<\p></td>";
                        row += "<td class='p-2'> <p class='text-center'>" + data.users[x].lname + "<\p></td>";
                        row += "<td class='p-2'> <p class='text-center'>" + data.users[x].email + "<\p></td>";
                        row += "<td class='p-2'> <p class='text-center'>" + data.users[x].gender + "<\p></td>";
                        row += "<td class='p-2'> <p class='text-center'>" + data.users[x].department + "<\p></td>";
                        row += '<td class="p-2"> <button onclick="edit(' + data.users[x].id + ')" style="margin:5px;"> <a style="padding: 5px;">Edit</a> </button></td>';
                        row += '<td class="p-2"> <button style="margin:5px;"> <a style="padding: 5px;" href="delete?id=' + data.users[x].id + '">Archive</a></button></td>';
                        row += "<\tr>";
                    };
                    $('#table1').html(row);
                },
                error: function(xhr, status, error) {
                    console.log(status + error + xhr);
                },
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>