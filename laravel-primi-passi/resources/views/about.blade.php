<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{$page_title}}</title>
</head>

<style>
    .d_flex {
        display: flex;
    }

    .justify_center {
        justify-content: center;
    }
</style>

<body>

    <div class="nav py-3 d_flex justify_center">
        <div class="nav_elements">
            <a class="px-2" href="{{route('home') }}">Home</a>
            <a href="{{route('about') }}">About</a>
        </div>
    </div>

    <div class="main_content">
        <div class="container p-4 text-center">
            <h1 class="py-2">
                {{$main_title}}
            </h1>
            <p class="py-2">
                {{$subtitle}}
            </p>
            <img src="https://picsum.photos/700/500" alt="Random image.">
            <p class="py-5">
                <strong>{{$copyright}}</strong>
            </p>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--//Scripts-->
</body>

</html>