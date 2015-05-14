<link href="css/timer.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<p class="text-center timer_style">You'll be automatically redirected in <span class="timer_highlight" id="count">5</span> seconds...</p>
<script type="text/javascript">
    window.onload = function () {
        (function () {
            var counter = 5;
            setInterval(function () {
                counter--;
                if (counter >= 0) {
                    span = document.getElementById("count");
                    span.innerHTML = counter;
                }
                // Display 'counter' wherever you want to display it.
                if (counter === 0) {
                    //You can put some events here after the timer ends
                }
            }, 1000);
        })();
    }
</script>

<?php
if ($_SESSION['access'] == "admin") {
    ?>  <meta http-equiv="refresh" content="5;url=edit_users.php" /><?php
} else {
    ?>  <meta http-equiv="refresh" content="5;url=profile.php" /><?php
}
