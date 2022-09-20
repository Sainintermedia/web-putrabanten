<!DOCTYPE html>
<html>
<title>PT. Three Putera Banten Indonesia</title>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bgimg {
        background-image: url('https://1.bp.blogspot.com/-_p8j-XTMFfg/XY2osi_B6UI/AAAAAAAACAM/ssDlfCvDYkUO7h4XKoImpgh4-pkz71j5QCLcBGAsYHQ/s1700/robin-noguier-3pC6oFadbF8-unsplash.jpg');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }
</style>

<body>

    <div class="bgimg">
        <div class="topleft">
            {{-- <p>PT. Three Putera Banten Indonesia</p> --}}
        </div>
        <div class="middle">
            <h1>COMING SOON</h1>
            <h5>PT. Three Putera Banten Indonesia</h5>
            <hr>
            <p id="demo"></p>
        </div>
        <div class="bottomleft">
            {{-- <p>notfound</p> --}}
        </div>
    </div>
    <!-- Display the countdown timer in an element -->

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 5, 2022 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>
