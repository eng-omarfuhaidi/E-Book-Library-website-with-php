<?php include("conn.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $dept=$_POST['department'];
  $email=$_POST['email'];
  $password=$_POST['password'];
    
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;
    
    
    
    if($name!="" && $roll!="" && $dept!=""  && $email!="" && $password!="" )
  { 
        $insert="INSERT INTO `student_registration`(`roll`,`gender`,`name`,`dept`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$dept."','".$email."','".$password."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
          header("Location:thnk.php"); 
	  }
        else
        {
            echo "Something Wrong Occurs..!! Please Try Again";
        }
        
    }
    else{
        echo "Fields Should Not Be Empty..!!";
    }
}


?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
  background: url("2.jpg");
}
.box{
  width:74%;
  height:165px;
 border:solid 1px #CF0403;
  background-image: url("lib.jpeg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
}
.title h2{
           background:#660000;
       border:none;
       margin-left:-10px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:120px;
      border-radius:15px;
      width:77.2%;
      color:white;
           }
.one{
  margin-top: 1.5%;
  margin-left:52%;
  margin-right:2%;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  height:320px;
  background:rgba(0,0,0,0.5);
}
.boxtwo{
  background-image: url("lg3.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
}
.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
   border:none;
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#660000;
   color:#FFFFFF;
   border-radius:18px;
   }

</style>




<head><title>REGISTRATION</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt" align="center" width="100%" height="100%">
      <tr>
        <td style="color:white"><h1 align="center"><marquee ><i>مرحباً بكم في المكتبة الإلكترونية</i>  </marquee></h1></td>
      </tr>
      <tr>
          <td  align="center"><b><i><mark style="color:white;background-color:maroon";>صفحة التسجيل</mark></i></b></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:370px; margin-left:13%;margin-top:10px;background-color:white">

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>معلومات التسجيل</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white;font-size:13pt;direction:rtl;">
	  <tr>
			<td>الاسم:</td>
 <td ><input type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>الجنس.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> ذكر
<input type="radio" name="gender" value="f"> انثى</td>
    </tr>
<tr>
<td>اسم المستخدم.:</td>
 <td><input type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>القسم:</td>
 <td><select required name="department">
  <option value="cse">علوم حاسوب</option>
  <option value="tt">إدارة أعمال</option>
  <option value="me">ميكانيك</option>
  <option value="ee">الكترونيات</option>
</select></td></tr>

<tr><td>الإيميل:</td>
 <td><input type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
كلمة المرور:</td>
 <td><input type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td></tr>

 <tr>
  <td><input type="submit" name="submit"
   value="تسجيل"></td>
</tr>
 </table>
</form>
 </fieldset>
</div>



  <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">هل لديك استفسار؟<a href="aboutus.php">اتصل بنا </a>.شكراً لك.</h6></marquee>


  </div>

 </body>
</html>
