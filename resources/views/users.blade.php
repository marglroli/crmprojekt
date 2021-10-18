@extends('index')
@section('main_content')

<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid lightgray;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: lightgray;
    }

    .newuserbutton{
      display: flex;
      justify-content: flex-end;
      margin-top: 20px;
    }

    .newuser-text{
      background-color: grey;
      color: white;
      text-align: center;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.5rem;
      border-radius: 6px;
      padding: 10px 10px;
    }

    .newuser-text:hover{
      background-color: black;
      color: green;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PASSOWRD</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->user_email }}</td>
      <td>{{ $user->password }}</td>
    </tr>
    @endforeach
    </tr>
  </table>
  <div class="newuserbutton">
    <a class="newuser-text" href="/new_user"><span>Új felhasználó</span></a>
  </div>
</body>

</html>

@endsection