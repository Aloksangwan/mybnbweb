<!DOCTYPE HTML>
<html>
<head>
    <title>Add a New Booking</title> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">

</head>
<body>
    

<div id="site_content">
    <div id="content">

        <h1>Make a Booking </h1>
        <h2><a href="listbookings.php">[Return to the booking listing]</a> 
            <a href="/bnb/">[Return to the main page]</a></h2>
            <h3> Booking Test </h3>
        <form method="POST">
            <p><label for="roomID">Room  (name , type , bed): </label>
                <select id="roomID" name="roomID" required>
                    <option value="2">Kelie , S, 5</option>
                </select>
            </p> 
            <p><label for="checkindate">Check-in Date: </label>
                <input type="text" id="checkindate" name="checkindate" required placeholder="Check-in Date">
            </p>  
            <p>  
                <label for="checkoutdate">Check-out Date: </label>
                <input type="text" id="checkoutdate" name="checkoutdate" required placeholder="Check-out Date">
            </p>
            <p>
                <label for="contactnumber">Contact number: </label>
                <input type="tel" id="contactnumber" name="contactnumber" required 
                    placeholder="(001) 123-1234" pattern="[\(]\d{3}[\)] \d{3}-\d{4}">
            </p>  
            <p>
                <label for="bookingextras">Booking Extras: </label>
                <textarea id="bookingextras" name="bookingextras" rows="5" cols="50" maxlength="200"></textarea>
            </p>    
            <input type="submit" name="submit" value="Add">
            <a href="listbookings.html">[Cancel]</a>
        </form>

        <form id="searchForm" method="POST">
            <hr>
            <h2>Search for Room Availability</h2>
            <p>
                <input type="text" id="fromDate" name="fromDate" required placeholder="From Date">
                <input type="text" id="toDate" name="toDate" required placeholder="To Date">
                <input type="button" name="search" id="search" value="Search Availability">
            </p>
            <table id="tblbookings" border="1">
                <thead>
                    <tr>
                        <th>Room #</th>
                        <th>Room Name</th>
                        <th>Room Type</th>
                        <th>Beds</th>
                    </tr>
                </thead>
                <tbody id="result"></tbody>
            </table>
        </form>

        <br><br>
    </div>
</div>

<script>
 $(document).ready(function() {
    $("#checkindate, #checkoutdate, #fromDate, #toDate").datepicker({
        numberOfMonths: 1,
        changeYear: true,
        changeMonth: true,
        showWeek: true,
        weekHeader: "Weeks",
        showOtherMonths: true,
        minDate: new Date(2025, 0, 1),  
        yearRange: "2025:2030",
        dateFormat: 'dd-mm-yy'
    });
});
</script>


</body>
</html>
