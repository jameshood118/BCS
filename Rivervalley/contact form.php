            <?php 
	$emptyfields=$_GET['emptyfields'];
	if ($emptyfields=="true") {
	print ('<font color=red>ALL FIELDS ARE REQUIRED. PLEASE TRY AGAIN.</font><br>');
	}
	?>
          <form action="sendmail.php" method="post">
            <select name="department" id="select">
              <option value="Products" selected>Products</option>
              <option value="Comments">Comments</option>
              <option value="Questions">Questions</option>
              <option value="Other">Other</option>
            </select>
            <br/>
            Name*:&nbsp;&nbsp; 
            <input name="name" type="text" size="15" maxlength="15">
            <BR/>
            Phone*:&nbsp; 
            <input name="phone" type="text" size="15" maxlength="15">
            <BR/>
            Email*:&nbsp;&nbsp; 
            <input name="email" type="text" size="30" maxlength="30">
            <BR/>
            Comments*:<BR/>
            <textarea name="comments" cols="45" rows="5"></textarea>
            <BR/>
            <INPUT TYPE="submit" NAME="send" VALUE="Submit">
            <BR/>
            <BR/>
            * Required Information 
          </form>


<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;q=river+valley+comfort+shoes+huntsville&amp;fb=1&amp;split=1&amp;gl=us&amp;cid=0,0,6188923604547945229&amp;ei=m6B5SqbKE8W_tgftnM2WCQ&amp;ll=34.818032,-86.490511&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"></iframe><br />