<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Seafarer::Add Crew</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Customized -->
    <script src="../js/add_crew.js"></script>
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
        <label>First name</label>
        <input type='text' name='fname' placeholder='Enter first name' id="fname" class="form-text"></input>
        <br>
        <label>Last name</label>
        <input type='text' name='lname' placeholder='Enter last name' id="lname" class="form-text"></input>
<br>
        <label>Address</label>
        <input type='text' name='address' placeholder='Enter address' id="address" class="form-text"></input>

<br>
        <label>Birthdate</label>
        <input type="datetime" id="birthdaytime" name="birthdaytime" class="form-text">

<br>
        <label>Sex</label>
        <input type='radio' name='gender' id='female' value="F">
        <label for="female">Female</label>
        <input type='radio' name='gender'id='male' value="M">
        <label for="male">Male</label>
<br><br>
        <label>Email</label><br>
        <input type='email' name='lname' placeholder='Enter email' id="email" class="form-text"></input>

        <label>Contact No</label>
        <input name='number' placeholder='Enter contact no' id="contact_no" class="form-text"></input>
<br>
        <label>Select Rank</label>
        <select name='rank'  id="rank">
            <option value='master_captain'>Master/Captain</option>
            <option value='chief_mate'>Chief Mate</option>
            <option value='second_mate'>Second Mate</option>
            <option value='third_mate'>Third Mate</option>
            <option value='deck_cadet'>Deck Cadet</option>
            <option value='chief_engineer'>Chief Engineer</option>
            <option value='second_engineer'>Second Engineer</option>
            <option value='third_engineer'>Third Engineer</option>
            <option value='fourth_engineer'>Fourth Engineer</option>
            <option value='engineer_cadet'>Engineer Cadet</option>
            <option value='electrician'>Electrician</option>
            <option value='boatswain'>Boatswain</option>
            <option value='pump_man'>Pump Man</option>
            <option value='able_bodied_seaman'>Able-Bodied Seaman</option>
            <option value='ordinary_seaman'>Ordinary Seaman</option>
            <option value='fitter'>Fitter</option>
            <option value='oiler'>Oiler</option>
            <option value='wiper'>Wiper</option>
            <option value='chief_cook'>Chief Cook</option>
            <option value='steward'>Steward</option>
        </select>

        <select name='ship' id="ship">
            <!--ajax-->
        </select>
<br>
        <button type="submit" id="btn-submit" class="btn-login" style="width: 410px">Save Crew</button>

        <!--gawa design para sa terms and responsibilities sa napiling rank,
            yung text baguhin na lang sa js
            -->
    </div>
</div>
</body>

</html>