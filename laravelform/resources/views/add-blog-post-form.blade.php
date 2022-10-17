<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@if ($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
    @endif

  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="text" id="email" name="email" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">password</label>
          <input type="text" id="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">phone</label>
          <input type="number" id="phone" name="phone" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">name</label>
          <textarea name="name" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>