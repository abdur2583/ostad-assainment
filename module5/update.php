<?php
session_start();
$jsonFile = file_get_contents( 'users.json' );
$users = json_decode( $jsonFile, true );
$message= '';
//print_r( $_SESSION['email']);
 if(!isset($_SESSION['userrole']) || empty($_SESSION['userrole'])) {
    header("Location: admin.php");
}
  if(!isset($_SESSION['userrole']) && ($_SESSION['userrole'] != 'admin' || $_SESSION['userrole'] != 'administrator'))  {
    header("Location: admin.php");
} 
 
if ( isset( $_POST['updateuser'] ) ) {
    if(!empty($_POST['roleFromSelect'])) {
        $user_email = $_SESSION['email'];
        $new_role1 = $_POST['roleFromSelect'];
       if ( isset( $users[$user_email] ) ) {
            $users[$user_email]['role'] = $new_role1;
            file_put_contents( 'users.json', json_encode( $users, JSON_PRETTY_PRINT ) );
            $_SESSION['role'] = $new_role1;
       }
        $message= 'You have chosen: ' . $new_role1;
    } else {
        echo 'Please select the value.';
    }
}
 if(isset($_POST['deleteUser'])){
    $email = $_SESSION['email'];
    unset($users[$email]);
    $message = "Delete successfully";
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto pt-5">
                <h2>Update Your Role</h2>
                <form action="update.php" method="post">
                        <div class="form-group mb-3">
                            <label for="role" class="form-label inline-block">Role</label>
                            <select name="roleFromSelect" class="form-control">
                            <option value="" disabled selected>Choose option</option>
                            <option value="admin" class="form-control">admin</option>
                            <option value="administrator" class="form-control">administrator</option>
                            </select>
                               <button type="submit" name="updateuser" class="btn btn-primary inline-block block mt-3" >Update</button>
                            <button type="submit" name="deleteUser" class="btn btn-warning inline-block block mt-3" >Delete User</button>
                    </div>
                </form>
                <button><a href="logout.php" class="btn btn-warning inline-block block p-3" >logout</a></button>
                <p class="text-success mt-3"><?php echo $message; echo " <a href='admin.php'>Go your Admin Panel</a>";?></p>            
            </div>            
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>


