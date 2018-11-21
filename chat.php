	<div style="width: all;height: 100px;float: right;"><h3> chat's are</h3>
		<?php
		include_once('dbh.php');
         $sql="select * from posts order by id DESC;";
         $result=mysqli_query($con,$sql);
         $resultcheck=mysqli_num_rows($result);
         if($resultcheck>0)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		?>

         		<span><?php echo $row['date'];?>::<strong><?php echo $row['name'];?>--</strong><span style="font-size: 20px;"><?php echo $row['msg'];?></span></span>
         		<br>

         		<?php
         	}
         }
         else
         {
         	echo "doesn't have a single messege";
         }
		?>
		
	</div>