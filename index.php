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
    <link rel="stylesheet" href="css/style.css" />

    <title>Basic Banking System</title>

    <!-- Goggle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <section id="one">
        <!-- Navbar -->
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
                            <h4><a class="nav-link active" aria-current="page" href="index.php" style="font-weight:bold;">Home  |</a></h4>
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
        <!-- Section data -->
        <div class="data">
            <div class="data-text">
                <h1>WELCOME</h1>
                <h1>TO</h1>
                <h2>BASIC BANKING SYSTEM</h2><br />
                <p>
                   <h4> We Provide our best services in the nation.If you want to send your money <br /> FAST and SECURELY then you're at right place.</h4>
                </p>
                <div class="btn">
                    <button class="btn1"><a href="user.php">New Here ?</a></button>
                    <button class="btn2"><a href="transaction.php">Transfer Money</a></button>
                </div>
            </div>
        </div>
    </section>

    <section id="two">
        <div class="small">
            <div class="row" style="background-color:#2AF598;background-color: #ffa500;
background-image: linear-gradient(0deg, #ffa500 0%, #2af598 20%);
">
                <div class="col col-img">
                    <img src="images/img1.png" alt="figure" class="image" />
                </div>
                <div class="col">
                    <h1 class="cust-head">View All Customers</h1>
                    <p class="cust-para">
                        <h4>Banking system severs are managed by top tier Engineers <br />Your data is our responsibility and we know how to perform well<br />
                        Give it a try maybe you can find your colleagues here.</h4>
                    </p>
                    <button class="cust-btn">
                        <a href="view.php">View all customers</a>
                    </button>
                </div>
            </div>

            <div class="row row-two" style="background-color: #FFA500;background-color: #ffff00;
background-image: linear-gradient(0deg, #ffff00 0%, #ffa500 19%);
">
                <div class="col">
                    <h1 class="cust-head">Transfer Money</h1>
                    <p class="cust-para">

                        <h4>Here you can send money to your Beloved ones<br />
                        And enjoy tax free transfer of your money  <br />
                        Got any query? dont worry our customer support are on deck 24/7.</h4>
                    </p>
                    <button class="cust-btn"><a href="history.php">Transfer Money</a></button>
                </div>
                <div class="col">
                    <img src="images/img2.png" alt="figure" class="image">
                </div>
            </div>

            <div class="row row-three" style="background-color:yellow;">
                <div class="col">
                    <img src="images/img3.png" alt="figure" class="image" />
                </div>
                <div class="col">
                    <h1 class="cust-head">Transaction History</h1>
                    <p class="cust-para">
                        <h4>We keep every Record of your move<br />
                        Your all transaction are saved with us, Feel free to check them out.</h4>
                    </p>
                    <button class="cust-btn"><a href="transaction.php"> Transaction History</a></button>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center" style="background-color:#4169e1;color:black;font-weight:bold;">
        <p>Copyright &copy 2021 | Paras Kushwaha<br> Project of The Sparks Foundation</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>