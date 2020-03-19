<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Bytefury</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">Bytefury Todo</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="/login">Login <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="row mt-5">
<div class="col-lg-6">
<form action="{{route('todos.create')}}" method="post">
<h4>Make Todos</h4>
@csrf
<div class="form-group">
<input name="id" type="hidden" class="form-control" value="{{ $todo->id }}">
<input placeholder="Keep your day up to date.." name="text" type="text" class="form-control" value="{{ $todo->text }}" >
</div>
<button class="btn btn-success float-right">Save</button>
</form>
</div>
<div class="col-lg-12">
<div class="row mt-4">
<td style="text-align:center"><h4>Todo List</h4></td>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Text</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->text}}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{route('todos.showid',[$todo->id])}}" >Edit</a>
        </td>
        <td>
          <form action="{{route('todos.delete',[$todo->id])}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
          </form>
          </td>
    </tr>
    @endforeach
</table>
</div>
</div>
</div>
<style>
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: darkgreen ;
    color: white;
    text-align: center;
  }
  </style>
  
  <div class="footer">
    <div style="text-align:bottom"><h6>© Copyright 2020 Bytefury</h6></div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
