<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail Page</title>
</head>
<body>
    <div class="container-sm position-absolute top-50 start-50 translate-middle"" >
        <h1>{{ $book->title_book }}</h1>
        <div class="row border border-dark">
            <div class="col border border-dark" >
                <div class="col"><h6>ISBN</h6></div>
                <div class="col"><h6>Title</h6></div>
                <div class="col"><h6>Writer</h6></div>
                <div class="col"><h6>Publish Year</h6></div>
                <div class="col"><h6>Publisher</h6></div>
                <div class="col"><h6>Synopsis</h6></div>
            </div>
            <div class="col border border-dark">
                <div class="col">{{ $book->id_book }}</div>
                <div class="col">{{ $book->title_book }}</div>
                <div class="col">{{ $book->writer_book }}</div>
                <div class="col">{{ $book->year_book }}</div>
                <div class="col">{{ $book->publisher_book }}</div>
                <div class="col">{{ $book->synopsis }}</div>
            </div>
        </div>
    </div>
</body>
</html>