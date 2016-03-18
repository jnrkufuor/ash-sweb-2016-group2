<html>
    <head>
        <title>Sign Up</title>

        <script>
                <!--add validation js script here
        </script>
    </head>
    <body>
            <!-- <table>
                    <tr>
                            <td colspan="2" id="pageheader">
                                    Application Header
                            </td>
                    </tr>
                    <tr>
                            <td id="mainnav">
                                    <div class="menuitem">menu 1</div>
                                    <div class="menuitem">menu 2</div>
                                    <div class="menuitem">menu 3</div>
                                    <div class="menuitem">menu 4</div>
                            </td>
                            <td id="content">
                                    <div id="divPageMenu">
                                            <span class="menuitem" onclick="window.location.href='userslist.php'">User List</span>
                                            <input type="text" id="txtSearch" />
                                            <span class="menuitem">search</span>		
                                    </div  -->
        <?php
        //initialize


        $strStatusMessage = "Add new user";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $firstname = $_REQUEST['firstname'];
            $password = $_REQUEST['pword'];
            $lastname = $_REQUEST['lastname'];
            $fax = $_REQUEST['fax'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            include_once("users.php");
            $obj = new users();
            $r = $obj->addUser($id, $firstname, $lastname, $department, $type, $email, $phone, $fax, $password);
            if ($r == false) {
                $strStatusMessage = "error while adding user";
            }
        }
        ?>

        <form action="" method="GET">
            <div class='row'>
                <div class='large-1 small centered columns' >
                    <fieldset>
                        <legend> Sign Up </legend>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>ID</label>
                                <br><input type="text" name="id"/></br>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label  for='id'>First Name</label>
                                <br><input type="text" name="firstname"/></br> 
                            </div>
                        </div
                        <div class='row'>
                            <div class='small-12 columns'>
                                <label for='id'>Last Name</label>
                                <br><input type="text" name="lastname"/></br> 
                            </div>

                            <div class='row'>
                                <div class='small-12 columns'>
                                    <label for='id'>Password</label>
                                    <br><input type="password" name="pword"/></br> 
                                </div>
                            </div>
                            <div class='row'>
                                <div class='small-12 columns'>
                                    <label for='id'>Email</label>
                                    <br><input type="text" name="email"/></br> 
                                </div>
                            </div>
                            <div class='row'>
                                <div class='small-8 columns'>
                                    <label for='id'>Phone</label>
                                    <br><input type="text" name="phone"/></br> 
                                </div>
                            </div>

                            <div class='row'>
                                <div class='small-4 columns'>
                                    <label for='id'>Fax</label>
                                    <br><input type="text" name="fax"/></br>
                                </div>
                            </div>



                            <div class='row'>
                                <div class='small-4 columns'>
                                    Department: 
                                    <select name="department">
                                        <?php
                                        include_once("users.php");
                                        $user = new users();
                                        $result = $user->getUser();
                                        //echo $strQuery;
                                        if ($result == false) {
                                            //
                                            echo "result is false";
                                        } else {
                                            while ($row = $user->fetch()) {
                                                echo "<option value='{$row['DEPARTMENT']}'>{$row['DEPARTMENT']}</option>";
                                            }
                                        }
                                        ?>				
                                    </select>
                                </div>
                            </div>
                            <div><input type='submit' value='Add'></div>
                        </div>
                    </fieldset>
                </div>
            </div>


        </form>							


    </body>
</html>	
