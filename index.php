<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
$selected = "lol";
if (isset($_POST['submit'])) {
	if (!empty($_POST)) {
		$selected = $_POST;
	} else {
		$selected  = "gg re";
		die;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>YottaIntelligent Pvt Limited </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<a href="logout.php">Logout</a>
	<h1>This is the Home page </h1>
	<br>

	<table class="table table-info">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Location</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($user_data as $individual_index => $user) {
				foreach ($user as $person_index => $name) {
					echo "<tr><th scope='row'>$individual_index</th><td>$name</td><td class='btn btn-info w-full'>
						
	<form action='' method='post'>
	City : 
    <select name='$name city'>
        <option value=' disabled selected>City</option>
        <option value='Pune'>Pune</option>
        <option value='Mumbai'>Mumbai</option>
        <option value='Abu Dhabi'>Abu Dhabi</option>
        <option value='Kansas'>Kansas</option>
        <option value='Madras'>Madras</option>
    </select>
	State :
	    <select name='$name state'>
        <option value=' disabled selected>State</option>
        <option value='Maharashtra'>Maharashtra</option>
        <option value='Delhi'>Delhi</option>
        <option value='Bengal'>Bengal</option>
        <option value='Delhi'>Delhi</option>
        <option value='Rajhasthan'>Rajhasthan</option>
    </select>
	Country : 
		    <select name='$name country'>
        <option value=' disabled selected>Country</option>
        <option value='Dubai'>Dubai</option>
        <option value='India'>India</option>
        <option value='US'>US</option>

    </select>
    <input type='submit' name='$name submit' value='submit'>
</form>

						</td></tr>";
				}
			}
			?>
		</tbody>
	</table>




	<h1><?php print_r($_POST); ?></h1>


</body>

</html>