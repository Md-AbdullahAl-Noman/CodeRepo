<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <h1>
        Profile
    </h1>
    <table>
        <td>
            <fieldset>
                <legend>General Information:</legend>
                <table>
                    <tr>
                        <td>
                            <table height="250">
                                <tr>
                                    <th><label for="fname">First Name</label></th>
                                    <td>: <?php echo $_POST['fname'] ?></td> 
                                </tr>
                                <tr>
                                    <th><label for="lname">Last Name</label></th>
                                    <td>: <?php echo $_POST['lname'] ?></td>
                                </tr>
                                <tr>
                                    <th><label for="father-name">Father's Name</label></th>
                                    <td>: <?php echo $_POST['father-name'] ?></td>
                                </tr>
                                <tr>
                                    <th><label for="mother-name">Mother's Name</label></th>
                                    <td>: <?php echo $_POST['mother-name'] ?></td>
                                </tr>
                                <tr>
                                    <th><label for="blood-g">Blood Group</label></th>
                                    <td>: 
                                    <?php echo $_POST['blood-g'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="religion">Religion</label></th>
                                    <td>: 
                                    <?php echo $_POST['religion'] ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <img src="" height="250" width="200" alt="Profile Picture">
                        </td>
                    </tr>
                    
                </table>
                
                
            </fieldset>
        </td>
        <td>
            <fieldset>
                <legend>Contact Information:</legend>
                <table height="200">
                    <tr>
                        <th><label for="email">Email</label></th>
                        <td>: 
                        <?php echo $_POST['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="phone">Phone/Mobile</label></th>
                        <td>: 
                        <?php echo $_POST['phone'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="website">Website</label></th>
                        <td>: 
                        <?php echo $_POST['website'] ?>
                        </td>
                    </tr>
                    <pre>
                    <tr>
                        <th>Present Address :</th>
                        <td><br>
                        
                            <label for="street">Street:</label><br>
                            <?php echo $_POST['street'] ?>
                        </td>    
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <label for="city"> City:</label><br>
                            <?php echo $_POST['city'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <label for="state"> State:</label><br>
                            <?php echo $_POST['state'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <label for="zip"> ZIP Code:</label><br>
                            <?php echo $_POST['zip'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <label for="country"> Country:</label><br>
                            <?php echo $_POST['country'] ?>
                        </td>
                    </tr>
                    </pre>
                </table>
            </fieldset>
        </td>
    </table>
    <a href="index.html">Go Back</a>
</body>
</html>