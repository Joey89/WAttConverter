<?php 


function roundToAny($n,$x=5) {
	$secs = substr(strstr($n, ':'), 1);
	$min = strstr($n, ':', true);
	$tensSec = substr( $secs, 0, 1);
	$singleSec = (int)substr( $secs, 1);



   if( $secs%$x==0 ){
   	//doesnt equat to nearest 5
   }else{
   	if($singleSec >= 8){
   		//round to 10
   		$tensSec++;
   		$singleSec=0;
   	}elseif ($singleSec <= 7 && $singleSec >= 3) {
   		$singleSec = 5;
   	}elseif( $singleSec < 3){
   		$singleSec = 0;
   	}
   }

   return $min . ':' . $tensSec . $singleSec;
   
}

$from_watt = $_POST['from_watt'];
$time = $_POST['time'];
$to_watt = $_POST['to_watt'];
$to_time = 0;

if( $from_watt === $to_watt){
	echo  gmdate("i:s", $time);
}else{
	$to_time_sec = ($from_watt / $to_watt) * $time;
	$formattedTime = gmdate("i:s", $to_time_sec);

	echo roundToAny($formattedTime);
}

?>