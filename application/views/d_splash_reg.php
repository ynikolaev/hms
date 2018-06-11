<html>
<head>
<title>Loading</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>/Images/icon.png" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152×152" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="apple-touch-icon" sizes="180×180" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/style.css">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>CSS/normilizer.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

window.onload=timeout;
function timeout(){
window.setTimeout("redirect()",4000)}

function redirect(){
window.location.href = "<?php echo base_url(); ?>index.php/hms_main/login";
return}

</script>
</head>
<body>
	<div class="pageSplash">
        <div class="splash">
            <img id="splimg" src="<?php echo base_url(); ?>/Images/splashreg.gif" alt="startup image" />
    </div>
	</div>
</body>
</html>