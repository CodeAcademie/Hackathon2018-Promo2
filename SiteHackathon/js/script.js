// SLIDE
var deleteLog = false;

$(document).ready(function () {
    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
        sectionsColor: ['black', 'black', 'black', 'black', 'black'],
        loopTop: true,
        loopBottom: true
    });
});

//NAVBAR
$(function () {
    /* START OF DEMO JS - NOT NEEDED */
    if (window.location == window.parent.location) {
        $('#fullscreen').html('<span class="glyphicon glyphicon-resize-small"></span>');   
    }
    $('.navbar-toggler').on('click', function (event) {
        event.preventDefault();
        $(this).closest('.navbar-minimal').toggleClass('open');
    })
});


// EFFET TEXTE TITLE

var myText = "Du 16 au 18 Février 2018",
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


//JOUR J
// Set the date we're counting down to
var countDownDate = new Date("Feb 16, 2018 17:00:00").getTime();
var countDownDate2 = new Date("Feb 18, 2018 17:00:00").getTime();


// Output the result in an element with id="count"
// Update the count down every 1 second
var x = setInterval(function () {
    // Get todays date and time
    var now = new Date().getTime();
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    if (distance > 0) {
        document.getElementById("day").innerHTML = days + " J | ";
        document.getElementById("hour").innerHTML = hours + " H | ";
        document.getElementById("minutes").innerHTML = minutes + " M | ";
        document.getElementById("secondes").innerHTML = seconds + " S";
    }
    // If the count down is over, write some text 
    else {
        var distance = countDownDate2 - now;
        var y = setInterval(function () {
            // Output the result in an element with id="count"
            document.getElementById("count").innerHTML = "cerveaux en ébullition";
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(y);
                document.getElementById("count").innerHTML = "cerveaux cramés";
            }
        }, 1000);
    }
}, 1000);