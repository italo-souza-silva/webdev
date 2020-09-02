<?php
	$link = mysqli_connect("shareddb-v.hosting.stackcp.net","diary-DB-313437cdb6","313437cdb6","diary-DB-313437cdb6"); //this will be changed of course!
		if (mysqli_connect_error()) {
			die ("Database Connection Error");
		}
?>