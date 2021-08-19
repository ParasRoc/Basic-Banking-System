<?php
include 'connection.php';
$select="SELECT * FROM users";
$select_query=mysqli_query($con,$select);
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
                            <h4><a class="nav-link active" href="transaction.php" style="font-weight:bold;">Transfer Money  |</a></h4>
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
    <div class="container-fluid">
        <div class="row color">
            <h2 class="text-center transfer" style="padding-top:77px">Transfer Money</h2>
            <br>

            <div class="col-md-offset-2 col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_assoc($select_query)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['balance']?></td>
                            <td><a href="transfer.php?id= <?php echo $row['id'] ; ?>"> <button type="button"
                                        class="btn transfer-btn">Transfer</button></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center" style="background-color:#4169e1;color:black;font-weight:bold;margin-top:410px;">
        <p>Copyright &copy 2021 | Paras Kushwaha<br> Project of The Sparks Foundation</p>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>