<?php
  function getEventTypes(){
  //$eventTypes = '{"error":0,"eventTypes":[{"id":1,"name":"Dengue"},{"id":2,"name":"Gas Leak"},{"id":3,"name":"Traffic Accident"}]}';
  $url = "http://172.22.224.29:9000/getEventTypes";
 
  $result = file_get_contents($url);
  //echo $result;
  $decoded = json_decode($result, TRUE);
  //var_dump($decoded);

  return $decoded;
}
 
?>