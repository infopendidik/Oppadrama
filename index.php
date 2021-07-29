<?php

require_once 'config/func.php';


if($_GET['page']) {
$page = $_GET['page'];
$url = 'https://'.$spatch.'/page/'.$page.'/';
} else {
$url = 'https://'.$spatch.'/';
}

$urlx = strstr(grab($url), '<!DOCTYPE html>');
$title = ''.$sitename.' - '.$judulsite.'';
$description = ''.$sitename.' - '.$deskrip.'';
$keyword = $key;

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
 <div class="slidtop">
		<div class="loop owl-carousel full">
 <?php
$slidex = potong($urlx, '<div class="slidtop">', '<div class="bixbox">');
$slide = explode('<div class="slide-item full">', $slidex);
// menghitung banyaknya data yang terdapat pada array
$count = count($slide);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$rating = potong($slide[$i], '<span class="fa fa-star" aria-hidden="true"><span>', '</span></span>');
$imgs = potong($slide[$i], '<div class="slide-bg">', '</div>');
$imge = potong($slide[$i], '<img src="', '?resize');
$infox = potong($slide[$i], '<div class="info-left">', '<!--.title-->');
$links = potong($infox, '<span class="ellipsis">', '</span>');
$link = potong($links, 'href="https://'.$spatch.'', '"');
$jdl = potong($links, '">', '</');
$years = potong($infox, '<span class="release-year">', '</span>');
$kate = potong($slide[$i], '<div class="extra-category">', '</div>');
$kate = str_ireplace('https://'.$spatch.'','', $kate);
$ringkasan = potong($slide[$i], '<p class="story"><p>', '</p>');
$cast = potong($slide[$i], '<div class="cast">', '</div>');
        echo '<div class="slide-item full">
				<div class="slide-bg">
					<img src="'.$imge.'?resize=145,205" class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" itemprop="image" title="'.$jdl.'" alt="'.$jdl.'" width="145" height="205"/>				</div>
				<div class="slide-shadow"></div>
				<div class="slide-content">
					<div class="poster" style="position:relative">
						<a href="/drama'.$link.'">
							<img src="'.$imge.'?resize=145,205" class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" itemprop="image" title="'.$jdl.'" alt="'.$jdl.'" width="145" height="205"/>						</a>
					</div>
					<div class="info-left">
						<div class="title">
							<div class="rating">
								<div class="vote">
									<div class="site-vote">
										<span class="fa fa-star" aria-hidden="true"><span>'.$rating.'</span></span>									</div>
								</div>
							</div>
							<span class="ellipsis"><a href="'.$link.'">'.$jdl.'</a></span>
							<span class="release-year">'.$years.'</span>

						</div><!--.title-->
						<div class="extras">
							<div class="extra-category">'.$kate.'</div>
						</div><!--.extras-->
						<div class="excerpt">
							<span class="title">Ringkasan</span><p class="story"><p>'.$ringkasan.'</p>
</p>
						</div>
						<div class="cast">
							'.$cast.'
						</div><!--.cast-->
					</div><!--.info-left-->
				</div><!--.slide-content-->
			</div><!--.slide-item-->';
            }
            
            ?>
				</div>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.loop').owlCarousel({
			    center: true,
			    loop:true,
			    nav:true,
			    //animateOut: 'fadeOut',
			    navText: ["<span class='prev icon-angle-left'></span>","<span class='next icon-angle-right'></span>"],
			    margin:0,
			    autoplay: true,
				autoplayTimeout:5000,
		    		autoplayHoverPause:true,
			    responsive:{
			        0:{
			            items:1,
			            stagePadding: 0,
			        }
			    }
			});
		});
		</script>
		<!--themesia cache start-->							
   <?php
