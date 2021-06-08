let placeholder = document.getElementById("placeholder");
const img = document.createElement("img");

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

img.src = "/Assets/images/course_page/editor" + getRandomInt(2) + ".jpg";
img.classList.add('editor');
placeholder.appendChild(img);