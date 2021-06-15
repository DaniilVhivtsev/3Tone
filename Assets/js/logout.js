function clearSession() {
    $.ajax({
        url: "/Assets/php/logout.php",    //the page containing php script
        type: "GET",    //request type,
        dataType: 'html',
        success: function () {
            user.email="";
            document.getElementById("logout").style.display="none";
            if (typeof showRegForm === "function") {
                showRegForm();
            }
        }
    });
}