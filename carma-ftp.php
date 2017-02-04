<?php
/* Template Name: CARMA
** Author: Samuel

**/

get_header();
?>
<div class="container">
<br>
<h4>RIR FTP FILES</h4>

<?php

$url = "ftp://ftp.ripe.net";
// connect and login to FTP server
$ftp = ftp_connect("ftp.ripe.net");
if (!$ftp) die('could not connect.');

// login
$login = ftp_login($ftp, "anonymous", "");
if (!$login) die('could not login.');

// enter passive mode
$passsive = ftp_pasv($ftp, true);
if (!$passsive ) die('could not enable passive mode.');

// get listing
$listing = ftp_nlist($ftp, "/pub/stats/ripencc/");

foreach($listing as $value){
    echo "<a href='$url$value'>", substr($value, strrpos($value, '\\') + 1) ,"</a><br>";
}

?>

<br>
<!--<a href="#" class="btn btn-danger">CARMA</a>-->
</div>




<?
get_footer();