<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: yellow;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
body{
  background-image: url("cyberpunk.jpg");
}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<body>



<div class="navbar">
  <a class="active" href=""><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="product.php"><i class="fa fa-fw fa-search"></i> Product</a> 
  <a href="aboutus.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Log Out</a> 
 </div>

<img src="New Distance Studios.JPG" alt="New Distance Studios" class="center"> 
<br>
<br>
<br>
<br>


<table border ="0 px" cellpadding="15px" cellspacing="0px" width="100%" bgcolor="yellow">
<tr>
<th style = "font-family:Impact;color:black;">The New Distance Studios is a not only a studio,but also a large-storey business who is very focused much more on quality while also giving more talent
to those who are willing to be expert game developers that will be able to show how to provide with a lot of entertainment value while also giving a lot 
of benefits and services so that it will be functional for the world to see.

<br>
<br>


We offer you the best of both worlds while also continuing to support the fans alone with the merchandise that we get if and only if there is a lot of reasonable creativity down the line.
This is what the philosophy of this company:create video games and hopefully have a consistent vision that will make sure everyone has the same sentiments and communicate with the developers and
marketers.


<br>
<br>
<br>


Not only,we also provide with a lot of services,more specifically for consoles,PCs and other appliances.We do a lot of maintenance in order to make sure that the person or the customer will not be able to
buy another product because buying another product because a device is broken costs a lot of money.In some cases depending on the circumstances or the situations faced on the company,it is true.While we are committed to being 
responsible staff for pushing creativity to it's best,there has to be some sort of compromises and considerations to take care. But still,we are willing to expand the business model while also making some very critical
and wise decisions for the company.


We want to be everything what the gaming industry loved.Creativity,giving free service to help the community as a whole while also dealing with political views properly while facing the reality of the situation 
and overcome it at the very end.We are not like the other companies who care more about reputation and greed and exploitation of the developers for the sake of following capitalism,which is a very bad thing.

<br>
<br>
<br>



</th>
<td> <img src = "CDProjekt.jpg"></td>
</tr>
</table>

<table border ="1 px" cellpadding="15px" cellspacing="0px" width="100%" bgcolor="yellow">
  <tr>
     <table border ="1 px" cellpadding="15px" cellspacing="0px" width="100%" bgcolor="yellow">
     <tr>
     <td align ="center" style = "font-family:Impact; color:black">
         ©2022 CSCP Industries Inc. All Rights Reserved.
     </td>
  </tr>
</table>
</tr>
</table> 
</center>
</center>
</body>
</html> 