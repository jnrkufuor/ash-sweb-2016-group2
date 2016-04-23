<html>
    <head>
        <title>Sign Up</title>

            <link rel="stylesheet" href="css/index.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
        <script type="text/javascript">
		function login ()
		{
			console.log("hi");
			validate($('#name').val());
		}
		function validate(string)
	    {
			console.log("hji");
	     var re = /[0-9]{8}/;
	     if (re.test(string)==false)
		 {
			 console.log("jj");
			 alert("Please Use A Valid Ashesi ID(27302017)");
		 }
	    }
	 	</script>
        
    </head>
   
    <body >
   
        <?php
       
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $firstname = $_REQUEST['firstname'];
            $password = $_REQUEST['pword'];
            $lastname = $_REQUEST['lastname'];
            $fax = $_REQUEST['fax'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
			$co = $_REQUEST['co_researcher'];
            include_once("users.php");
            $obj = new users();
            $r = $obj->addUser($id, $firstname, $lastname, $co, $email, $phone, $fax, $password);
            if ($r == false) {
              echo '<script> window.alert("error while adding user")</script>';
            }
            else{
                echo "<script type='text/javascript'> alert('User Successfully Added'); </script>";
                 echo '<script>window.location.href = "login.php";</script>';
            }
        }
    
        ?>

         <div class="div">
        <form action="" method="GET" class="form" >
            <div class='row'>
                <div class='large-1 small centered columns' >
                    <fieldset>
                        <legend> Sign Up </legend>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>ID</label>
                                <br><input type="text" name="id" placeholder="27302017" onchange="login()"required/></br>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>First Name</label>
                                <br><input type="text" name="firstname" placeholder='John' required/></br> 
                            </div>
                        </div>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label for='id'>Last Name</label>
                                <br><input type="text" name="lastname" placeholder='Doe' required/></br> 
                            </div>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>Co-Researcher</label>
                                <br><input type="text" name="co_researcher" placeholder='James McAvoy' /></br> 
                            </div>
                      
                            <div class='row'>
                                <div class='small-12 columns'>
                                    <label for='id'>Email</label>
                                    <br><input type="text" name="email" placeholder='john.doe@ashesi.edu.gh' required/></br> 
                                </div>
                            </div>
                            <div class='row'>
                                <div class='small-8 columns'>
                                    <label for='id'>Phone</label>
                                    <br><input type="text" name="phone" placeholder='0202021010'/></br> 
                                </div>
                            </div>

                            <div class='row'>
                                <div class='small-4 columns'>
                                    <label for='id'>Fax</label>
                                    <br><input type="text" name="fax" placeholder='020912333'/></br>
                                </div>
                            </div>
                         <div> </div>
                    </fieldset>
            <fieldset class="addbtn">
                <input class=' btn-default' type='submit' value='Add' name='submit' >
            </fieldset>
			  </div>
            </div>
         </div>
        </form>							
    </body>
</html>	
