@extends('index')
@section('main_content')

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
</body>

</html>

@endsection