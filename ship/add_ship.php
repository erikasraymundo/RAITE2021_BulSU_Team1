<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Seafarer::Add Route</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Customized -->
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>

    <script src="../js/add_ship.js" type="module"></script>
    <script src="../js/require.js"></script>
</head>

<body>
<div class="main-container">
    <div class="left-container" style="height:600px">
        <div class="logo-images">
            <img src="../images/white_ship.png" height="80"><br>
            <img src="../images/SEAFARER.png" height="20"><br>
            <img src="../images/INTERNATIONAL.png" height="12">
        </div>
        <div class="btn-options-div">
            <a href="../dashboard.html"><button class="btn-dashboard"><img src="../images/icon-dashboard.png" height="35">DASHBOARD</button>
            </a>
            <a href="../crew/add_crew.php"><button class="btn-dashboard"><img src="../images/ic_crew 3.png" height="35" style="margin-left: -20%">CREWS</button>
            </a>
            <a href="#"><button class="btn-dashboard"><img src="../images/noun_Ship_4313193 1.png" height="30" style="margin-left: -20%">SHIPS</button>
            </a>
            <a href="../route/add_route.php"><button class="btn-dashboard"><img src="../images/icon-route.png" height="35" style="margin-left: -13%">ROUTES</button>
            </a>
            <h5 class="txt-user"> Welcome, Admin </h5>
            <a href="../index.html"><button class="btn-dashboard">LOGOUT</button></a>
        </div>
    </div>
    <div class="right-container" style="padding: 3% 6%;">
    <!-- 1st location-->
    <h1>Add Ship</h1>

    <label>Ship Name</label>
    <input type='text' name='ship_name' placeholder='Enter ship name' id="ship_name" class="form-text"></input>
    
    <br><br>
    <label>Select Speed Class</label>
    <select name='speed_class'  id="speed_class">
        <option value='A'>Normal - 23 Knots</option>
        <option value='B'>Slow Streaming - 19 Knots</option>
        <option value='C'>Extra Slow Streaming - 16.5 Knots</option>
        <option value='D'>Minimal Costs - 13.5 Knots</option>
    </select>
    <br><br>
    <label>Select Route</label>
    <select name='route'  id="route">
        
    </select>

    <br><br>
    <button type="submit" id="btn-submit" class="btn-login" style="width: 400px">Save Route</button>

</div>
</div>
</body>

</html>