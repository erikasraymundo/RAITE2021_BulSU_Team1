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

    <script src="../js/add_route.js" type="module"></script>
    <script src="../js/require.js"></script>
</head>

<body>
<div class="main-container">
    <div class="left-container" style="height: 1670px">
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
            <a href="../ship/add_ship.php"><button class="btn-dashboard"><img src="../images/noun_Ship_4313193 1.png" height="30" style="margin-left: -20%">SHIPS</button>
            </a>
            <a href="#"><button class="btn-dashboard"><img src="../images/icon-route.png" height="35" style="margin-left: -13%">ROUTES</button>
            </a>
            <h5 class="txt-user"> Welcome, Admin </h5>
            <a href="../index.html"><button class="btn-dashboard">LOGOUT</button></a>
        </div>
    </div>
    <div class="right-container" style="padding: 3% 6%;">
    <!-- 1st location-->
    <h3>First Location</h3>

    <label>Location: </label>
    <input type='text' name='location1' placeholder='Enter first location' id="location1" class="form-text"></input>


    <h4>First Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc1_point_lat1' placeholder='Enter latitude' id="loc1_point_lat1" class="form-text"></input>

    <label>Longitude</label>
    <input type='text' name='loc1_point_long1' placeholder='Enter longitude' id="loc1_point_long1" class="form-text"></input>

    <h4>Second Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc1_point_lat2' placeholder='Enter latitude' id="loc1_point_lat2" class="form-text"></input>

    <label>Longitude</label>
    <input type='text' name='loc1_point_long2' placeholder='Enter longitude' id="loc1_point_long2" class="form-text"></input>


    <!-- 2nd location-->
    
    <h3>Second Location</h3>

    <label>Location: </label>
    <input type='text' name='location2' placeholder='Enter second location' id="location2" class="form-text"></input>


    <h4>First Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc2_point_lat1' placeholder='Enter latitude' id="loc2_point_lat1" class="form-text"></input>

    <label>Longitude</label>
    <input type='text' name='loc2_point_long1' placeholder='Enter longitude' id="loc2_point_long1" class="form-text"></input>

    <h4>Second Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc2_point_lat2' placeholder='Enter latitude' id="loc2_point_lat2" class="form-text"></input>

    <label>Longitude</label>
    <input type='text' name='loc2_point_long2' placeholder='Enter longitude' id="loc2_point_long2" class="form-text"></input>

    <button type="submit" id="btn-submit" class="btn-login" style="width: 410px">Save Route</button>
</div>
</div>
</body>

</html>