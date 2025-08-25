<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    @auth
      <a href="{{ url('/hello/logout/') }}">ログアウト</a>
    @else
      <a href="{{ url('/hello/login') }}">ログイン</a>
       |
      <a href="{{ route('register') }}">登録</a>
    @endauth

    <h1>Hello World</h1>
    <p>Login name: {{ $user->name }}</p>
    <p>Login email: {{ $user->email }}</p>
  </body>
</html>