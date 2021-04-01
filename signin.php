<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
  <link rel="stylesheet" href="registration.css">
</head>
<body>

<h3 class="text-center">Sign in</h3>  
 
<div class="container">
  
  <table cellpadding="10" >

     <div class="top">
       <form method="post" action="signin.php">
          <tr><th>Email</th><td><input type="email" name="email" class="form-control form-control-sm border border-primary" required></tr>
          <tr><th>Password</th><td><input type="password" name="password"class="form-control form-control-sm border border-primary"  required></tr>
  
          <tr><td colspan="2" ><input type="submit" name="signup" class="btn btn-primary " value="signup" ></td></tr>
        </form>
     </div>  
  </table>  
 </div> 

  <h6 class="text-center" >You don't have an account yet? <a href="signup.php">Sign up</a></h6>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <footer><b>CREATED BY IBUKUN SAMUEL<b></footer>
</body>
</html>