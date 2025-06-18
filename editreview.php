<!DOCTYPE HTML>
<html>
<head>
    <title>Edit/Add Room Review</title>
</head>
<body>

<div id="site_content">
    <div id="content">
        <h1>Edit/Add Room Review</h1>
        <h2>
            <a href="listbookings.php">[Return to the booking listing]</a>
            <a href="/bnb/">[Return to the main page]</a>
        </h2>
        <h2>Review made by Test</h2>

      
        <form method="POST" action="editreview.php">
            <input type="hidden" name="id" value="1"> 

            <p>
                <label for="roomreview">Room Review: </label>
                <textarea id="roomreview" name="roomreview" size="400" minlength="0" maxlength="300" rows="5"
                 cols="40">nothing</textarea>
            </p>  
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</div>

</body>
</html>
