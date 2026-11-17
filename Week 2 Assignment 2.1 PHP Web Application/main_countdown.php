<?php
    // we are creating a countdown to the next moonbase rental event
    $event_date = "2026-12-15 12:00";
    // convert our event date to php seconds
    $event_time = strtotime($event_date);
    // convert our event date to php seconds
    $event_time = strtotime($event_date);
    // get the current number of seconds since 1/1/1970
    $now = time();
    // variable to hold the difference in time from now to event
    $seconds_left = $event_time - $now;

    echo "<br>Event time: " . $event_time;
    echo "<br>now: " . $now;
    echo "<br>Seconds Left: " . $seconds_left;

    // constant to represent 60 seconds in a minute
    $MINUTE = 60;
    // constant to represent 3600 seconds in a hour
    $HOUR = 3600;
    // constant to represent 86400 seconds in a day
    $DAY =  86400;
    // determine how many days are left before the event - floor rounds the result down
    $days = floor($seconds_left / $DAY);
    // determine how many hours are left until the event
    $hours = floor(($seconds_left % $DAY) / $HOUR);
    // determine how many minutes are left before the event start
    $minutes = floor(($seconds_left % $HOUR) - $MINUTE);

    // print out the results for testing mainly
    echo "<br>Days: " . $days;
    echo "<br>Hours: " . $hours;
    echo "<br>Minutes: " .$minutes;

    // define message variable
    $message = " ";

    if ($seconds_left < 0){
        $message = "Oh noes, you totally missed the event!";

    }
    elseif ($days > 30){
        $message = "Plenty of time left to the event!";

    }
    elseif ($days > 14){
        $message = "You still have a couple of days left better hurry!";

    }
    elseif ($days > 3){
        $message = "You better start packing for the event, time to get in gear!";

    }
    else{
        $message = "Oh shit, run Forest, run Forest, I was running Jenny!";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Countdown</title>
    <!-- link to main style css -->
    <link rel="stylesheet" href="mainStyle.css">
    <!-- link to main js file -->
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h1>Welcome To The Moon Base Rental Launch Countdown</h1>
        <nav>
            <ul>
                <!-- link to home page -->
                <li><a href="main.php">Home</a></li>
                <!-- link to the main_app page for renta info -->
                <li><a href="main_app.php">Rental Applications</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        <h2>Come pay us a visit!</h2>
        <!-- display messsage that was created at the begging of the code from php -->
        <p>Next event: <?php echo date("F j, Y \a\\t g:i A", $event_time) ?></p>
    </main>
    <script>
        <!-- reload page every so often to recalculate the time left to the event beginning -->
        setTimeout(() => {
            location.reload();

        }, 60000); // reload the page ever 60000 ms in order to refresh the event timer
    </script>
</body>
</html>