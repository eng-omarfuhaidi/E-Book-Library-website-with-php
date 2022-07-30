<?php
include("conn.php");
$error="";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admindas.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}

 
?>

<!DOCTYPE html>
<html>

<head><title>HOME PAGE</title></head>
    
<style>
body{
  background: url(2.jpg);
}
  .box{
    width:74%;
    height:160px;
	
     border:solid 1px #CF0403;
    background-image: url("lib.jpeg");
    background-size: cover;
    margin-left: 13%;
    opacity: .9;
    border-radius:12px;
  }
  .boxtwo{
    background-image: url("lg3.jpg");
    background-size: cover;
    box-shadow:0px 0px 15px lightgreen;
    border-radius:12px;
  }

.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 55%;
  border-radius:12px;
  margin-right: 5%;
  box-shadow:0px 0px 15px lightgreen;
  font-size:25px;

}
   .five input[type="submit"]
          {

		    font-size:22px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:90% ;
            margin-top: 20px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}


</style>





<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:blue"><h1 align="center"><marquee><u>مرحباً بكم في المكتبة الإلكتروينة</u></marquee></td></h1>
      </tr>
      <tr>
        <td style="color:blue" align="center"><b><u>صفحة تسجيل الدخول</u></b></td>
      </tr>
    </table>
  </div>
    <br>
    <br>

    <form method="post" action="">
      <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:360px; margin-left:13%;margin-top:15px;background-color:white">

        <fieldset align="center" style="  background:rgba(0,0,0,0.38);color:blue;" class="five" class="one">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;border-radius:12px;margin-top:-13px;margin-left:-12px;height:40px">فضلاً قم بتسجيل الدخول هنا</h3>


          </div>

        <table style="font-size:16pt;width:300px;height:50px;margin-right:45px;direction:rtl;" align="Right">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:white">اسم المستخدم:</label></td>
            <td><input type="text" name="username" placeholder="اسم المستخدم"  style="color:red"></td>
          </tr>

          <tr>
            <td><label style="color:white">كلمة المرور:</label></td>
            <td><input type="password" name="password" placeholder="**********"  style="color:red"></td>
          </tr>
          <tr>
            <td ><input  align="center" style="margin-right:100px;" type="submit" name="submit" value="تسجيل الدخول"></td>
          </tr>
          <p style="color:red;font-weight:bold;font-size:17px;text-align:center;background:rgba(255, 255, 255, 0.8)"><?php echo $error ?>
          </p>
          <tr>
            <td style="font-size:10pt;color:white">ألم تسجل بعد ...!!!</td>


            <td style="font-size:10pt"><a href="registration.php" style="color:white">سجل الآن</a></td>
          </tr>
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
      </fieldset>
      </div >
    </form>


    <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
      <marquee><h6 style="line-height:1px;">شكراً لزيارتكم لهذا الموقع.</h6></marquee>


    </div>
