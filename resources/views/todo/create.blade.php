<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Add new task</h1>

  <form action="{{ route('todo.store') }}" method="POST">
    @csrf

    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>

    <button>Add task</button>
  </form>
</body>
</html>