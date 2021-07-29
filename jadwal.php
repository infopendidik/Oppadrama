<?php

require_once 'config/func.php';
$url = 'https://'.$spatch.'/jadwal/';
$urlx = strstr(grab($url), '<body');
$title = 'AnimeIndo - Nonton Streaming Anime Sub Indo';
$description = 'Nonton streaming anime subtitle indonesia Hanya di AnimeIndo.Pw';
$keyword = 'Nonton streaming anime subtitle indonesia , Nonton online Anime sub indo, anime sub indo, animeindo, download anime sub indo, download movie anime sub indo, download anime batch sub indo';

?>
<?php include 'include/head.php';?>

<div id="content">
	<div class="wrapper">
		 <?php if (empty($noticegeneral)){
    /* String is empty */
} else{
    /* Not empty */
		echo '<div class="announ">'.$noticegeneral.'</div>';
        }
        ?>
<div class="postbody">
	<div class="bixbox">
				<div class="releases"><h1><span>Jadwal Tayang Anime</span></h1></div>

					
<?php
$jadwal = potong($urlx, '<div class="releases"><h1><span>Jadwal</span></h1></div>', '<script>');
$jadwal = str_ireplace('<div class=\'col-md-12 text-center\'><div class="alert alert-danger">','<div class="listupd normal"><div class="lista">', $jadwal);
$jadwal = str_ireplace('https://'.$spatch.'/series', '/drama', $jadwal);
echo $jadwal;
?>


	<div class="pagination">
			</div>
	
		</div>


<?php include 'sidebar.php'; ?>
<?php include 'include/foot.php';?>