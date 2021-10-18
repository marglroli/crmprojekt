@extends('index')
@section('main_content')

<!DOCTYPE html>
<html>

<head>
    <style>
        .main-container {
            max-width: 1600px;
            margin: 0 auto;
            padding-top: 10px;
        }

        .main-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-self: end;
        }

        .input-class {
            /*margin: 0 60px;*/
            margin-right: 900px;
            size: 2rem;
            font-size: 2rem;
        }

        .user-text {
            justify-self: end;
            padding-right: 20px;
            font-size: 2rem;
        }

        .newuserbutton {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding-right: 500px;
        }

        .newuser-text {
            background-color: grey;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.5rem;
            border-radius: 6px;
            padding: 10px 10px;
        }

        .newuser-text:hover {
            background-color: black;
            color: green;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <form action="" method="POST" id="form" form="myForm">
            @csrf
            <h3>Adja meg az új felhasználó adatait!</h3>
            <div class="main-block">
                <span class="user-text">Név</span>
                <input class="input-class" type="text" name="name">
                <span class="user-text">Email</span>
                <input class="input-class" type="text" name="user_email">
                <span class="user-text">Jelszó</span>
                <input class="input-class" type="text" name="password">
            </div>
            <div class="newuserbutton">
                <button tpye="submit" style="border: 0" href="/users"><a class="newuser-text"><span>Új felhasználó létrehozása</span></a></button>
            </div>
        </form>
    </div>
</body>

</html>

@endsection