<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <h1>Silahkan daftar dulu</h1>

  <form action="{{ route('saveUser') }}" method="POST">
    @csrf

    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>

    <div>
      <label for="">email</label>
      <input type="email" name="email">
    </div>

    <div>
      <label for="">password</label>
      <input type="password" name="password">
    </div>

    <div>
      <button>Daftar</button>
    </div>
  </form>
</body>
</html>