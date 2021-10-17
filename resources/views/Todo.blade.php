<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/ Todo.css">
  <title>Document</title>
</head>
<body>
  <div class="todo">
    <h1 class="title">
      Todo List
    </h1>
     @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="/todo/create" method="post">
      @csrf
      <div class="add_line">
        <input type="text" name="add" id="" class="memo">
        <button class="add">追加</button>
      </div>
    </form>
    @yield('content')
  </div>
</body>
</html>