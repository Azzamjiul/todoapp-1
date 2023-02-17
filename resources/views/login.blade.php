<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
</head>
<body>
  <h1>Halo Ibu dan Bapak</h1>

  <form action="{{ route('processLogin') }}" method="POST">
    @csrf

    <div>
      <label for="">email</label>
      <input type="email" name="email">
    </div>

    <div>
      <label for="">password</label>
      <input type="password" name="password">
    </div>

    <div>
      <button>Login</button>
    </div>
  </form>
</body>
</html>