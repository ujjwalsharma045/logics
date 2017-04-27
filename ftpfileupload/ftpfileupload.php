<?php
$ftp =  new stdClass();

$ftp->host = 'ftp.dnsweepstakes.com';
$ftp->user = 'dailynews';
$ftp->pass = 'NYDaily12';
$ftp->port = '21';

$local_filepath = __DIR__."/a.txt";
$ftp_filepath = "/a.txt";

$conn_id = ftp_connect($ftp->host , $ftp->port) or die('can\'t connect to ftp');
ftp_login($conn_id , $ftp->user , $ftp->pass) or die('can\'t authenticate to ftp');
$isuploaded = ftp_put($conn_id , $ftp_filepath , $local_filepath , FTP_ASCII) or die('can\'t upload file to ftp');

echo ($isuploaded)? "uploaded":"could not uploaded"; 

ftp_close($conn_id);
?>