<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Control Company</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Control Company
                </div>

                <div class="links" id="links">
                    <p id="demo">More Inforamtion About Our Time.</p>
                    <div id="New"></div>
                    <div id="Docs"></div>
                    <div id="Laracasts"></div>
                    <div id="Blog"></div>
                    <div id="News"></div>


                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    
    document.getElementById("demo").addEventListener("click", func);

  function func()
  {
    Docs();Laracasts();News();Blog();New();
  }
  function Docs()
  {
    document.getElementById("Docs").innerHTML = '<h3>Team Leader Name Walid Mohamed Mostafa</h3><p>He Was Doing Two Design Patterns (Repository,Singleton)</p>';
  }
  function Laracasts()
  {
    document.getElementById("Laracasts").innerHTML = '<h3>Abdelrhman Sayed And Zakaria El Hassan</h3><p>They Were Doing Tempalet Design Pattern </p>';
  }
  function News()
  {
    document.getElementById("Blog").innerHTML = '<h3>Nada abdelwhab And Dina Yasser</h3><p>They Were Doing Adapter Design Pattern </p>';
  }
  function Blog()
  {
    document.getElementById("News").innerHTML = '<h3>Zakaria El Hassan</h3><p>He Was Doing Chin Design Pattern </p>';
  }
    function New()
    {
        document.getElementById("New").innerHTML = '<h1>We Are Use In Our Project MVC, Laravel And phpMyAdmin </h1>';
    }
</script>