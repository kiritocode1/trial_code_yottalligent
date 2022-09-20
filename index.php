<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

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
				<th scope="col">button</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($user_data as $individual_index => $user) {
				foreach ($user as $person_index => $name) {
					echo "<tr><th scope='row'>$individual_index</th><td>$name</td><td class='btn btn-info w-full'>
						<div class='btn-group'>
  <button type='button' class='btn btn-danger dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
    state
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='#'>gujarat</a></li>
    <li><a class='dropdown-item' href='#'>delhi</a></li>
    <li><a class='dropdown-item' href='#'>Maharashtra</a></li>

  </ul>
</div>


<div class='btn-group'>
  <button type='button' class='btn btn-danger dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
    city
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='#'>Mumbai</a></li>
    <li><a class='dropdown-item' href='#'>Pune</a></li>
    <li><a class='dropdown-item' href='#'>Goregaon</a></li>

  </ul>
</div>


<div class='btn-group'>
  <button type='button' class='btn btn-danger dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
    Country
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='#'>India</a></li>
    <li><a class='dropdown-item' href='#'>Dubai</a></li>
    <li><a class='dropdown-item' href='#'>Canada</a></li>

  </ul>
</div>
						</td></tr>";
				}
			}
			?>
		</tbody>
	</table>
</body>

</html>