<?php include("conn.php");

session_start();
$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];
$namecap=ucwords($name);

?>

<!DOCTYPE html>
<html>
<style>
    
    
    
    body{
  background: url("2.jpg");
}
.box{
  width:74%;
  height:160px;

  background-image: url("lib.jpeg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
   border:solid 1px #CF0403;
}
.boxtwo{
  background-image: url("lg3.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
   border:solid 1px #CF0403;

}
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: purple;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: green;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;

}
.nav{
  padding-left:13%;

}
.box-cnt{

  box-shadow: 0px 0px 15px lightgreen;
  background:rgba(0,0,0,0.38);
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:white;
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#660000;
        border-radius:12px;
        
    }

    .box-table{
        color: white;
        text-align: center;
        border-collapse: collapse;
        margin:1%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid white;
    }
    
    a{
        color: white;
    }
    
    
    </style>
    
    
    
    
  
    
    
    
<head><title>Student_DashBoard</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" style="direction:rtl;">
      <tr>
        <td style="color:white"><h1 align="center"><marquee><i>مرحباً بكم في المكتبة الإلكترونية</i>  </marquee></h1></td>
      </tr>
      <tr>
        <td ><mark style="color:white;background-color:maroon;direction:rtl;float:right;"> &nbsp;مرحباً:
            
            <?php if($gender=="m")
                {
                    echo "Mr. ";
                } 
               else{
                echo "Ms. ";
               }
            ?><b><?php echo $namecap; ?> &nbsp;</b></mark></td>
      </tr>
    </table>
  </div>

  <div class="nav">
    <ul>
	<li><a href="sbooks.php">معلومات كتبك</a></li>
	<li><a href="aboutus.php">عن المكتبة</a></li>
	<li><a href="index.php">تسجيل الخروج</a></li>
      <li><a style="background-color: green" href="sdb.php">الصفحة الرئيسية</a></li>
      
      
      
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:900px; margin-left:13%;margin-top:10px;background-color:white">
      
      
      
      
    <div class="box-cnt">
      <h3 class="box-cnt-h">علمي</h3>
         <table class="box-table" style="direction:rtl;float:right;">
                <tr>
                    <th>معرف الكتاب</th>
                    <th>اسم الكتاب</th>
                    <th>اسم المؤلف</th>
                    <th>النسخ المتوفرة </th>   
                    <th>النسخة الإلكترونية</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="علمي"){
                        echo "<tr>";
                          $bookid_cse=NULL;
                          $bookid_cse=$row["b_id"];
                          $lg1="<a href='view_book.php?id=$bookid_cse'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cse=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">تاريخي</h3>
        
        <table class="box-table" style="direction:rtl;float:right;">
                <tr>
                    <th>معرف الكتاب</th>
                    <th>اسم الكتاب</th>
                    <th>اسم المؤلف</th>
                    <th>النسخ المتوفرة</th>   
                    <th>النسخة الإلكترونية</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="تاريخي"){
                        echo "<tr>";
                          $bookid_tt=NULL;
                          $bookid_tt=$row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_tt'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_tt=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
      
    
    
      <br/clear="all">

    <div class="box-cnt">
      <h3 class="box-cnt-h">أدبي</h3>
        
        <table class="box-table" style="direction:rtl;float:right;">
                <tr>
                    <th>معرف الكتاب</th>
                    <th>اسم الكتاب</th>
                    <th>اسم المؤلف</th>
                    <th>النسخ المتوفرة</th>   
                    <th>النسخة الإلكترونية</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="أدبي"){
                        echo "<tr>";
                          $bookid_ee=NULL;
                          $bookid_ee=$row["b_id"];
                          $lg3="<a href='view_book.php?id=$bookid_ee'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg3"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_ee=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">ديني</h3>
        
        
        <table class="box-table" style="direction:rtl;float:right;">
                <tr>
                    <th>معرف الكتاب</th>
                    <th>اسم الكتاب</th>
                    <th>اسم المؤلف</th>
                    <th>النسخ المتوفرة</th>   
                    <th>النسخة الإلكترونية</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="ديني"){
                        echo "<tr>";
                          $bookid_me=NULL;
                          $bookid_me=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_me'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_me=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
		  
		  

  </div>


      <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
        <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">شكراً لاستخدامك هذا الموقع.</h6></marquee>


      </div>

</body>
<html>
