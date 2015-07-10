<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<script src="jquery-1.4.2.min.js"></script>-->
<script>
/*$(document).ready(function() {
	$('#countr').click(function(){
		$('#wordcount').text();
		var fromId="#countFrm";
		var url=$('#url').val()
		$.get("test2.php?txt="+url,function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
	$('#wordcount').text('Total word = '+data);
  });												
													
												
	});

    
});*/
</script>
</head>

<body>

<form method="post" action="test2.php">
<input type="text" name="txt" id="url" />
<input type="submit" value="count" id="countr" />
<br />
<label id="wordcount"><?php echo $_GET['flag'];?></label>
</form>
</body>
</html>