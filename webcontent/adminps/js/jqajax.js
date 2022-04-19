$("#adduser").click(function (e) {
    e.preventDefault();
    console.log("Add user button hit");

    let nm = $('#fullnameid').val();
    let em = $('#emailid').val();
    let lm = $('#locationid').val();
    let pn = $('#phoneid').val();
    let ad = $('#addressid').val();

    userdata = {name:nm, email:em, location:lm, phone:pn, address:ad};

    console.log(userdata);

    $.ajax({
        URL: "../insert.php",
        type: "POST",
        data: JSON.stringify(userdata),
        sucess: function (data) {
            console.log(data);
        },
    });
});