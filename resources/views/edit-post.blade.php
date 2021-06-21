<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container my-5">
        <a href="{{url('/show/'.$data->id)}}" class="btn btn-outline-secondary">Back</a>
        <h1 class="my-4">Edit Post</h1>
        <form action="{{url('/update/'.$data->id)}}" method="POST">
        @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Add Title" value="{{$data->title}}">
                <label for="floatingInput">Add Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Add Content" name="content" id="floatingTextarea2" style="height: 100px">{{$data->content}}</textarea>
                <label for="floatingTextarea2">Add Content</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>