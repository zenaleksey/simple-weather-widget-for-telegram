<?php

require_once('config.php');

foreach($cfg as $city)
{
	$weather_string = trim(file_get_contents($city['url']));
	if(strpos($weather_string, 'Unknown') === false) 
	{
		message_to_telegram($city['channel'], "Нужны другие города? Погода городов мира одной строкой: @meteoonebot");
		message_to_telegram($city['channel'], $weather_string);
	}
}

?>
