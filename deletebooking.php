<!DOCTYPE HTML>
<html>
<head>
    <title>Delete Booking</title>
</head>
<body>

<div id="site_content">
    <div id="content">
        <h1>Booking Preview Before Deletion</h1>
        <h2>
            <a href="listbookings.php">[Return to the Booking listing]</a>
            <a href="/bnb/">[Return to the main page]</a>
        </h2>

  
        <fieldset>
            <legend>Room Detail #1</legend>
            <dl>
                <dt>Room name:</dt><dd>Kellie</dd>
                <dt>Checkin Date:</dt><dd>14-06-2025</dd>
                <dt>Checkout Date:</dt><dd>18-06-2025</dd>
            </dl>
        </fieldset>

      
        <form method="POST" action="deletebooking.php">
            <h2>Are you sure you want to delete this Booking?</h2>
            <input type="hidden" name="id" value="1"> 
            <input type="submit" name="submit" value="Delete">
            <a href="listbookings.php">[Cancel]</a>
        </form>
    </div>
</div>

</body>
</html>
