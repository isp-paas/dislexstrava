<?php

function printAthleteInfos($athlete){
    
	$html ="<div id=\"profile\"><ul>";
	$html = $html."<li>User     : ".$athlete[username]."</li>";
	$html = $html."<li>Mail     : ".$athlete[email]."</li>";
	$html = $html."<li>City     : ".$athlete[city]."</li>";
	$html = $html."<li>weight   : ".$athlete[weight]."</li>";
	$html = $html."<li>State    : ".$athlete[state]."</li>";
	$html = $html."<li>follower : ".$athlete[follower_count]."</li>";
	$html = $html."<li>friend   : ".$athlete[friend_count]."</li>";

	$html = $html."<li><img src=\"".$athlete[profile]."\"></li>";
	$html = $html."</ul>";
	$html = $html."</div>";
   //return $athlete;
    return $html;

}



function printLastActivityInfos($activities){

	$html ="<div id=\"lastActivity\"><ul>";
	$html = $html."<li>name  : ".$activities[0][name]."</li>";
	$html = $html."<li>type  : ".$activities[0][type]."</li>";
	$html = $html."<li>distance  : ".$activities[0][distance]."</li>";
	$html = $html."<li>moving_time : ".$activities[0][moving_time]."</li>";
	$html = $html."<li>elapsed_time : ".$activities[0][elapsed_time]."</li>";
	$html = $html."<li>start_date : ".$activities[0][start_date]."</li>";
	$html = $html."<li>total_elevation_gain : ".$activities[0][total_elevation_gain]."</li>";
	$html = $html."<li>kudos_count : ".$activities[0][kudos_count]."</li>";
	$html = $html."</ul>";
	$html = $html."</div>";
   //return $athlete;
    return $html;

}

function printAllActivityInfos($activities){

	$html ="<div id=\"allActivity\"><ul>";
	for($i = 0, $n = count ( $activities ); $i < $n ; $i ++) {
		$html = $html."<li>name  : ".$activities[$i][name]." - type  : ".$activities[$i][type]."distance  : ".$activities[$i][distance]." moving_time : ".$activities[$i][moving_time]." - elapsed_time : ".$activities[$i][elapsed_time]." - start_date : ".$activities[$i][start_date]." - total_elevation_gain : ".$activities[$i][total_elevation_gain]." - kudos_count : ".$activities[$i][kudos_count]."</li>";
	}
	$html = $html."</ul></div>";   
    return $html;

}


?>