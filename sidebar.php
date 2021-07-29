<div id="sidebar">
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