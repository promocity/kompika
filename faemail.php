<?php
	function string_mysql_escape($strinput) { 
		if(is_array($strinput)) 
			return array_map(__METHOD__, $strinput); 
		if(!empty($strinput) && is_string($strinput)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $strinput); 
		} 
		return htmlspecialchars(trim($strinput)); 
	}
	$postname = string_mysql_escape($_POST['name']);
	$posttel = string_mysql_escape($_POST['tel']);
	if ($postname == '') {
		$errormessage = 'Пожалуйста, укажите Ваше имя.';
	} else {
		if ($posttel == ''){
			$errormessage = 'Пожалуйста, укажите номер телефона.';
		}
	} 
	if ($postname != '' && $posttel != ''){
		$timenow = string_mysql_escape($_POST['now']);
		$timelater = string_mysql_escape($_POST['later']);
		if ($timenow == 'true'){
			$workdate = date('j').'-';
			switch (date('n')){
				case 1:
					$month = "Января";
					break;
				case 2:
					$month = "Февраля";
					break;
				case 3:
					$month = "Марта";
					break;
				case 4:
					$month = "Апреля";
					break;
				case 5:
					$month = "Мая";
					break;
				case 6:
					$month = "Июня";
					break;
				case 7:
					$month = "Июля";
					break;
				case 8:
					$month = "Августа";
					break;
				case 9:
					$month = "Сентября";
					break;
				case 10:
					$month = "Октября";
					break;
				case 11:
					$month = "Ноября";
					break;
				case 12:
					$month = "Декабря";
					break;	
			}
			$workdate .= $month.'-'.date('Y H:i')." (Время московское)";
		}
		if ($timelater == 'true'){
			$day = string_mysql_escape($_POST['day']);
			$month = string_mysql_escape($_POST['month']);
			$year = date('Y');
			$hour = string_mysql_escape($_POST['hour']);
			$minute = string_mysql_escape($_POST['minute']);
			$workdate = ''.$day.'-'.$month.'-'.$year.' '.$hour.':'.$minute; 
		}
		$textmail = "Поступила заявка на вызов мастера от $postname (номер телефона $posttel) на следующую дату: $workdate";
		mail('+79221323352@yandex.ru', 'Вызов мастера', $textmail);		
		$errormessage = "Заявка успешно отправлена.";
	}
	echo $errormessage;
?>