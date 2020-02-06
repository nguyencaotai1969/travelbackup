var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    var hienthi = document.getElementsByClassName('demo');
    for (var i = 0; i < hienthi.length; i++) {
        hienthi[i].innerHTML = days + " Ngày " + hours + " Giờ "
            + minutes + " Phút " + seconds + " Giây ";
    }
    if (distance < 0) {
        clearInterval(x);
        for (var i = 0; i < hienthi.length; i++) {
            hienthi[i].innerHTML = "Hết Giời Gian Sale";
        }
        // document.getElementById('demo').innerHTML = "EXPIRED";
    }
}, 1000);
