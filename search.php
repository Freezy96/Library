<?php
require_once('config.php'); 

//get the q parameter from URL
$q=$_GET["search"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
$searchby = $_POST['searchby'];
  $q = $conn->escape_string($q);
  $get_topics_sql = "SELECT title, author,subject, isbn, callnumber FROM books WHERE '$searchby' LIKE '%$q%' LIMIT 8";

  $get_topics_result = $conn->query($get_topics_sql);

  $hints = array();


  while ($topic_info = $get_topics_result->fetch_assoc()) {
    $topic_id = $topic_info['id'];
    $topic_title = stripcslashes($topic_info['$searchby']);

    $hint = "<a href='bookloaninfo.php?topic_id=$id'>$searchby</a>";

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