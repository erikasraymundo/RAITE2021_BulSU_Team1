$(document).ready(function () {

	$.post("../actions/select_route.php", {},
		function (data, result) {
			if (result == "success")
				$("#route").html(data);
		});


	$("#btn-submit").click(function () {
		alert("test");

		var ship_name = $("#ship_name").val().trim();
		var speed_class = $('#speed_class option:selected').val();
		var route = $('#route option:selected').val();

		if (ship_name == "" || speed_class == "" || route == "") {
			Swal.fire({
				icon: 'error',
				title: 'Please enter all the required fields'
			})
		} else {

			$.post("../actions/add_ship.php",
				{
					ship_name: ship_name,
					speed_class: speed_class,
					route: route
				},
				function (data, result) {
					if (result == "success") {
						if (data == "ok") {
							Swal.fire({
								icon: 'success',
								title: 'The ship has been added successfully!'
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

