<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Customized -->
    <script src="../js/add_ship.js" type="module"></script>
    <script src="../js/table_ship.js"></script>
</head>
<body>

<div class="main-container">
    <div class="left-container" style="height: 670px">
        <div class="logo-images">
            <img src="../images/white_ship.png" height="80"><br>
            <img src="../images/SEAFARER.png" height="20"><br>
            <img src="../images/INTERNATIONAL.png" height="12">
        </div>
        <div class="btn-options-div">
            <a href="../dashboard.html"><button class="btn-dashboard"><img src="../images/icon-dashboard.png" height="35">DASHBOARD</button>
            </a>
            <a href="#"><button class="btn-dashboard"><img src="../images/ic_crew 3.png" height="35" style="margin-left: -20%">CREWS</button>
            </a>
            <a href="../ship/add_ship.php"><button class="btn-dashboard"><img src="../images/noun_Ship_4313193 1.png" height="30" style="margin-left: -20%">SHIPS</button>
            </a>
            <a href="../route/add_route.php"><button class="btn-dashboard"><img src="../images/icon-route.png" height="35" style="margin-left: -13%">ROUTES</button>
            </a>
            <h5 class="txt-user"> Welcome, Admin </h5>
            <a href="../index.html"><button class="btn-dashboard">LOGOUT</button></a>
        </div>
    </div>

    <div class="right-container" style="padding: 3% 6%;">
    <div class="table">
        
    </div>
</body>
</html>