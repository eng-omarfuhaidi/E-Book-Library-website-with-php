<?php include("conn.php");

$msg="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{


  $id=$_POST['book_id'];  
  

  if($id!="")
  {  
      $sql="DELETE FROM `book` WHERE `book`.`b_id` ="."'$id'";
      
	$data = mysqli_query($conn, $sql);
	
      if($data)
	  {
	    $msg= "Book Delete Successfully";
	  }
	  else
	  {
	    $msg= "Something Went Wrong..";
	  }
}
    else
	  {
	   $msg="Book ID Required";
	  }
}
?>
<html>
<head>
<title>Delete_Book</title>


<style>
body{
  background: url();
}
.box{
  width:74%;
  height:160px;

  background-image: url(lib.jpeg);
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
  box-shadow:0px 0px 15px lightgreen;
   border:solid 1px #CF0403;
  border-radius: 12px;
}

	 .header{
	         width:400px;
			color:#FFFFFF;
			 display: inline-block;
			 width:73.5%;
			 height:370px;
			 margin-left:13%;
       background-image: url("lg3.jpg");
       background-size: cover;
			 box-shadow:0px 0px 15px lightgreen;
       border-radius:12px;
         border:solid 1px #CF0403;

			 }


	.title
	       {
				color:#FFFFFF;
			   font-size:20px;
			 	font-weight:10px;
				
				background:rgba(0,0,0,0.5);
                margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
	           background:#660000;
			   border:none;
         margin-left:20px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:15px;
        width:280px;
	           }

	.container{
        margin-top: 15px;
	            margin-left:20%;

				font-weight:10px;
				height:350px;
				background:rgba(0,0,0,0.5);
				padding-left:3%;
                width:600px;
        box-shadow:0px 0px 15px lightgreen;
        border-radius:18px;
        overflow:auto;
				}

   .header input[type="submit"]
          {

		    font-size:25px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
            margin-top: 10px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}



ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 200px;
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
  padding-left:12%;

}


</style>
</head>
<body>
  <div class="box">
   <table  style ="border-color:red; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:blue"><h1 align="center"><marquee>مرحباً بكم في المكتبة الإلكترونية</marquee></h1></td>
      </tr>
      <tr>
        <td style="color:blue" align="center"><b><i>حذف كتاب من قاعدة البيانات</i></b></td>
      </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "index.php">تسجيل الخروج</a></li>
<li><a href = "delbook.php">حذف كتاب </a></li>
<li><a href = "edit_book.php">تعديل كتاب</a></li>
<li ><a href = "add_book.php"  style="background-color:green">اضافة كتاب</a></li>
  <li><a href = "admin.php">الصفحة الرئيسية</a></li>
</ul>
<br><br><br>
</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>حذف كتاب</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:10px;direction:rtl;float:right;">
      
       <tr>
     <td style="width:250px;text-align:center">معرف الكتاب:</td>
     <td><input style="width:200px;" type="text" name="book_id" placeholder="معرف الكتاب"/></td>
	</tr>
      
      <tr>
	  <td ><h2><input style="margin-right:100%;margin-top:30%;" type="submit" name="sub" value="حذف الكتاب"/></h2></td>
	  </tr>
      
      <tr><td  style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td></tr>
    </table>
    </div>
   </div> 
 </form>
</body>
</html>