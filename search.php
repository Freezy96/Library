<?php
require_once('config.php'); 
include('session.php');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {

  $q = $conn->escape_string($q);
  $get_topics_sql = "SELECT topic_id, topic_title FROM forum_topics WHERE topic_title LIKE '%$q%' LIMIT 4" ;

  $get_topics_result = $conn->query($get_topics_sql);

  $hints = array();


  while ($topic_info = $get_topics_result->fetch_assoc()) {
    $topic_id = $topic_info['topic_id'];
    $topic_title = stripcslashes($topic_info['topic_title']);

    $hint = "<a href='/forum/showtopic.php?topic_id=$topic_id'>$topic_title</a>";

    array_push($hints, $hint);
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if (empty($hints)) {
  $response="no suggestion";
} else {
  $response=join('<br>', $hints);
}

//output the response
echo $response;
?>