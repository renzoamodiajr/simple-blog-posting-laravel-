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
        <a href="{{url('/create')}}" class="btn btn-primary">Create Post</a>
        
        @if(!$datas->isEmpty())
            @foreach($datas as $data)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="float-end">
                        <button type="button"class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delModal{{$data->id}}"><i class="fas fa-trash"></i></button>
                        <a href="{{url('/edit/'.$data->id)}}" class="btn btn-outline-primary btn-sm me-2"><i class="fas fa-edit"></i></a>
                    </div>
                        <h2>{{$data->title}}</h2>
                        <p class="text-truncate pe-5">{{$data->content}}</p>
                    <a href="{{url('/show/'.$data->id)}}" class="text-primary">Read more <i class="fas fa-arrow-right"></i></a>
                    <p class="float-end">{{$data->created_at}}</p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="delModal{{$data->id}}" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delModalLabel">Delete {{$data->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this article?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{url('/delete/'.$data->id)}}" type="button" class="btn btn-danger">Confirm</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="card mt-5">
                <div class="card-body text-center">
                    <h5>No data</h5>
                </div>
            </div>
        @endif
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>