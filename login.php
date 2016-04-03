<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Average|Courgette' rel='stylesheet' type='text/css'>

        <style>
        body{
            background-image: url("bg.jpg");
        }


        h1 {
            font: 400 30px/0.5 'Courgette', Helvetica, sans-serif;
            color:#395870;  
        }
        </style
    </head>
    <body>
         <?php
		 if(isset($_REQUEST['error']))
		 {
			  echo "<script type='text/javascript'> alert('Wrong Username or ID'); </script>";
		 }
		 ?>
        <form action='userlogin.php' method='GET'>

            <fieldset class="account-info">
                <label>
                    ID
                    <input type="text" name="id" required>
                </label>
                <label>
                    Password
                    <input type="password" name="password" required>
                </label>
            </fieldset>
            <fieldset class="account-action">
                <input class="btn" type="submit" name="submit" value="Login">
                <div class="change_link">
                Not a member yet ?
                <a href="usersadd.php" >Join Now</a>
            </div>
            </fieldset>
            
        </form>

    </body>
</html>
