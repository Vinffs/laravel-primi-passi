<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <style>

  </style>

</head>

<body class="antialiased">
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <header>
      <h1>
        Hello World!
      </h1>
      <h2> My Name is {{ $name.' '.$surname }}, I'm {{ $age }} years old and this is my first Laravel project!</h2>
    </header>
    <main>
      <a href="{{Route('about')}}">More about Laravel</a>
    </main>


  </div>



</body>

</html>