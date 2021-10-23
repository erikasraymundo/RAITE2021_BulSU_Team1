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

    <label>Ship Name</label>
    <input type='text' name='ship_name' placeholder='Enter ship name' id="ship_name"></input>

    <label>Select Speed Class</label>
    <select name='speed_class'  id="speed_class">
        <option value='A'>Normal - 23 Knots</option>
        <option value='B'>Slow Streaming - 19 Knots</option>
        <option value='C'>Extra Slow Streaming - 16.5 Knots</option>
        <option value='D'>Minimal Costs - 13.5 Knots</option>
    </select>

    <label>Select Route</label>
    <select name='route'  id="route">
        
    </select>

    <button type="submit" id="btn-submit">Save Route</button>

</body>

</html>