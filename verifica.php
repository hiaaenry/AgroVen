<?php

session_start();

if(!isset($_SESSION["auth"]) || !isset($_SESSION["auth"]))
{

echo "<script>window.location='index.php';alert('Você precisa está logado!');</script>";
?>
<script>
	var modal = document.getElementById("id01");

	window.onclick = function(event) {
			modal.style.display = "block";
	};
</script>
<?php
exit;
}

?>