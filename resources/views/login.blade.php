<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <div class="form">
      <form action="/instruinsights/login" method="post">
        @csrf
        <div class="img-container">
          <p class="heading">Welcome to</p>
          <p class="logo-heading">
            Instru <span class="insights">Insights</span>
          </p>
          <img class="logo" src="{{URL::asset('/images/InstruInsights logo.png')}}" alt="" /> 
        </div>
        <input
          class="input email"
          type="text"
          placeholder="Email"
          class="text"
          id="useremail" 
          name="useremail" 
          value="{{old("useremail")}}"
          required
        />
        <br />
        <input
          class="input password"
          type="password"
          placeholder="Password"
          class="password"
          id="password" 
          name="password"
          value="{{old("password")}}"
        /><br />
        <button type="submit" class="btn-login">Login</button>
        
      </form>
    </div>
  </body>
</html>
