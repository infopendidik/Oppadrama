<div id="sidebar">
<div id="mainepisode">

  <?php 
$stat = potong($urlx, '<div class="det">', '</div>');
  $statlinks = potong($stat, '<h3>', '</h3>');
  $statlink = potong($statlinks, 'href="https://'.$spatch.'/', '"');
   $stattitle = potong($statlinks, '">', '</a>');
  $statfl = potong($stat, '<span>', '</span>');
  ?>
							<div id="singlepisode">
					<div class="headlist">
						<div class="thumb">
							<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].''; ?>/drama/<?php echo $urls; ?>"><img src="<?php echo $img; ?>?h=150" class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"/></a>
						</div>
						<div class="det">
							<h3><a href="/drama/<?php echo $statlink; ?>"><?php echo $stattitle; ?></a></h3>
							<span><?php echo $statfl; ?></span>
						</div>
					</div>
					<div class="episodelist">
						<ul>
                      
                       
<?php 
$urleps = potong($urlx, '<div id="singlepisode">', '<script>');
$ep = explode('<li ', $urleps);
// menghitung banyaknya data yang terdapat pada array
$count = count($ep);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$link = potong($ep [$i], 'href="https://'.$spatch.'/', '"');
$title = potong($ep [$i], '<h4>', '</h4>');
$imgs = potong($ep [$i], 'src="', '"');
$dad = potong($ep [$i], '<span>', '</span>');
echo '<li data-id="'.$i.'">
									<a href="/episode/'.$link.'" itemprop="url" title="'.$title.'">
										<div class="thumbnel">
											<img src="'.$imgs.'?resize=150,150" class="ts-post-image wp-post-image attachment-thumbnail size-thumbnail" loading="lazy" itemprop="image" title="'.$title.'"/>										</div>
										<div class="playinfo">
											<h4>'.$title.'</h4>
											<span>'.$dad.' </span>
										</div>
									</a>
								</li>';



}   ?>
                        
                        
                                
                                </ul>
					</div>
				</div>
								<script>
					var tsMediaSelectedId = 2718;
					var tsMediaEpNow = "1";
					tsMedia(tsmmedia);
					tsMediaPickList();
				</script>
			</div>


<div class="section">			<div class="textwidget"><p><center><?php include 'ads/side.php';?><br />
</center></p>
</div>
		</div>
		<div class="section"><div class="releases"><h3>Ongoing</h3></div><div class='ongoingseries'><ul>
<?php
$onlist = potong($urlx, '<div class=\'ongoingseries\'>', '</div>');
$kontexlist = explode('<li>', $onlist);
// menghitung banyaknya data yang terdapat pada array
$count = count($kontexlist);
$count =  $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$linklist = potong($kontexlist[$i], '<a href="https://'.$spatch.'', '"');
$titlelist = potong($kontexlist[$i], 'title="', '"');
$jdl = potong($kontexlist[$i], '<span class="l">', '</span>');
$epz = potong($kontexlist[$i], '<span class="r">', '</span>');
echo '<li>
					<a href="https://'.$batman.'/episode'.$linklist.'" title="'.$titlelist.'">
						<span class="l">'.$jdl.'</span>
						<span class="r">'.$epz.'</span>					</a>
				</li>';
 }
?>
</ul>
</div>
		</div>
 
<div class="section"><div class="releases"><h3>Terpopuler</h3></div><div class='serieslist pop'><ul>
  <?php
$serieslistpop = potong($urlx, '<div class=\'serieslist pop\'><ul>', '</ul>');
  $serieslistpop =str_ireplace('https://'.$spatch.'/genres','/genres', $serieslistpop);
$serieslistpop =str_ireplace('https://'.$spatch.'','/drama', $serieslistpop);
echo $serieslistpop;  
?>  
</ul></div></div>  
<div class="section"><div class="releases"><h3>Genre</h3></div><ul class='genre'>                  
 <?php
$seriesgenre = potong($urlx, '<ul class=\'genre\'>', '</ul>');
$seriesgenre =str_ireplace('https://'.$spatch.'','', $seriesgenre);
echo $seriesgenre;  
?>  
 
</ul></div></div>			
</div><div class="clear"></div>
</div>
</div>