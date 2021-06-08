$(document).ready(function(){

    $("#coursesMenuButton").click(function() {
        $("#courseModal").css("display", "block");
        $("body").css('overflow', "hidden");
    })

    $('#courseModal').click(function() {
        $('#courseModal').css('display', "none");
        $("body").css('overflow', "auto");
    })
});

const button = document.createElement("button");
button.id = "coursesMenuButton";
const img = document.createElement("img");
img.src = "/Assets/images/course_page/hamburgermenu_120234.png";
button.appendChild(img);
$("header").append(button);