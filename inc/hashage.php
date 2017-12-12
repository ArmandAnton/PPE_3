<?php
function hashage($password_log)
{
	$hash = hash('sha256', $password_log);
	return hash('sha256', 10 . $hash);
}
?>