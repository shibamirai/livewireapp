<html>
  <head>
    <title>Hello login</title>
    <style>
      label { font-size: 10pt; font-weight: bold; }
      input { padding: 5px 10px; margin-bottom: 10px; }
      button { padding: 5px 10px; font-size: 12pt; color: white; background-color: darkblue; }
    </style>
  </head>
  <body>
    <h1>Login page</h1>
    <form action="/hello/post" method="post">
      @csrf
      <label for="email">email: </label>
      <div><input type="text" name="email"></div>
      <label for="password">password: </label>
      <div><input type="password" name="password"></div>
      <div><button>Login</button></div>
    </form>
  </body>
</html>