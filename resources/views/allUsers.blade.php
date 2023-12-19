<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User List</title>
</head>
<body>
    <a href="/newuser" class="btn btn-success btn-sm btn=mb3">Add User</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $id=>$users )
          <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->city}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->age}}</td>
            <td><a href="{{route('view.user',$users->id)}}" class="btn btn-primery btn-sm">View</td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>

    
