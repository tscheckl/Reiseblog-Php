<?php
	if (isset($_POST['submit'])) {
		$name= $_POST['name'];
		$kommentar = $_POST['comment'];
		$artikelId = $_POST['id'];
		$date = date("Y-M-D");

		if ($name != "" || $kommentar != "") {
				
			$name = htmlspecialchars($name);
			$name = htmlentities($name);
			$kommentar = htmlspecialchars($kommentar);
			$kommentar = htmlentities($kommentar);

			$query = mysql_query("INSET INTO comment VALUES('', '{$artikelId}', '{$name}', '', '{$kommentar}', '{$date}')");
			$hosts = $_SERVER('HTTP_HOST');
			$uris = rtrim(dirname(html/blogumgestellt), '/\\');
			$extras = 'artikel.php?id={$artikelId}';
			header("Location: http://$host$uris/$extras");
			exit;
		}	
		else{
			echo "Bitte füllen sie alle Felder aus";
		}
	}
?>