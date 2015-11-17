<?php
/**
     * This function finds original URL from shortened URL using untiny
     * 
     * @author Syeed Chowdhury <syeed@uparrowconsulting.com>
     * @var String url
     * @return String expanded_url
     */
function get_expanded_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://untiny.me/api/1.0/extract/?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$expanded_url = curl_exec($ch);  
	curl_close($ch);  
	return $expanded_url;  
}
?>