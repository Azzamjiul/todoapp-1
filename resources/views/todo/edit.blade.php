<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Update task</h1>

  <form action="{{ route('todo.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
      <label for="">name</label>
      <input type="text" name="name" value="{{ $todo->name }}">
    </div>

    <div>
      <label for="">status</label>
      <select name="status">
        <option @if($todo->status == 0) selected @endif value="0">Belum selesai</option>
        <option @if($todo->status == 1) selected @endif value="1">Sudah selesai</option>
      </select>
    </div>

    <button>Update task</button>
  </form>
</body>
</html>