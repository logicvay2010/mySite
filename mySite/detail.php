
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="image/x-icon" rel="shortcut icon" href="/images/gtx.ico" />
<title>小辉子小燕子的窝</title>
</head>
	
<body >
	<table cellspacing=0 bordercolordark=#FFFFFF width="95%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    
		    <td width="5%" align="center" valign="bottom">内容</td>
		</tr>
		<?php
		$servername = "106.186.18.95";
		$username = "logicvay";
		$password = "816438abc";

		// 创建连接
		$conn = mysql_connect($servername, $username, $password);

		// 检测连接
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//echo "Connected successfully";
		
		mysql_query("set names 'utf8'"); 
		mysql_select_db("logicvay_content",$conn);
		$txt = "select * from article where art_order=" .$_GET["order"];
		$result=mysql_query($txt,$conn);
		    while($row=mysql_fetch_array($result))//通过循环读取数据内容
		    {
		?>
		<tr>
		    
		    <td align="center"><?php echo $row["art_content"]?></td>
		</tr>
		<?php
		    }
		    //关闭对数据库的连接
		    mysql_close($conn);
		?>
		</table>
</body>
</html>