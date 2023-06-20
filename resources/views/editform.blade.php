<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    
<div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$student->name}}" placeholder="Enter Student Name">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="formGroupExampleInput" value="{{$student->city}}" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label for="EmailID" class="form-label">EmailID</label>
                        <input type="email" name="EmailID" class="form-control" id="formGroupExampleInput" value="{{$student->EmailID}}" placeholder="Enter Email ID">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="text" name="Password" class="form-control" id="formGroupExampleInput" value="{{$student->Password}}" placeholder="Enter Password">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" name="marks" class="form-control" id="formGroupExampleInput" value="{{$student->marks}}" placeholder="Enter Marks">
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="save" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>