<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    @auth
      <a href="{{ url('/hello/logout/') }}">ログアウト</a>
    @else
      <a href="{{ route('login') }}">ログイン</a>
       |
      <a href="{{ route('register') }}">登録</a>
    @endauth

    <h1>Hello World</h1>
    <p>This is Livewire component!!</p>
  </body>
</html>