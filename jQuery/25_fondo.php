<?php 
if (isset($_POST['serie'])) {
	$serie = $_POST['serie'];
	if ($serie == 's1') {
		echo "url(imgs/s1.jpg)";
	}
	else if ($serie == 's2') {
		echo "url(imgs/s2.jpg)";
	}
	else if ($serie == 's3') {
		echo "url(imgs/s3.jpg)";
	}	
	else if ($serie == 's4') {
		echo "url(imgs/s4.jpeg)";
	}	
}
?>