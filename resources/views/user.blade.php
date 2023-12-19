<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User Detail</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            @foreach ($data as $id=>$user)
            <h3 class="card-title">{{$user->name}}</h3>
            <h4 class="card-subtitle mb-2 text-body-secondary">{{$user->email}}</h4>
            <h5 class="card-text">{{$user->city}}</h5>
            <h6 class="card-text">{{$user->age}}</h6>
            @endforeach

        </div>
      </div>
</body>
</html>