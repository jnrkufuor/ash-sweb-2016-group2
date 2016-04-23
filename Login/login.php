<html>
    <head>
        <title>Login Page</title>
		<link rel="stylesheet" href="css/index.css">
		<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
        <link hre type="text/javascript"f='http://fonts.googleapis.com/css?family=Average|Courgette' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
		function login ()
		{
			validate($('#id').val());
		}
		
		function validate(string)
	    {
	     var re = /([0-9]{8})/;
		 
	     if (re.test(string)==false)
		 {
			 alert("Please Use A Valid Ashesi ID(27302017)");
			 document.getElementById("id").value="";
		 }
	    }
	 	</script>
      
    </head>
    <body>
	     
         <?php
		 if(isset($_REQUEST['error']))
		 {
			  echo "<script type='text/javascript'> alert('Wrong Username or ID'); </script>";
		 }
		 ?>
		 
     <div class="div">
     <div>
      <fieldset class="section"> 
       </fieldset>
       <fieldset class="section2">
           <h1 id="text" style="font-size: 270%;"> Welcome to the Ashesi IRB. </h1>

    <br> </br><h2 id="text"> Sign In and Apply to Gain Permission to use Human Subjects In Your Research Work...</h2>
       </fieldset>
     </div>
        <form action='userlogin.php' method='GET' id="form">

            <fieldset class="account-info">
                <label>
                    ID
                    <input type="text" id="id" name="id" onchange="login()" required>
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
		</div>

    </body>
</html>

