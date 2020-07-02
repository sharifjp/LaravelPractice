<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Contact</title>
    <h1>Contact Book</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/insert-data') }}" class="btn btn-success">Add New</a>
</head>
<body>
    <table class="table table-border">
        <tr>
            <th>SrNo.</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        {{--  <?php $SrN = 0 ?>  --}}
        @foreach($data as $row)                
        <tr>       
            <td>{{ $SrN++ }}</td>            
            <td>{{ $row->id }}</td>            
            <td>{{ $row->name }}</td>            
            <td>{{ $row->email }}</td>            
            <td>{{ $row->phone }}</td>            
            <td>{{ $row->description }}</td>            
            <td>                
                <a href="{{ url('view-contact/'.$row->id) }}" class="btn btn-info">View</a>
                <a href="{{ url('edit-contact/'.$row->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ url('delete-contact/'.$row->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

<script src="//code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>