//By Fred Pedro Jr.


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scan Webpage and Download</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript">
$(document).ready(function() { 
	var options = { 
			target:   '#output',   
			success:       afterSuccess,  
			uploadProgress: OnProgress, 
			resetForm: true       
		}; 
		
	 $('#form').submit(function() { 
			$(this).ajaxSubmit(options);  			
			return false; 
		}); 
		

function afterSuccess()
{
	
	$('#loading-img').hide(); //hide submit button
        $("#output").html("Success")
        $('#submit-btn').show();
	$('#where').show();
}

function OnProgress(event, position, total, percentComplete)
{
    $('#loading-img').show();
    $('#submit-btn').hide()
$("#output").html("")

}

});

</script>
<body>
	<form action="da.php" method="post" enctype="multipart/form-data" id="form">
	Link:<INPUT TYPE="Text" Value="" Name="link">
	<input type="submit" value="submit" id="submit-btn"><img src="ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
        <p>Please follow this format: http://www.domain.com/ </p>
        </form>
        <div id="output"></div>
	<div id="where" style="display: none;">To view the images, go to <a href="/images/" >here</a></div>

</body>
</html>
