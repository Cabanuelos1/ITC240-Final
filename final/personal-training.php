<?php include 'includes/header.php';?>

<div id="text">

<?php

$myEmail = "cabanuelos1@crimson.ua.edu"; //change to the email where you want to send the info 
$mySubject = "Site Feedback from My Site"; //change to your subject line
$myReturnEmail = "noreply@example.com"; //always use "noreply" and the server you are working on here!
//End configuration area---
?>

<script type="text/javascript">
function checkForm(form){
	if(notEmpty(form.FirstName)){
		if(notEmpty(form.LastName)){
			return true;
		}
	}
	return false;
}
function notEmpty(elem){
	var str = elem.value;
	if(str.length == 0){
		return false;
	}else{
		return true;
	}
}
</script>


<?php
//isset determines if var has valid contents
if (isset($_POST['Comments'])) 
{//if var is set, show what it contains
	//clean data, load variables
	if(isset($_POST['FirstName'])){$myFirst = strip_tags(trim($_POST['FirstName']));}else{$myFirst="";}
	if(isset($_POST['LastName'])){$myLast = strip_tags(trim($_POST['LastName']));}else{$myLast="";}
	if(isset($_POST['Comments'])){$myComments = strip_tags(trim($_POST['Comments']));}else{$myComments="";}
	if(isset($_POST['Gender'])){$myGender = strip_tags(trim($_POST['Gender']));}else{$myGender="";}
	if(isset($_POST['Dropdown'])){$myDropdown = strip_tags(trim($_POST['Dropdown']));}else{$myDropdown="";}
	if(isset($_POST['Experience'])){$myExperience = strip_tags(trim($_POST['Experience']));}else{$myExperience="";}

	
	//build text for body of email
	$myText = "The user has entered their name as follows:\n\n"; //double newlines 
	$myText .= $myFirst . " " . $myLast . "\n";
	
	$myText .= "The user has entered the following comments:\n\n";
	$myText .= $myComments . "\n";
	
	$myText .= "The user has entered the following gender:\n\n";
	$myText .= $myGender . "\n";
	
	$myText .= "The user has entered the following dropdown:\n\n";
	$myText .= $myDropdown . "\n";
	
	$myText .= "The user has entered the following dropdown:\n\n";
	$myText .= $Experience . "\n";
	
	//finish up subject line with date/name etc:
	$mySubject .= " sent by " . $myFirst . " " . $myLast . " " . date("m/d/y, G:i");
	
	//build & send email
	mail($myEmail,$mySubject,$myText,$myReturnEmail);

	//put link on page to reset form
	print "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reset page</a>";

}else{ //show form - switch to HTML!
?>



<form name="example" onSubmit="return checkForm(this)" action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
		FirstName: <input type="text" name="FirstName" /><br />
		LastName: <input type="text" name="LastName" /><br />
		Comments: <textarea name="Comments" /></textarea><br />
		Gender: <br /><input type="radio" name="Gender" value="Male" />Male<br />
				<input type="radio" name="Gender" value="Female" />Female<br />
		Interested in: <select name="Dropdown">
						<option value="trainingprogram">Training Program</option>
						<option value="nutritionplan">Nutrition Plan</option>
						</select>
						<br />
		Experience: <br /><input type="checkbox" value="Running" name="Experience"/>Running<br />
					<input type="checkbox" value="Walking" name="Experience"/>Walking<br />
					<input type="checkbox" value="Weightlifting" name="Experience"/>Weightlifting<br />
					<input type="checkbox" value="Sports" name="Experience"/>Sports<br />
					<input type="checkbox" value="Nothing" name="Experience"/>Nothing<br />
		<input type="submit" />
	</form>
<?php
}
?>

</div>

<?php include 'includes/footer.php';?>
