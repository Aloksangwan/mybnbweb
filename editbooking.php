<!DOCTYPE HTML>
<html>
<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>

<div id="site_content">
    <div id="content">

        <h1>Edit Booking</h1>
        <h2><a href="listbookings.php">[Return to booking listing]</a> 
            <a href="/bnb/">[Return to the main page]</a></h2>

        <form id="editBookingForm">
            <p>
                <label for="roomID">Room (name, type, beds): </label>
                <select id="roomID" name="roomID" required>
                    <option value="1">2 Kellie</option>
                </select> </p>
            <p>
                <label for="checkindate">Checkin Date: </label>
                <input type="text" id="checkindate" name="checkindate" required placeholder="Checkin Date"></p>
                <p><label for="checkoutdate">Checkout Date: </label>
                <input type="text" id="checkoutdate" name="checkoutdate" required placeholder="Checkout Date">
            </p>
            <p>
                <label for="contactnumber">Contact number: </label>
                <input type="tel" id="contactnumber" name="contactnumber" required 
    placeholder="(001) 123-1234" 
    pattern="[\(]\d{3}[\)] \d{3}-\d{4}"
    maxlength="14">
            <p>
                <label for="bookingextras">Booking Extras: </label>
                <textarea id="bookingextras" name="bookingextras" rows="5" cols="50" maxlength="200"></textarea>
            </p>
            <input type="submit" name="submit" value="Save Changes">
            <a href="listbookings.php">[Cancel]</a>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Initialize datepickers
        $(document).ready(function() {
    $("#checkindate, #checkoutdate").datepicker({
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

      
        const sampleBooking = {
            roomID: "1",
            checkindate: "14-06-2025",
            checkoutdate: "18-06-2025",
            contactnumber: "(001) 123-4567",
            bookingextras: "nothing"
        };

        $("#roomID").val(sampleBooking.roomID);
        $("#checkindate").val(sampleBooking.checkindate);
        $("#checkoutdate").val(sampleBooking.checkoutdate);
        $("#contactnumber").val(sampleBooking.contactnumber);
        $("#bookingextras").val(sampleBooking.bookingextras);

      
    });
</script>

</body>
</html>