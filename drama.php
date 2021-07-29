<?php

require_once 'config/func.php';
$link = $_GET['q'];
$url = 'https://'.$spatch.'/'.$link.'/';
$urlx = strstr(grab($url), '<body');
$contenitem = potong($urlx, '<div class="bixbox animefull">', '<div class="bixbox trailer">');
$jdl = potong($contenitem, '<h1 class="entry-title" itemprop="name">', '</h1>');
$description = potong($contenitem, '<div class="entry-content" itemprop="description">', '</div>');
$contenitems = potong($contenitem, '<div class="ime">', '</div>');
$gambar = potong($contenitems, 'src="', '"');
$title = ''.$sitename.' - Drama Korea '.$jdl.' Subtitle Indonesia';
$description = ''.$sitename.' - Synopsis '.strip_tags($description).'';
$keyword = ''.$jdl.','.$key;


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
<article id="post-1120" class="post-1120 hentry" itemscope="itemscope" itemtype="http://schema.org/CreativeWorkSeries">
		<div class="ts-breadcrumb bixbox">
		<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/"><span itemprop="name">Home</span></a>
				<meta itemprop="position" content="1">
			</li>
			 › 
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				 <a itemprop="item" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span itemprop="name"><?php echo $jdl; ?></span></a>
				<meta itemprop="position" content="2">
			</li>
					</ol>
	</div>	
	
			<div class="bixbox animefull">
		<div class="bigcover">
			<div class="ime">
				<a href="#/" class="lnk"></a>
				<img width="225" height="318" src="<?php echo $gambar; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />			</div>
			<a href="#/" class="gp"><i class="far fa-play-circle" aria-hidden="true"></i></a>
		</div>
		<div class="bigcontent">
			<div class="thumbook">
			<div class="thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<img width="225" height="318" src="<?php echo $gambar; ?>" class="attachment- size- wp-post-image" alt="" itemprop="image" />			</div>
			
			</div>
			<div class="infox">
				<h1 class="entry-title" itemprop="name"><?php echo $jdl; ?></h1>
								<div class="sosmed">
					<a href="https://www.facebook.com/sharer.php?u=<?php echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
					<a href="https://twitter.com/share?url=<?php echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-twitter" aria-hidden="true"></span></a>
					<a href="whatsapp://send?text=<?php echo $jdl; ?> <?php echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-whatsapp" aria-hidden="true"></span></a>
				</div>
								<div class="ninfo">
				<div class="mindesc">
					<b>Watch full episodes <?php echo $jdl; ?></b>, download <?php echo $jdl; ?> Indonesia subbed, <?php echo $jdl; ?> Indonesia sub, download <?php echo $jdl; ?> Indonesia sub, stream <?php echo $jdl; ?> at <?php echo $sitename; ?> .				</div>
				<span class="alter"><?php echo $judul; ?></span>				<div class="info-content">
						<div class="desc">
					Tonton streaming <b><?php echo $jdl; ?></b> Indonesia Subtitle di <?php echo $jdl; ?> . Kalian juga bisa download gratis <?php echo $jdl; ?> Indo Sub, jangan lupa nonton streaming online berbagai kualitas 720P 360P 240P 480P sesuai koneksi kalian untuk menghemat kuota internet, <?php echo $jdl; ?> di <?php echo $sitename; ?> MP4 MKV hardsub softsub subtitle Indonsia sudah terdapat di dalam video.
		</div>
				</div>
				</div>
			</div>
		</div>
			</div>
			<div class="bixbox synp">
		<div class="releases"><h2>Synopsis <?php echo $jdl; ?></h2></div>
		<div class="entry-content" itemprop="description">
			<?php echo strip_tags($description); ?>	
		</div>
	</div>
				
	
			<div class="bixbox bxcl epcheck">
		<div class="releases"><h2>Watch <?php echo $jdl; ?></h2></div>
				
				<div class="eplister">
		<div class="ephead">
			<div class="eph-num">Episode</div>
			<div class="eph-title">Judul Episode</div>
						<div class="eph-date">Tanggal Rilis</div>
		</div>
		<ul>
		<?php $listeps = potong($urlx, '<div class="eplister">', '</ul>');
//$listeps2 =  potong($listeps, '<div class="episodelist list-group">', '</div>');
$ep = explode('<li', $listeps);
// menghitung banyaknya data yang terdapat pada array
$count = count($ep);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$link = potong($ep [$i], 'href="', '"');
$link = str_ireplace('https://'.$spatch.'', '/episode', $link);
$title = potong($ep [$i], '<div class="epl-title">', '</div>');
$dat = potong($ep [$i], '<div class="epl-date">', '</div>');
$ind = potong($ep [$i], 'index="', '"');
$epn = potong($ep [$i], '<div class="epl-num">', '</div>');
echo '<li data-index="'.$ind.'">
    <a href="'.$link.'">
        <div class="epl-num">'.$epn.'</div>
        <div class="epl-title">'.$title.'</div>
                <div class="epl-date">'.$dat.'</div>
    </a>
</li>
';

}   ?>
				</ul>
		</div>
	</div>
	<script>
		if(jQuery('.epcheck li').length < 1) jQuery('.epcheck').hide();
	</script>
	
	
	<div class="bixbox">
		<div class="releases"><h3><span>Comment</span></h3></div>
		<div class="cmt commentx">
									
<div id="disqus_thread"></div>
					 </div>
                       <script>
     var disqus_config = function () {
        this.page.url = '<?php echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>';
     };
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = 'https://animeindo-site-1.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	</div>

			
			</article>
	</div>


<?php include 'sidebar.php'; ?>
<?php include 'include/foot.php';?>
