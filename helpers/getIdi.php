<?php 
if(isset($_GET['id']))
{
  $id = strip_tags($_GET['id']);
  var_dump($id);
}