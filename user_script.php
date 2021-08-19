<?php
include 'connection.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$balance = mysqli_real_escape_string($con,$_POST['balance']);
$len = strlen($name);
$select = "SELECT id,email FROM users WHERE email='$email'";
$select_query = mysqli_query($con,$select);
$row = mysqli_num_rows($select_query);
if(($balance) < 100){
    echo "<script>
        alert('Minimum amount to be Entered is 100rs');
        window.location = 'user.php';
    </script>";
}
else if (($len) < 3){
    echo "<script>
        alert('Please enter your full name');
        window.location = 'user.php';
    </script>";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<script>
        alert('Invalid email please check again');
        window.location = 'user.php';
    </script>";
}
else if($row > 0){
    echo "<script>
        alert('Already a user existed with this details');
        window.location = 'user.php';
    </script>";
}
else{
    $insert = "insert into users(name,email,balance) values('$name','$email','$balance')";
    $insert_query = mysqli_query($con,$insert);
    if($insert_query){
        echo "<script>
        alert('Account Created Successfully');
        window.location = 'view.php';
    </script>";
    }
}
?>