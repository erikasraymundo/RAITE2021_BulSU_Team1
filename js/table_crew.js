$.post("../actions/select_crew_table.php", {},
function (data, result) {
    if (result == "success")
        $(".table").html(data);
});
