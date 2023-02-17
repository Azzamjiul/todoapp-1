<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Tasks</h1>
  <table>
    <thead>
      <th>No</th>
      <th>Name</th>
      <th>Status</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach ($todos as $key => $todo)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $todo->name }}</td>
          <td>{{ $todo->status }}</td>
          <td>
            <a href="{{ route('todo.edit', $todo->id) }}">Edit</a>
            <a href="#" onclick="document.getElementById('form-delete-todo-{{$todo->id}}').submit()">Delete</a>
            <form id="form-delete-todo-{{$todo->id}}" action="{{ route('todo.delete', $todo->id) }}" method="POST">
              @csrf
              @method('DELETE')
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>