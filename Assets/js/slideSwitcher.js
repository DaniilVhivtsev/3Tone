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

window.onpopstate = function(e){
    let d = e.state || {"html": 'no state'};
    updateSection(d.html);
};

const button = document.createElement("button");
button.id = "coursesMenuButton";
const burger = document.createElement("img");
burger.src = "/Assets/images/course_page/hamburgermenu_120234.png";
button.appendChild(burger);
$("header").append(button);
window.history

function updateCoursePage(courseId, slideId) {
    $.get("/Assets/php/courseContent.php", {courseId: courseId, slideId: slideId})
        .done(function (data){
            updateSection(data);
            window.history.pushState({"html": data}, "Курс", "/course/?courseId="+courseId+"&slideId="+slideId);
        })
}

function updateAndReplace(courseId, slideId) {
    $.get("/Assets/php/courseContent.php", {courseId: courseId, slideId: slideId})
        .done(function (data){
            updateSection(data);
            window.history.replaceState({"html": data}, "Курс", "/course/?courseId="+courseId+"&slideId="+slideId);
        })
}

function updateSection(data) {
    $("section").empty();
    $("section").append(data);
}