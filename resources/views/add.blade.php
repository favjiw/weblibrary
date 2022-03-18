<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Data</title>
</head>
<body>
  <div class="container-sm">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Add Book Data</span>
        </div>
      </nav>
      <form action="{{ url('added') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
            <input id="id_book" name ="id_book" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
            <input id="title_book" name ="title_book" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Writer</span>
            <input id="writer_book"  name ="writer_book" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Publish Year</span>
            <input id="year_book" name ="year_book" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Publisher</span>
            <input id="publisher_book"  name="publisher_book" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group">
            <span class="input-group-text">Synopsis</span>
            <textarea id="synopsis" name="synopsis" class="form-control" aria-label="With textarea"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg">Add Book</button>
      </form>
    </div>
</body>
</html>