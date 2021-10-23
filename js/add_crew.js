$(document).ready(function () {

    $("#btn-submit").click(function () {
  
      var fname = $("fname").val().trim();
      var lname = $("fname").val().trim();
      var bdate = $("#bdate").val().trim();
      var sex = $('input[name=gender]:checked').val().trim();
      var address = $("address").val().trim();
      var email = $("email").val().trim();
      var contact_no = $("contact_no").val().trim();
      var rank = $('#rank option:selected').trim();
      var ship_id = $("#ship option:selected").val().trim();

      if (fname=="" || lname == "" || sex=="" || address == "" || email == "" || contact_no=="" || rank=="" || ship_id=="") {
        Swal.fire({
          icon: 'error',
          title: 'Please enter all the required fields'
        })
      } else {

        $.post("../action/save_crew.php",
        {
          fname: fname,
          lname: lname,
          sex: sex,
          bdate: bdate,
          address: address,
          email: email,
          contact_no: contact_no,
          rank: rank,
          ship_id: ship_id
        }, 
        function (data, result) {
          if(result == "success") {
            if (data == ok) {
              Swal.fire({
                icon: 'success',
                title: 'The crew has been added successfully!'
              })
            }
          }
        })

      }

    });
  
  })
  
  