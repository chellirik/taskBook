<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @include('inc.messages')
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
        <div  class="row">
            <h3 class="mt-10">Добавить задание</h3>
            @include('inc.addForm')
        </div>
    </div>
</body>
</html>