$tredings = potong($urlx, '<div class="trending">', '<!--themesia');
$linktredings = potong($tredings, '<a href="https://'.$spatch.'', '">');
   $bghovertredings = potong($tredings, '<div class="bghover">', '</div>');
   $imgxatredings = potong($tredings, '<div class="imgxb" style="background-image: url(\'', '\')');
   ?>
   <div class="trending">
					<div class="tdb">
						<a href="/drama<?php echo $linktredings;?>">
							<div class="crown"></div>
							<div class="textbg blxc">
								<div class="bghover">
									<?php echo $bghovertredings;?>
								</div>
							</div>
							<div class="imgxa">
								<div class="imgxb" style="background-image: url('<?php echo $imgxatredings;?>');"></div>
							</div>
						</a>
					</div>
				</div>
					<!--themesia cache end 2021-06-10 00:59:11 0.00554-->			</div>
	<!--themesia cache end 2021-06-09 19:57:57 0.04219-->	
    
<div class="bixbox">
		<div class="releases latesthome"><h3>Latest Release</h3></div>
	<div class="listupd normal">
		<div class="excstf">
<?php
$konten = potong($urlx, '<div class="listupd normal">', '<div class="hpage">');
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
$titlexx = potong($kontex[$i], '<div class="tt">', '</div>');
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
        
<?php
$paging = potong($urlx, '<div class="hpage">', '</div>');
//$paging = str_ireplace('https://'.$spatch.'/page/', '?page=', $paging);
//$paging = str_ireplace('https://'.$spatch1.'/page/', '?page=', $paging);
//$paging = str_ireplace('https://'.$spatch2.'/page/', '?page=', $paging);
$paging = str_ireplace('https://'.$spatch.'/', '/', $paging);
//$paging = str_ireplace('https://'.$spatch1.'/', '/', $paging);
//$paging = str_ireplace('https://'.$spatch2.'/', '/', $paging);
echo $paging;
?> 

</div>
	 	</div>
		</div>
<div class="kln"><?php include 'ads/tengah.php';?></div><br/>

<div class="bixbox">
	<div class="releases">
		<h3>Rekomendasi</h3>
		<a class="vl" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/archive/genre/';?><?php echo $idgenrexx;?>">View All</a>	</div>
	<div class="listupd">
	<div class="excstf">
  <?php

$kontenz = potong($urlx, '<div class="releases"><h3>Rekomendasi</h3></div>', '<div id="sidebar">');
$kontexx = explode('<article', $kontenz);
// menghitung banyaknya data yang terdapat pada array
$count = count($kontexx);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($j=1; $j<=5; $j++) {
$link = potong($kontexx[$j], '<a href="https://'.$spatch.'', '"');
$rel	= potong($kontexx[$j], 'rel="','"');
$img = potong($kontexx[$j], '<img src="', '?');

$title = potong($kontexx[$j], 'title="', '"');
$type = potong($kontexx[$j], '<div class="typez ', '"');
$titlexx = potong($kontexx[$j], '<div class="tt">', '</div>');
//$eps = potong($kontex[$i], '<div class="label btn-danger">', '</div>');
if($epsx = potong($kontexx[$j], '<span class="epx">', '</span>'))
{
$eps = $epsx;
}
else 
{
    $eps = 'Ended';
}
$sub = potong($kontexx[$j], '<span class="sb ', '"');
$star = potong($kontexx[$j], '<div class="label btn-warning">', '</div>');
$time = potong($kontexx[$j], '<div class="timeago">', '</div>');
if($hots = potong($kontexx[$j], '<div class="hotbadge">', '</div>'))
{
$hot = '<div class="hotbadge">'.$hots.'</div>';
}
else 
{
    $hot = '';
}
echo '<article class="bs" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	<div class="bsx">
		<a href="https://'.$batman.''.$link.'" itemprop="url" title="'.$title.'" class="tip" rel="'.$rel.'">
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
 
</div></div></div>
</div>
</div>
	
<?php include 'sidebar.php'; ?>
<?php include 'include/foot.php';?>