<!DOCTYPE html>
<html>
<head>
<title>IIUM Vehicle Registeration System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Multi Forms template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->

</head>
<body>
	<div class="topnav">
<img src="logo.png" width="500px" height="100px">

<a href="welcome">Logout</a>

<a href="welcome">Return to Dashboard</a>

</div>


	<div class="main-agileits">
        <h1>Vehicle Sticker Application Form</h1>
        <div class="w3ls-top-grids">
			<div class="wthree-center">
                <div class="form">
				
					<div class="contact-w3ls-top">

						<center><h2>Particulars of application form</h2></center>
                    </div>
                    

<body>
    
    <div class="contact-w3ls-bottom">

    
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'laravel');

if(isset($_GET['search']))
{
    $StaffNo = $_GET['StaffNo'];
    $query = "SELECT * FROM staffs where StaffNo='$StaffNo' ";
    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {

        ?> 

            <form action ="successfully" method="GET">
            @csrf
<label for="StaffName">NAME</label> <input type="text" name="StaffName" size="80" value="<?php echo $row['StaffName'] ?>"/><br><br>
<label for="StaffNo" type="yes">STAFF NO</label> <input type="text" name="StaffNo" value="<?php echo $row['StaffNo'] ?>"/>  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<label for="StaffIc">IC / PASSPORT NO </label> <input type="text" name="StaffIc" value="<?php echo $row['StaffIc'] ?>"/><br><br>
<label for="StaffDept">KULIYYAH </label><input type="text" name="StaffDept" value="<?php echo $row['StaffDept'] ?>"/><br><br>      
							&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<br><br>
<label for="StaffPhoneNo">TEL NO  </label><input type="text" name="StaffPhoneNo" value="<?php echo $row['StaffPhoneNo'] ?>"/><br><br>                 
<label for="StaffEmail">EMAIL </label><input type="text" name="StaffEmail"  size="50"  value="<?php echo $row['StaffEmail'] ?>"/><br><br> 
<label for="StaffAddress">ADDRESS</label><input type="text" name="StaffAddress" size="80" value="<?php echo $row['StaffAddress'] ?>"/>
<label for="StaffAddress"></label><input type="text" name="StaffAddress" size="80" value="<?php echo $row['StaffAddress'] ?>"/>
<label for="StaffPostcode">POSTCODE</label><input type="text" name="StaffPostcode" size="9" value="<?php echo $row['StaffPostcode'] ?>"/><br>
<label for="StaffCountry">COUNTRY</label><input type="text" name="StaffCountry" size="20" value="<?php echo $row['StaffCountry'] ?>"/><br><br>

</form>
<form action="successfully" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="StaffTypeOfApp">TYPE OF APPLICATION  </label> 
                            <SELECT name='StaffTypeOfApp'>
                            <OPTION> Select one</OPTION>
                            <OPTION Value="New">New</OPTION>
                            <OPTION Value="For Renewal">For Renewal</OPTION>
                            </SELECT><br><br>

<label for="StaffDocuments">DOCUMENTS</label>
<input type="file" name="file" class="form-control"/>
     &nbsp; &nbsp;  

    <br></br>
<p></p></div>	
            <div class="contact-w3ls-top">
            <center><h2>Particular for vehicles</h2></center>
            </div>
            <div class="contact-w3ls-bottom">
    

            <label for="StaffVehRegistrationNo">TICK WHERE APPLICABLE </label>
    <input type="checkbox" id="car" name="StaffVeh[]" value="CAR">CAR &nbsp; &nbsp; <input type="checkbox" id="motorcycle" name="StaffVeh[]" value="MOTORCYCLE">MOTORCYCLE<br><br>

    <label for="StaffVehRegistrationNo">VEHICLE REGISTRATION NO </label><input type="text" name="StaffVehRegistrationNo" required=""><br><br>
    <label for="StaffVehType">VEHICLE TYPE/MODEL</label> <input type="text" name="StaffVehType" required=""><br><br>
    <label for="StaffVehColour"> VEHICLE COLOUR </label><input type="text" name="StaffVehColour" required="">&nbsp; &nbsp; 
    <button type="button">ADD</button>
    <center><input type="submit" value="SUBMIT" name="search" action="try"></center>

</form>	

</div>
</div>
</div>
</div>
</div>

<div class="clear"> </div>
</div>
</div>
</form>

<?php 
}
}
?>
<!-- //main -->
<!-- copyright -->
<div class="w3copyright-agile">
<p>© 2019 All rights reserved | Design by Zu & Ina</p>
</div>
<!-- //copyright -->
</body>
</html>
