
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<SCRIPT language=javascript src="js/jquery-1.11.2.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/combined.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="image/x-icon" rel="shortcut icon" href="/images/gtx.ico" />
<SCRIPT language=javascript src="js/bootstrap.js"></script>

<title>小辉子小燕子的窝</title>
</head>
<body  style="background:#ebeeed">
<!-- 轮播照片 -->
	<div class="container">
	<div class="nav" style="background:#3B3027">
<!-- 		<a class="navbar-brand" href="./index.php"><img class="img-responsive" src="images/1.jpg" alt="Picture Perfect Production" /></a> -->
    	<ul class="nav nav-pills">
        <li class="active"><a href="./index.php">Home</a></li>
        <li><a href="./#ct1">下面的图片</a></li>
        <li><a href="./#ct2">音乐</a></li>
        <li><a href="./index.php">测试</a></li>
        <li><a href="./index.php">测试</a></li>
        <li><a href="./index.php">测试</a></li>
        </ul>
    </div> <!--end of nav -->
    </div>
	<div class="container">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					
					<div class="carousel slide" id="carousel-81400">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-81400">
							</li>
							<li data-slide-to="1" data-target="#carousel-81400">
							</li>
							<li data-slide-to="2" data-target="#carousel-81400">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="images/1.jpg"  />
								<div class="carousel-caption">
									<h4>
										爱你
									</h4>
									<p>
										一辈子。
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="images/2.jpg"  />
								<div class="carousel-caption">
									<h4>

									</h4>
									<p>
										
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="images/3.jpg" />
								<div class="carousel-caption">
									<h4>

									</h4>
									<p>

									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-81400" data-slide="prev">
                   <!--  <span class="glyphicon glyphicon-chevron-left"></span> -->
                </a>
                <a class="right carousel-control" href="#carousel-81400" data-slide="next">
<!--                     <span class="glyphicon glyphicon-chevron-right"></span>
 -->                </a>
					</div>
				</div>
			</div>
		</div>
		<!-- 音频部分 -->
		<div class="container-fluid text-right">
			<div class="row-fluid">
				<div class="span12">
					<span id="ct2" class="label label-info" style="padding-top:25px;">背景音乐：</span>
					<img class="img-rounded" src="images/yinle.png" width="32" height="32"  border="0" /></img>
					<audio src="audio/Believe.mp3" controls="controls" >Your browser does not support the audio element.	</audio>
				</div>
			</div>
		</div>
		<!-- 用户名及注销 -->
		<div class="container-fluid text-right">
			<div class="row-fluid">
				<div class="span12">
		<?php
			session_start();
			//使用一个会话变量检查登录状态
			if(isset($_SESSION['user_name'])){
				echo '<p class="text">welcome:'.$_SESSION['user_name'].'</p>';
				echo '<a href="logOut.php"> 注销</a>';
		?>
				</div>
			</div>
		</div>
		<!-- 文章预览 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<table  class="table" cellspacing=0 bordercolordark=#FFFFFF width="95%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
						<tr  bgcolor="#6b8ba8" style="color:FFFFFF">
						    <td width="5%" align="center" valign="bottom" height="19">标题</td>
						    <td width="10%" align="center" valign="bottom">作者</td>
						    <td width="5%" align="center" valign="bottom">时间</td>
						    <td width="5%" align="center" valign="bottom">内容</td>
						</tr>
						<?php
						require_once 'connectvars.php';
						$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
						//$servername = "106.186.18.95";
						//$username = "logicvay";
						//$password = "816438abc";

						// 创建连接
						//$conn = mysql_connect($servername, $username, $password);

						// 检测连接
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);

						} 
						//echo "Connected successfully";
						
						mysqli_query($conn,"SET NAMES utf8");
						//mysql_select_db("logicvay_content",$conn);
						$txt = "select * from article";
						$result=mysqli_query($conn,$txt);
						    while($row=mysqli_fetch_array($result))//通过循环读取数据内容
						    {
						?>
						<tr>
						    <td align="center" ><a href="detail.php?order=<?php echo $row["art_order"]?>" target="_blank"> 
						    	<span><?php echo $row["art_name"] ?></span></a></td>
						    <td align="center"><?php echo $row["art_author"]?></td>
						    <td align="center"><?php echo $row["art_time"]?></td>
						    <td align="center"><?php echo $row["art_content"]?></td>
						</tr>
						<?php
						    }
						    //关闭对数据库的连接
						    mysql_close($conn);
						?>
						</table>
					</div>
			 	</div>
			</div>
			<div style="margin-left:40px">
			<p class="lead">小燕子，哥哥爱你！</p>
		    <img id="ct1" class="img-circle" src="images/love.JPG" width="256" height="341"  border="0" /></img>
		</div>
	</div>
</body>
<?php
}
else{
echo "hello";
}
?>
</html>
