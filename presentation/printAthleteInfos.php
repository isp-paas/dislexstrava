<?php

function printAthleteInfos($athlete){
    
	print_r($athlete[profile],true);

	$html ="<ul>";
	$html = $html."<li>User  : ".$athlete[username]."</li>";
	$html = $html."<li>City  : ".$athlete[city]."</li>";
	$html = $html."<li>State : ".$athlete[state]."</li>";
	$html = $html."</ul>";
	$html = $html."<img src=\"".$athlete[profile]."\">";
   //return $athlete;
    return $html;

}

?>