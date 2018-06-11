<html>
<head></head>
<title>Insert Page</title>
<?php echo form_open('Welcome/insertrow'); ?> 
     <label for="forname">Name:</label>
     <input type="text" size="20" id="name" name="name"/>
     <br/>
     <label for="age">Age:</label>
     <input type="text" size="3" id="age" name="age"/>
     <br/>
     <input type="submit" value="CreateRecord"/>
<?php echo form_close(); ?>
</html>
