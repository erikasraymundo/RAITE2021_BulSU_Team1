$.post("../actions/select_ship_table.php", {},
function (data, result) {
    if (result == "success")
        $(".table").html(data);
});
