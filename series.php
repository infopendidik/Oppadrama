<?php

require_once 'config/func.php';
$q = $_GET['q'];
if($_GET['page']) {
$page = $_GET['page'];
$url = 'https://'.$spatch.'/series/?page='.$page.'&status='.$q.'&order=update/';
} else {
$url = 'https://'.$spatch.'/series/?status='.$q.'&order=update/';
}

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
		<div class="releases latesthome"><h3><?php echo ''.str_ireplace('-',' ',$q).'' ;?></h3></div>
	<div class="listupd normal">
		<div class="excstf">
<?php
$konten = potong($urlx, '<div class="listupd">', '<div class="pagination">');
$kontex = explode('<article class="bs"', $konten);
// menghitung banyaknya data yang terdapat pada array
$count = count($kontex);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$link = potong($kontex[$i], '<a href="https://'.$spatch.'', '"');
$rel	= potong($kontex[$i], 'rel="','"');
$imgx = potong($kontex[$i], '<img src="', '?');
$file_headers = @get_headers($imgx);
if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $img = 'https://'.$_SERVER['HTTP_HOST'].'/assets/img/thumb.jpg';
}
else {
    $img = $imgx;
}
$title = potong($kontex[$i], 'title="', '"');
$type = potong($kontex[$i], '<div class="typez ', '"');
$titlexx = potong($kontex[$i], '<div class="tt tts">', '</div>');
if($epsx = potong($kontex[$i], '<span class="epx">', '</span>'))
{
$eps = $epsx;
}
else 
{
    $eps = 'Ended';
}
$sub = potong($kontex[$i], '<span class="sb ', '"');
$star = potong($kontex[$i], '<div class="label btn-warning">', '</div>');
$time = potong($kontex[$i], '<div class="timeago">', '</div>');
//$hot = potong($stt, '"label btn-primary" href="', '</a>');
if($hots = potong($kontex[$i], '<div class="hotbadge">', '</div>'))
{
$hot = '<div class="hotbadge">'.$hots.'</div>';
}
else 
{
    $hot = '';
}

echo '<article class="bs" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	<div class="bsx">
		<a href="https://'.$batman.'/episode'.$link.'" itemprop="url" title="'.$title.'" class="tip" rel="'.$rel.'">
		<div class="limit">
						'.$hot.'			<div class="typez '.$type.'">'.$type.'</div>
			<div class="ply"><i class="far fa-play-circle"></i></div>
			<div class="bt">
				<span class="epx">'.$eps.'</span>
				<span class="sb '.$sub.'">'.$sub.'</span>			</div>
             <img src="'.$img.'" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" itemprop="image" title="'.$title.'" alt="'.$title.'" width="246" height="350"/>
				
            </div>
         
			<div class="tt">
				'.$titlexx.'
			</div>
            		</a>
	</div>
</article>';


}
?>

</div>
		<div class="hpage">
        <ul class="pagination">
<?php
$paging = potong($urlx, '<div class="hpage">', '</div>');
$paging = str_ireplace('?page=', '/series/'.$q.'/', $paging);
$paging = str_ireplace('&status='.$q.'&order=update', '', $paging);

echo $paging;
?> 
</ul></div>
	 	</div>
		</div>
</div>
	</div>

<?php include 'sidebar.php'; ?>
<?php include 'include/foot.php';?>