<?php
  $orgid=1;
  $page='';
  include_once ('/php/init.php');
  include_once ('/php/functions.php');
  include_once ('/php/header.php');
?>

 <div class='container'>
        <div class='row'>
            <div class='col-md-9 col-sm-12 col-xs-12'>
				<ol class="breadcrumb">
				  <li><a href="index.php">صفحه اصلی</a></li>
				  <li><a href="notification.php">اطلاعیه ها</a></li>
				</ol>
				  <?php
						$id=htmlspecialchars($_GET['id']);
						$result=mysql_query("select * from notification where nid=$id");
						$row=mysql_fetch_assoc($result);
						echo "<div class='panel panel-default' style='margin:5px;'>";
                        echo "<div class='panel-heading'>$row[ntitle]</div>";
                        echo "<div class='panel-body'>$row[ndesc]</div>";
                        echo "</div>";
				  ?>
			

							
						   </div>
		   <div class='col-md-3 col-sm-2 col-xs-2'>
					<h1>تبلیغات</h1>
					<img src='img/ads/ads.jpg'/>
					<img src='img/ads/ads.jpg'/>
					<img src='img/ads/ads.jpg'/>
           </div>
		</div>

</div>

<?php
  include_once ('/php/footer.php');
?>