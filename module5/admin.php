<?php
session_start();
if ( !isset( $_SESSION['email'] ) ) {
    header( 'Location: registration.php' );
}
$jsonFile = file_get_contents( 'users.json' );
$users = json_decode( $jsonFile, true );
$openFile = fopen( 'users.txt', 'r' );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
    <div class="container mt-1 p-3">
        <div class="row">
            <div class="col-md-8">
                <h1>Admin Page</h1>
                <h2><?php echo "Hello  " . ( $_SESSION['username']); ?></h2>
             </div>
            <div class="col-md-4 mt-3">
            <a href="logout.php"class='btn btn-primary'>Logout</a>
            <?php 
            if(isset($_SESSION['userrole'])) {
                if($_SESSION['userrole'] == 'admin' || $_SESSION['userrole'] == 'administrator') {
                    echo "<a href='update.php' class='btn btn-primary'>Update Role</a>";
                    echo " <a href='newuser.php' class='btn btn-primary'>Add New User</a>";
                }
            }
            ?>
            </div>   
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <?php  if(isset($_SESSION['userrole'])): if($_SESSION['userrole'] == 'admin' || $_SESSION['userrole'] == 'administrator'):  ?>
                    <th scope="col">Privilege</th>
                    <?php endif; ?>
                    <?php endif; ?>
                    </tr>
                </thead>
                <?php foreach( $users as $key=>$values ) :   ?>
                <tbody>
                    <tr>
                    <td><?php echo $values['username']; ?></td>
                    <td><?php echo $values['email'];  ?></td>
                    <td><?php echo $values['role'];  ?></td> 
                    <?php if(isset($_SESSION['userrole'])): if($_SESSION['userrole'] == 'admin' || $_SESSION['userrole'] == 'administrator'): 
                        
                         if( $values['role'] == "admin"){
                            echo "<td><a href='update.php'>Edit</a></td>";
                        }elseif( $values['role'] == "administrator"){                            
                            echo "<td><a href='update.php'>Delete/Edit</a></td>";
                        }
                         endif; ?>
                    <?php endif; ?>
                    </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
            </div>   
         </div>   
    </div>
</body>
</html>