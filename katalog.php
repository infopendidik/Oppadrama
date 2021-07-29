<?php

require_once 'config/func.php';
$url = 'https://'.$spatch.'/series/list-mode/';

$urlx = strstr(grab($url), '<body');
$title = ''.$sitename.' - Drama Korea Subtitle Indonesia';
$description = ''.$sitename.' - '.strip_tags($deskrip).'';
$keyword = 'Drama Korea, '.$key;

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
				<div class="releases"><h1><span>List Drama Korea</span></h1></div>
		<div class="page">
				<div class="nav_apb">
			<?php $nav = potong($urlx, '<div class="nav_apb">', '</div>');	
            echo $nav;
            ?>
            </div>
	<div class="soralist">
    <div class="lxx">
<?php
$jadwal = potong($urlx, '<div class="lxx">', '<div id="sidebar">');
$jadwal = str_ireplace('https://'.$spatch.'/', '/drama/', $jadwal);
$jadwal = str_ireplace('col-md-6', 'lis', $jadwal);
$jadwal = str_ireplace('<h3><a href=', '<h3><a class="lisb" href=', $jadwal);
$jadwal = str_ireplace('label btn-github', '', $jadwal);
$jadwal = str_ireplace('<div class=\'col-md-12 text-center\'>', '<div class="lista">', $jadwal);



echo $jadwal;
?>

<?php include 'sidebar.php'; ?>
<?php include 'include/foot.php';?>