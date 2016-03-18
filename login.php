<html>
    <head>
        <title>Login Page</title>
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
         <?php
        if(isset($_REQUEST['submit']))
        {
            $password=$_REQUEST['password'];
            $id =$_REQUEST['id'];
            header("Location:userlogin.php?id=$id&password=$password");
        }
         else if(isset($_REQUEST['add']))
        {
            $password=$_REQUEST['password'];
            $id =$_REQUEST['id'];
            header("Location:usersadd.php");
        }
        
        ?>
        <form>

            <fieldset class="account-info">
                <label>
                    ID
                    <input type="text" name="id" required="Required">
                </label>
                <label>
                    Password
                    <input type="password" name="password" required="Required">
                </label>
            </fieldset>
            <fieldset class="account-action">
                <input class="btn" type="submit" name="submit" value="Login">
                <input class="btn" type="submit" name="add" value="Sign Up">
            </fieldset>
        </form>
       
</body>
</html>

