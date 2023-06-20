<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>CRUD Laravel Eloquent</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Student Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="formGroupExampleInput" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label for="EmailID" class="form-label">EmailID</label>
                        <input type="email" name="EmailID" class="form-control" id="formGroupExampleInput" placeholder="Enter Email ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control" id="formGroupExampleInput" placeholder="Enter Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" name="marks" class="form-control" id="formGroupExampleInput" placeholder="Enter Marks">
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                    </div>
                </form> &nbsp;
                @if (session()->has('status'))
                <div class="alert alert-success" style="background: lightgreen;" id="alertDiv">
                    {{session('status')}}
                </div>
                @endif
            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-7">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">EmailID</th>
                            <th scope="col">Password</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if ($students->count())
                        @foreach($students as $Stu)


                        <tr>
                            <th>{{$Stu->id}}</th>
                            <td>{{$Stu->name}}</td>
                            <td>{{$Stu->city}}</td>
                            <td>{{$Stu->EmailID}}</td>
                            <td>{{$Stu->Password}}</td>
                            <td>{{$Stu->marks}}</td>
                            <td>
                                <a href="{{ url('/edit', $Stu->id) }}" id="infoCode" class="btn btn-info btn-sm">Edit</a>
                                <!-- <a href="{{ url('/delete', $Stu->id) }}" id="deleteCode" class="btn btn-danger btn-sm" >Delete</a> -->
                                <a href="/delete/{{$Stu->id}}" class="button btn btn-danger btn-sm delete-confirm">Delete</a>
                            </td>
                        </tr>


                        @endforeach
                        @else

                        <div class="alert alert-warning">No Record found..!</div>

                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- Modal for edit -->


<!-- end modal -->


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });

        $(document).ready(function() {
            setTimeout(function() {
                $('#alertDiv').fadeOut('slow');
            }, 2000);
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>