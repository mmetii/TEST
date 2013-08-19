<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course</title>
<link href="Style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
    <div align="right"><a href="index.php"><img src="Images/headr.jpg" width="100%" /></a>
        <div style="float:right; color:#000;">
	 <?php
	if(!empty($_SESSION['Admin']))
	{
		 if($_SESSION['Admin'] = 'Yes')
		 {
			 echo "Welcome! Admin";
		 }
	}
	if(!empty($_SESSION['User']))
			 echo "Welcome! " . $_SESSION['User'];
			 
	?>
      </div>
    </div>
    <div id="search" align="right">
    Search: <input name="txtSearch" type="text" maxlength="20" />
    </div>
    <div id="menu" >
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="course.php">Courses</a></li>
            <!--<li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>--> 
            <li>  </li>      
    </ul>
    
  </div>
</div>
<div id="mainout">
<br />
	<div>
<table align="center">
<tr>
  <td align="right"></td></tr>
<tr><td align="center">

</td></tr>
<tr><td align="center">

</td></tr>
<tr><td align="center" style="color:SaddleBrown; font-family:'Comic Sans MS', cursive">
<a href="course.php">Click here to view all the courses available</a> 
</td></tr>
</table>
</div>
<br />
</div>


<div id="footer">
  <p align="center">©2013 Green Bay High School</p>
</div>
</body>
</html>