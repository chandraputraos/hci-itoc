<html>
    <body>
<div id="app">
    <h1>Hello App!</h1>
    <p>
     
     
      <li><router-link to="foo">Users</router-link></li>
    <li><router-link to="bar">Home</router-link></li>
    </p>
  
    <router-view></router-view>
  </div>

  <script src="{{asset('js/app.js')}}" ></script>

    </body>
</html>