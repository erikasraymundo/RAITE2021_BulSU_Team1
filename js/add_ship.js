
// import geoDistSance from 'geo-distance-helper';
// import geoDistance from 'geo-distance-helper';

$(document).ready(function () {

    $("#btn-submit").click(function () {
  

      alert("test");

      var location1 = $("#location1").val().trim();
      var loc1_point_lat1 = $("#loc1_point_lat1").val().trim();
      var loc1_point_long2 = $("#loc1_point_long2").val().trim();
      var location2 = $("#location2").val().trim();
      var loc2_point_lat1 = $("#loc2_point_lat1").val().trim();
      var loc2_point_long2 = $("#loc2_point_long2").val().trim();
      var distance = 0;

      if (location1=="" || loc1_point_lat1 == "" || loc1_point_long2 =="" || location2 == "" || loc2_point_lat1 == "" || loc2_point_long2=="") {
        Swal.fire({
          icon: 'error',
          title: 'Please enter all the required fields'
        })
      } else {

        // const point1 = { lat: loc1_point_lat1, lng: loc1_point_long2 };
        // const point2 = { lat: loc2_point_lat1, lng: loc2_point_long2 };
        
        // distance in kilometers
        // const distance = geoDistance(point1, point2);
        // or
        // const distance = geoDistance(point1, point2, 'K');
        
        // distance in nautical miles
        // const distance = geoDistance(point1, point2, 'N');

        // alert("distance is = " + distance);


        $.post("../actions/add_route.php",
        {
          location1: location1,
          loc1_point_lat1: loc1_point_lat1,
          loc1_point_long2: loc1_point_long2,
          location2: location2,
          loc2_point_lat1: loc2_point_lat1,
          loc2_point_long2: loc2_point_long2,
          distance: distance
        }, 
        function (data, result) {
          if(result == "success") {
            if (data == "ok") {
              Swal.fire({
                icon: 'success',
                title: 'The route has been added successfully!'
              }).then(() => {
                //crew page
                // window.location = "../teacher/quiz_proper.php";
              })
            } else {
              alert("error is " + data);
              Swal.fire({
                icon: 'error',
                title: 'The route cannot be saved as of the moment.',
                text: 'Please contact your support, thank you!'
              }).then(() => {
                //crew page
                // window.location = "../teacher/quiz_proper.php";
              })
            }
          }
        })

      }

    });
  
  })
  
  