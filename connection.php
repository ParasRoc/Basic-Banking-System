<?php
    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = "server";

    $con = mysqli_connect($server, $username, $password, $db);

    if($con){
        ?>
<script>
// alert('connection sucessful');
</script>
<?php
}else{
    die("no connection" . mysqli_connect_error());
}
?>