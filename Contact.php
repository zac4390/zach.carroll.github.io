<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
#contactinfo {
	margin-left: auto;
	margin-right: auto;
	width: 300px;
  height: 170px;
  border: 3px solid navy;
}

#address {
	margin-left: auto;
	margin-right: auto;
	width: 300px;
  height: 265px;
  border: 3px solid navy;
}

#contactform {
	margin-left: auto;
	margin-right: auto;
	width: 750px;

}
</style>

<body>
<?php include("includes\header.html"); ?>



<div id="contactbody2" style="padding:30px; text-align: center">
<div id="contactinfo">
		<h2 style="font-weight: bold;">Contact Info</h2>
		<p>Zachary Carroll<br>
			(405) 921-4210<br>
			<a href="mailto:zac4390@gmail.com">zac4390@gmail.com</a><br>
		</p>
	</div>

<br>

<div id="address">
		<h3 >Address:</h3>
		<p>
		605 SW 119th St 5100<br>
		Oklahoma City, Oklahoma 73170<br>
		United States of America<br>
		North America, Planet Earth<br>
		Earth-Moon System, Solar System<br>
		Milky Way Galaxy, Local Group<br>
		Virgo Supercluster, Observable Universe<br>
		</p>
	</div>

<br>
<div id="contactform">
	<form method="POST" action="contact.php" class="message">
		<fieldset>
			<legend>Give a suggestion or leave a message</legend>
		<p>
			<label for="yourname" class="fixedwidth">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="yourname" id="yourname" value="your name here" size="30px"/>
			<br>
			<label for="phone" class="fixedwidth">Phone:&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="phone" id="phone" value="xxx-xxx-xxxx" size="30px"/>
			<br>
			<label for="email" class="fixedwidth">&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="email" id="email" value="address@something.com" size="30px"/>
		</p>
		<!--<p>
			<label for="enjoyed">I am pleased I visited this web page</label>
			<input type="radio" name="enjoyed" id="enjoyed" value="yes" checked="checked"/>
			<br>
			<label for="enjoyed">I am <u>not</u> pleased I visited this web page</label>
			<input type="radio" name="enjoyed" id="notenjoyed" value="no"/>
		</p>*/ -->

	<p>
		<label for="contactmessage">Please leave message below:</label><br>
		<textarea name="contactmessage" rows="7" cols="40"
			id="contactmessage"></textarea><br><br>

				<label for="contactmethod">What is your preferred method of contact?</label><br>
				<select name="contactmethod" id="contactmethod" onchange="showform()">
					<option value="0">Email</option>
					<option value="1">Phone</option>
					<option value="2">Other</option>
					<option value="3">Do not contact</option>
				</select>

				<div id="othercontact" style="display:none">
					<label for="othercontactmethod">Tell me how to contact you</label><br>
					<textarea name="othercontactmethod" rows="4" cols"20" id="othercontactmethod"> </textarea>
					<br><br>
				</div>

				<div id="timetocall" style="display:none">
						When is the best time to call?<br>

						<input type="radio" name="phonetime" id="phonetime" value="no"/>
						<label for="phonetime">Morning</label><br>

						<input type="radio" name="phonetime" id="phonetime" value="no"/>
						<label for="phonetime">Afternoon</label><br>

						<input type="radio" name="phonetime" id="phonetime" value="no"/>
						<label for="phonetime">Evening</label><br>

						<input type="radio" name="phonetime" id="phonetime" value="yes" checked="checked"/>
						<label for="phonetime">Any time</label><br><br>
				</div>

				<script type="text/javascript">
				    function showform() {
				        var selopt = document.getElementById("contactmethod").value;
				        if (selopt == 2) {
				            document.getElementById("othercontact").style.display = "block";
										document.getElementById("timetocall").style.display = "none";
				        }
				        if (selopt == 3) {
				            document.getElementById("othercontact").style.display = "none";
										document.getElementById("timetocall").style.display = "none";
				        }
				        if (selopt == 0) {
				            document.getElementById("othercontact").style.display = "none";
										document.getElementById("timetocall").style.display = "none";
				        }
								if (selopt ==1) {
				            document.getElementById("timetocall").style.display = "block";
										document.getElementById("othercontact").style.display = "none";
				        }
				    }
				</script>

		<label for="pleased">On a scale of 1-10, how pleased were you with your visit to this page?&nbsp;</label>
		<select name="pleased" id="pleased">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option selected="selected">10</option>
		</select>

		<p>
			<input type="checkbox" name="agreestodata" id="agreestodata" checked="checked" />
			<label for="agreestodata">I agree to let you use and/or share any of my data from this site</label>
		</p>

		<p class="buttonarea"><input type="submit" value="Leave a message" name="formsubmit"/></p>

	</fieldset>
	</form>





	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "xakk";

	// Create connection
	$conn = new pdo("mysql:dbname=$dbname;host=$servername", $username, $password);


if (isset($_POST['name'])) {

	$sql = "SELECT * FROM message";
	$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array(':yourname' => 150, ':phone' => 'email'));
}
	?>
</div>

</div>
  </body>
</html>
