<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Seafarer::Add Route</title>

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

    <!-- 1st location-->
    <h1>Add Ship</h1>
    <h3>First Location</h3>

    <label>Location: </label>
    <input type='text' name='location1' placeholder='Enter first location' id="location1"></input>


    <h4>First Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc1_point_lat1' placeholder='Enter latitude' id="loc1_point_lat1"></input>

    <label>Longitude</label>
    <input type='text' name='loc1_point_long1' placeholder='Enter longitude' id="loc1_point_long1"></input>

    <h4>Second Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc1_point_lat2' placeholder='Enter latitude' id="loc1_point_lat2"></input>

    <label>Longitude</label>
    <input type='text' name='loc1_point_long2' placeholder='Enter longitude' id="loc1_point_long2"></input>


    <!-- 2nd location-->
    
    <h3>Second Location</h3>

    <label>Location: </label>
    <input type='text' name='location2' placeholder='Enter second location' id="location2"></input>


    <h4>First Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc2_point_lat1' placeholder='Enter latitude' id="loc2_point_lat1"></input>

    <label>Longitude</label>
    <input type='text' name='loc2_point_long1' placeholder='Enter longitude' id="loc2_point_long1"></input>

    <h4>Second Point</h4>

    <label>Latitude</label>
    <input type='text' name='loc2_point_lat2' placeholder='Enter latitude' id="loc2_point_lat2"></input>

    <label>Longitude</label>
    <input type='text' name='loc2_point_long2' placeholder='Enter longitude' id="loc2_point_long2"></input>

    <button type="submit" id="btn-submit">Save Route</button>

</body>

</html>