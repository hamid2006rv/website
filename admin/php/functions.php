<?php
 include_once ('init.php');

  function get_name_of_day ($d)
  {
	switch($d)
	  {
		case 0: return 'یکشنبه';break;
		case 1: return 'دوشنبه';break;
		case 2: return 'سه شنبه';break;
		case 3: return 'چهارشنبه';break;
		case 4: return 'پنج شنبه';break;
		case 5: return 'جمعه';break;
		case 6: return 'شنبه';break;
		default: return '';break;
	  }
  }


  function get_name_of_month ($m)
  {
	switch($m)
	  {
		case 1: return 'فروردین'; break;
		case 2: return 'اردیبهشت'; break;
		case 3: return 'خرداد'; break;
		case 4: return 'تیر'; break;
		case 5: return 'مرداد'; break;
		case 6: return 'شهریور'; break;
		case 7: return 'مهر'; break;
		case 8: return 'آبان'; break;
		case 9: return 'آذر'; break;
		case 10: return 'دی'; break;
		case 11: return 'بهمن'; break;
		case 12: return 'اسفند'; break;
		default: return '';
	  }
  }
  ////////////////////////////////////////

if(isset($_POST['action']))
{
	$action=$_POST['action'];
	if ($action==1)
	{
		$id=$_POST['id'];
		
		$result=mysql_query("delete from notification where nid=$id");
		if($result)
		{
			//delete attached files
				echo 'ok';
				exit();	
		}
	}

}

?>