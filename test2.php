<?php
$txt = $_POST["txt"];
include("simple_html_dom.php");

$str = file_get_html($txt)->plaintext; 

  $rt = str_word_count($str);

 header("location:index.php?flag=Total word count = $rt");

?>