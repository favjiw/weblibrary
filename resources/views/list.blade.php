<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List Data</title>
</head>
<body>
    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>  
    @endif
    @if ($errors->any())
    <div class="alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
    @endif
    <div class="container-md">
        <table class="table table-hover">
            <tr class="table table-dark table-striped">
                <th>ISBN</th>
                <th>Title</th>
                <th>Writer</th>
                <th>Publish Year</th>
                <th>Publisher</th>
                {{-- <th>Synopsis</th> --}}
                <th>Action</th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{$book->id_book}}</td>
                <td>{{$book->title_book}}</td>
                <td>{{$book->writer_book}}</td>
                <td>{{$book->year_book}}</td>
                <td>{{$book->publisher_book}}</td>
                {{-- <td>{{$book->synopsis}}</td> --}}
                <td>
                    <a href="/detail/{{ $book->id_book }}"><i class="fa-solid fa-eye"></i></a>
                    <a href="/edit/{{ $book->id_book }}"><i class="fa-solid fa-square-pen"></i></a>
                    <form action="{{ url('/list',$book->id_book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger  btn-sm"><i class="fa-solid fa-ban"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    <a href="add" class="btn btn-primary">Tambah</a>
    </div>
</body>
</html>