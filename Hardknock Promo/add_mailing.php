<div class="form2">

							
 <FORM ACTION="insert_mailing.php" name="signup" METHOD=POST>

      <label for="name">Name:</label>
      <input name="name" type="text" id="name">
	  <br/>
      <label for="email">Email:</label>
      <input name="email" type="text" id="email">
	  <br/>
      <div align="center" class="submit">
      <input type="submit" name="Submit" value="Submit">
      </div>
	  
  </form><?php 
	$exists=$_GET['exists'];
	if ($exists=="true") {
	print ('<span style="font-weight:bold;font-size:120%;color:#990000;">Email Exists in Database.</span><br/>');
	}
	?>
</div>
