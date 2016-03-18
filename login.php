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
        
        ?>
        <form>

            <fieldset class="account-info">
                <label>
                    ID
                    <input type="text" name="id">
                </label>
                <label>
                    Password
                    <input type="password" name="password">
                </label>
            </fieldset>
            <fieldset class="account-action">
                <input class="btn" type="submit" name="submit" value="Login">
           
            </fieldset>
        </form>
       
</body>
</html>

