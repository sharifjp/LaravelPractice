<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <a href="{{ url('/allcontact') }}" class="btn btn-success">Contact Books</a>
  <h2>Data Inserting Form</h2>
  <form method="post" action="{{ url('update-contact/'.$edt->id) }}">
      @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $edt->name }}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $edt->email }}">
    </div>
    <div class="form-group">
        <label for="name">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $edt->phone }}">
      </div>
    <div class="form-group">
        <label for="name">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $edt->description }}">
      </div>
    
    <button type="submit" class="btn btn-default" id="submit" name="submit" value="submit">Submit</button>
  </form>
</div>

</body>
</html>

{{--  <form method="post" action="{{ url('data-added') }}">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" name="submit" value="submit">
</form>  --}}