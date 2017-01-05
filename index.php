<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<meta charset="UTF-8">
	

</head>

<body>

<pre>
<?php
# Read CSV to Array
$csv = array_map('str_getcsv', file('portfolio.csv'));

# Uncomment to print CSV array (for troubleshooting)
# print_r($csv);

# Get Number of Projects
$NumProjects = count($csv);
$NumProjects--;

while($NumProjects > -1):
?>
	<a href="<?php echo($csv[$NumProjects][1]); ?>">


	<div class="proj" style="background:url(img/<?php echo($csv[$NumProjects][2]); ?>
	); background-size: cover;">
		<h2><?php echo($csv[$NumProjects][0]); ?></h2><br />
		<p><?php echo($csv[$NumProjects][3]); ?></p>

	</div></a>


<?php
$NumProjects--;
endwhile;
?>


</pre>
</body>
