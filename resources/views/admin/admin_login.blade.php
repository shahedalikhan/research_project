<!DOCTYPE html>
   <html>
      <head>
         <meta charset="utf-8">
         <title> Admin Login </title>
         <link rel="stylesheet" href="style.css">
         <script src="https://kit.fontawesome.com/3f89949de6.js" crossorigin="anonymous"></script>
      </head>
      <body>
      <p style="color:red;" class=" alert-danger"><?php
       $exception=Session::get('exception');

       if($exception)
       {
           echo $exception;
           Session::put('exception',null);
       }
      ?></p>
    <div class="login-box">
      <h1>Login</h1>
      
      <form method="post" action="{{url('/adminlogin')}}">
      {{csrf_field()}}
      
     <div class="textbox">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Username" name="admin_email" value="">
     </div>
          
     <div class="textbox">
     <i class="fas fa-lock"></i>
       <input type="password" placeholder="Password" name="admin_password" value="">
     </div>
 
     

        <input class="btn" type="submit" name="" value="Sign in">

  </div>
</form>
</body>
</html>