<script type="text/javascript">
	function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("name");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}
	</script>


    <p class="link-top"><a href="index.php" target="">Home</a></p>
    <p class="link2"><a href="about.php" target="">About Us</a></p>
    <p class="link"><a href="products.php" target="">Products</a></p>
    <p class="link2"><a href="contact.php" target="">Contact Us</a></p>
    <p class="link" name="admin-login" id="admin-login"><a href="javascript:showonlyone('newboxes100');">Admin</a></p>
  
<div class="admin" name="newboxes" id="newboxes100" style="display:none;">
									<?php 
									$error=$_GET['error'];
									if ($error=="true") {
									print ('<font color=red>Login Incorrect Retry.</font><br>');
									}
									?>

 <form class="admin" name="form1" method="post" action="admin_menu.php">
 				Login:<br/>
				<input name="login" type="text" id="login"><BR/>
                Password:<br/>
				<input name="password" type="password" id="password">
				<br/>   
              <input class="submit" type="submit" name="Submit" value="Submit">
			  &nbsp; &nbsp; &nbsp;
			  <a href="javascript:CloseWindow();">Close</a>
              </form>

<script>

function CloseWindow()

{

    document.getElementById('newboxes100').style.display='none';

}

</script>
  </div>