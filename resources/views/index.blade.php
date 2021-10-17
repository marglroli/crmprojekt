<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .pic{
            margin-left: 25px;
            margin-bottom: 10px;
            border-radius: 10%;
        }

        .top-container {
            display: flex;
            position: relative;
            gap: 500px;
            background-color: grey;
            justify-content: flex-end;
            align-items: center;
            height: 120px;
            margin-top: -10px;
            margin-right: -10px;
        }

        .top-bar-text{
            font-weight: 800;
            font-size: 3rem;
            color: white;
            padding-right: 30px;
            margin-right: 30px;
        }

        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 10px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px;
            margin-top: 10px;
            /* Same as the width of the sidenav */
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 100px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="top-container">
        <div>
            <span class="top-bar-text">CRM SYSTEM</span>
        </div>
        <div>
            <div class="top-bar-text">username</div>
        </div>
    </div>
    <div class="sidenav">
        <div>
            <img class="pic" height="100" src="https://avatarfiles.alphacoders.com/105/105223.jpg">
        </div>
        <a href="/users">Users</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="main">
        @yield('main_content')
    </div>
</body>
</html>