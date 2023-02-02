<?php
	$url = $_GET['link'];
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 40);
	curl_setopt_array($ch, array(
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_COOKIE => "ht=7635aa7ceda60bf1",
      CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0",
      CURLOPT_HTTPHEADER => array(
        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "Accept-Language: pl-PL,pl;q=0.5",
        "Cache-Control: no-cache",
        "Connection: keep-alive"
      ),
    ));

	curl_setopt($ch, CURLOPT_URL, $url);

	$feedData = curl_exec($ch);
	curl_close($ch);
	var_dump($feedData);
?>