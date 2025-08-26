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
    <form action="/hello/isuser" method="post">
      @csrf
      <input type="number" name="user_id">
      <button>action by user</button>
    </form>
    <form action="/hello/isadmin" method="post">
      @csrf
      <button>action by admin</button>
    </form>
  </body>
</html>