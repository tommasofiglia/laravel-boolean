<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio laravel-boolean</title>
  </head>
  <body>
    <div class="sass">
      
      @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
      @endforeach

    </div>
  </body>
</html>
