<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Seafarer::Add Crew</title>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/logout.js"></script>
    <!-- Customized -->
    <script src="../js/add_crew.js"></script>
</head>

<body>

    <label>First name</label>
    <input type='text' name='fname' placeholder='Enter first name' id="fname"></input>

    <label>Last name</label>
    <input type='text' name='lname' placeholder='Enter last name' id="lname"></input>

    <label>Address</label>
    <input type='text' name='address' placeholder='Enter address' id="address"></input>


    <label>Birthdate</label>
    <input type='datetime' name='bdate' placeholder='Enter birthdate' id="bdate"></input>


    <label>Sex</label>
    <input type='radio' name='gender' id='female' value="Female">
    <label for="female">Female</label>
    <input type='radio' name='gender'id='male' value="Male">
    <label for="male">Male</label>

    <label>Email</label>
    <input type='email' name='lname' placeholder='Enter email' id="email"></input>

    <label>Contact No</label>
    <input name='number' placeholder='Enter contact no' id="contact_no"></input>

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

    <select name='ship' id='select_ship'  id="ship">
        <!--ajax-->
    </select>

    <button type="submit" id="btn-submit">Save Crew</button>

    <!--gawa design para sa terms and responsibilities sa napiling rank,
        yung text baguhin na lang sa js
        -->

</body>

</html>