<html>
<head></head>
<title>Search Page</title>
<?php echo form_open('Welcome/searchrow'); ?> 
     <label for="forname">Name:</label>
     <input type="text" size="20" id="name" name="name"/>
     <br/>
     <input type="submit" value="Search"/>
<?php echo form_close(); ?>
</html>
