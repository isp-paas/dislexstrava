<?php

function printAthleteInfos($athlete){
    

	$html ="<ul>";
	$html =+ "<li>User  : ".$athlete[username]."</li>";
	$html =+ "<li>City  : ".$athlete[city]."</li>";
	$html =+ "<li>State : ".$athlete[state]."</li>";
	$html =+ "</ul>";
	$html =+ "<img src=\"".$athlete[profile_medium]."\">";
   //return $athlete;
    return $html;

}

?>