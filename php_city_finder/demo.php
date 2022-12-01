<?php
if (!empty($_GET['location'])) {
    /**
     * Here we build the url we'll be using to access the google maps api
     */

    echo ($_GET['location']);
    //$url = 'https://maps.googleapis.com/maps/api/staticmap?zoom=14&size=1000x1000&key=AIzaSyDtDajra1SgNTLBmZjeZxS3J8Ec_XfTACU&center=' . ($_GET['location']);
    $result = 'https://' .
        'maps.googleapis.com/' .
        'maps/api/staticmap?' .
        'center=' . urldecode($_GET['location']) .
        '&zoom=14&scale=2&size=1000x1000' .
        '&key=AIzaSyDtDajra1SgNTLBmZjeZxS3J8Ec_XfTACU';

    echo "\n";
    echo $result;
    header("Location: $result");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>City Maps</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div style="text-align:center;width: 300px;margin: 0 auto;">
    <h1>Want to see a map of your favorite city?</h1>
    <br/>
    <br/>
    <div>Please enter a location in the box below...</div>
    <form action="" method="get">
        <input type="text" name="location"/>
        <button type="submit">Submit</button>
    </form>
    <br/>
    <h3>Utilizes the Google Maps API</h3>
    <br/>
    </div>
</body>
</html>