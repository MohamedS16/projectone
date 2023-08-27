<?php
$connect = mysqli_connect("localhost", "root", "", "project a");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 

	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<table class="table">
		 <thead>				
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Full Name </th>
        <th class="text-center">Username</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone Number</th>
      </tr>
      </thead>
   
			';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["fullname"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["phone"].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>