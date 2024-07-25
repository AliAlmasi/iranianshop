<?php
$link = mysqli_connect("localhost", "root", "", "iranianshop");

if (mysqli_connect_errno()) {
	exit("<span class='error'>خطایی با شرح زیر رخ داد: <br>" . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</span>");
}
