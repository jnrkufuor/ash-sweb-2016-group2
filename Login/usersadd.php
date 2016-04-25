<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="../UI template/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
        
      
    </head>
    <body>
   
         
        <?php
       
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $firstname = $_REQUEST['firstname'];
            $password = $_REQUEST['pword'];
            $lastname = $_REQUEST['lastname
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
                    <fieldset class="addform">
                        <legend id="text" style="text-align: center; font-size: 20px;"> Sign Up Form </legend>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>Ashesi ID</label>
                                <br><input type="text" name="id" placeholder="27302017" id="id" onchange="login()" required/></br>
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
                        </div>
                            <div class='row'>
                                <div class='small-12 columns'>
                                    <label for='id'>Password</label>
                                    <br><input type="password" name="pword" required /></br> 
                                </div>
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
                    <fieldset class="addbtn" >
                <input class='btn-default' type='submit' value='Add'   >
           
            </fieldset>
             
                </div>
            </div>
          

        </form>
        </div>
</div>		
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
    </body>
</html>	
