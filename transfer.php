<?php
include 'connection.php';
error_reporting(0);
$sid=$_GET['id'];
$select = "SELECT * FROM users where id=$sid";
$select_query = mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_query);
if(isset($_POST['submit'])){
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $select = "SELECT * from users where id=$from";
    $select_query = mysqli_query($con,$select);
    $row1 = mysqli_fetch_array($select_query);

    $receiver = "SELECT * from users where id=$to";
    $query = mysqli_query($con,$receiver);
    $row2 = mysqli_fetch_array($query);

    if(($amount) < 0){
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  
        echo '</script>';
    }
    else if($amount > $row1['balance']){
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! insufficent balance")';  
        echo '</script>';
    }
    else if($amount == 0){
        echo '<script type="text/javascript">';
        echo ' alert("Oops! zero balance")';  
        echo '</script>';
    }
    else{
        $newbalance = $row1['balance'] - $amount;
        $new = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($con,$new);
        $newbalance = $row2['balance'] + $amount;
        $new2 = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($con,$new2);
        $sender = $row1['name'];
        $receivr = $row2['name'];
        $insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
        $query=mysqli_query($con,$insert);
        if($query){
            echo "<script> alert('Transaction Successful');
            window.location='history.php';
            </script>";
            
         }
        $newbalance= 0;
        $amount =0;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Basic Banking System</title>

    <!-- Goggle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-light" style="border-bottom:black 10px solid;position:fixed;width:100%;background-image: linear-gradient( 63.1deg,  rgba(5,23,111,1) 8.4%, rgba(24,95,240,1) 64.5% );">
            <div class="container-fluid">
                <h3><a class="navbar-brand logo" href="index.php" style="font-weight:bold;font-size:x-large;color:cyan;">Basic Banking System</a></h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                    
                        <li class="nav-item">
                            <h4><a class="nav-link" aria-current="page" href="index.php" style="font-weight:bold;">Home  |</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="view.php" style="font-weight:bold;">View Customers  |</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="transaction.php" style="font-weight:bold;">Transfer Money  |</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="history.php" style="font-weight:bold;">Transaction History  |</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="user.php" style="font-weight:bold;">New Users  |</a></h4>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
   <div class="container-fluid color">
        <h2 class="text-center">Transaction</h2>
        <br>
        <br>
        <div class="row">
            <form method="POST" name="send">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['balance'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <label>Transfer To:</label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                        $sid = $_GET['id'];
                        $select = "SELECT * FROM users where id!=$sid";
                        $select_query = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($select_query)){
                    ?>
                    <option class="table" value="<?php echo $row['id'];?>">
                        <?php echo $row['name'];?>
                    </option>
                    <?php
                        }
                    ?>
                    <div>
                </select>
                <br>
                <br>
                <label>Amount:</label>
                <input type="number" class="form-control" step="0.01" name="amount" required>
                <br><br>
                <div class="text-center sub">
                    <button class="btn submit-btn " name="submit" type="submit">Transfer</button>
            </form>
        </div>
    </div>
    <footer class="text-center" style="background-color:#4169e1;color:black;font-weight:bold;margin-top:280px">
        <p>Copyright &copy 2021 | Paras Kushwaha<br> Project of The Sparks Foundation</p>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>