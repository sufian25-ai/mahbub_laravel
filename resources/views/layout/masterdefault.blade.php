<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist
/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        div.container {
            margin-top: 20px;
            width: 800px;
            height: 600px  ;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }
        .navbar {
            margin-bottom: 20px;
        }
        ul{
            list-style-type: none;
            padding: 0;
        }
        li{
            display: inline;
            margin-right: 10px;
        }
        li a {
            display: block;
            padding: 8px 16px;
            text-decoration: none;
            color: #fafafaff;
            width: 100%;
        }
        header{
            background-color: #0968c7ff;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            text-align: center;
        }   
        .sidebar{
            width: 200px;
            float: left;
            background-color: #0263c4ff;
            padding: 10px;
            height: 100%;
            color: #fffdfdff;

        }
        .contents {
            margin-left: 220px;
            padding: 10px;
            border-left: 1px solid #dee2e6;
            height: 100%;
            overflow: hidden;

        }
        footer {
            clear: both;
            background-color: black;
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            @include('layout.header')
        </header>
        <div class="sidebar">
            @include('layout.sidebar')
        </div>
        <div class="contents">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer>
            @include('layout.footer')       
    </footer>
        
    </div>
    
</body>
</html>