// SLIDE
var deleteLog = false;

$(document).ready(function () {
    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['page1', 'page2', 'page3', 'page4'],
        sectionsColor: ['black', 'black', 'black', 'black'],
        loopTop: true,
        loopBottom: true
    });
});


// NAVBAR
$("#mostrar-nav").on("click", function () {
    $("nav").toggleClass("mostrar");
});


// EFFET TEXTE TITLE
var myText = "Ici on inscrit les dates du Hackathon",
    i = 0;
window.onload = function () {
    var typeWriter = setInterval(function () {
        document.getElementById('text').textContent += myText[i];
        i++;
        if (i > myText.length - 1) {
            clearInterval(typeWriter);
        }
    }, 150);
};