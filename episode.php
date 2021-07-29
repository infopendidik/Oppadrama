<?php

require_once 'config/func.php';
$link = $_GET['link'];
$url = 'https://'.$spatch.'/'.$link.'/';

$urlx = strstr(grab($url), '<body');
$description = potong($urlx, '<div class="desc mindes">', '</div>');
$Judulssss = potong($urlx, '<h1 class="entry-title" itemprop="name">', '</h1>');
$Judulssss = str_ireplace('- Nanime','', $Judulssss);
$Judulssss = str_ireplace('- Nonton Anime','', $Judulssss);
$Judulssss = str_ireplace('Nonton Anime ','', $Judulssss);
$Judulssss = str_ireplace('&amp; download ','', $Judulssss);
$num_char = 200;
$descr = potong($urlx, '<div class="attachment-text">', '</div>');
$descr = str_ireplace('<font class="text-primary">','', $descr);
$descr = str_ireplace('</font><br>','', $descr);
$descr = str_ireplace('"','', $descr);
$cut_text = substr($descr, 0, $num_char);
$ogimagex = potong($urlx, '<img class="attachment-img poster" src="', '"');
$file_headers = @get_headers($ogimagex);
if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $gambar = 'https://'.$_SERVER['HTTP_HOST'].'/assets/img/thumb.jpg';
}
else {
    $gambar = $ogimagex;
}
$contenitemss = potong($contenitem, 'href="', '"');
$ogimage	= $gambar;
$title = ''.$sitename.' - Drama Korea '.$Judulssss.' Subtitle Indonesia';
$description = ''.$sitename.' - Synopsis '.$Judulssss.' '.strip_tags($description).'';
$keyword = ''.$Judulssss.', '.$key;

?>
	
<?php include 'include/head.php';?>

    
<?php 
$stream = potong($urlx, '<div class="player-embed" id="pembed">', '</div>');
$server = potong($stream , '<select id="change-server" class="form-control">', '</select>');
$stream = potong($urlx, '<div class="player-embed" id="pembed">', '</div>');
$urls = potong($urlx, '<div class="nvs nvsc"><a href=\'https://'.$spatch.'/', '\'');
$urls = str_ireplace('/', '', $urls);
$years = potong($urlx, '<span class="updated">', '</span>');


  ?>
<div id="content">
	<div class="wrapper">
		<div class="pd-expand"></div>
<div class="postbody">
<article id="post-2727" class="post-2727 hentry" itemscope="itemscope" itemtype="http://schema.org/Episode">
		<div class="ts-breadcrumb bixbox">
		<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
        
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].''; ?>"><span itemprop="name">Home</span></a>
				<meta itemprop="position" content="1">
			</li>
			 › 
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				 <a itemprop="item" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].''; ?>/drama/<?php echo $urls; ?>"><span itemprop="name"><?php echo ''.str_ireplace('-',' ',$urls).''; ?></span></a>
				<meta itemprop="position" content="2">
			</li>
			 › 
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				 <a itemprop="item" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span itemprop="name"><?php echo $Judulssss; ?></span></a>
				<meta itemprop="position" content="3">
			</li>
					</ol>
	</div>	
	<div class="megavid">
<div class="mvelement">
<div class="item meta">
					<div class="tb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img width="225" height="350" src="<?php echo $ogimage; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />					
					<meta itemprop="url" content="<?php echo $ogimage; ?>">
					<meta itemprop="width" content="190">
					<meta itemprop="height" content="260">
					</div>
					<div class="lm">
						<div class="title-section">
							<h1 class="entry-title" itemprop="name"><?php echo $Judulssss; ?></h1>
						</div>
						<meta itemprop="episodeNumber" content="969">
						
						
					<span class="year">
														Released on <span class="updated">April 11, 2021</span> · 
						
							Posted by <span class="vcard author"><b class="fn"><a href="#"><?php echo $author; ?> </a></b></span> · series <a href="/drama/<?php echo $urls; ?>"><?php echo ''.str_ireplace('-',' ',$urls).'';?></a>
						</span>
					</div>
								<div class="sosmed">
					<a href="https://www.facebook.com/sharer.php?u=<?php echo 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
					<a href="https://twitter.com/share?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-twitter" aria-hidden="true"></span></a>
					<a href="whatsapp://send?text=<?php echo $Judulssss; ?> <?php echo 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>"><span class="fab fa-whatsapp" aria-hidden="true"></span></a>
				</div>
				</div>
                <?php if (empty($noticeplayer)){
    /* String is empty */
} else{
    /* Not empty */
		echo '<div class="announ">'.$noticeplayer.'</div>';
        }
        ?>
	
		<div class="kln"><?php include 'ads/atasplayer.php'; ?></div><br/>	
		<div class="video-content">
										<div id="overplay">
						<div class="chain" align="center"><a href="#" id="close-teaser" onclick="document.getElementById('overplay').style.display = 'none';" style="cursor:pointer;"><img src="https://3.bp.blogspot.com/-ZZSacDHLWlM/VhvlKTMjbLI/AAAAAAAAF2M/UDzU4rrvcaI/s1600/btn_close.gif"/></a>
						<?php include 'ads/player.php';?>
						</div>
					</div>
					
						<div id="embed_holder" class="lowvid"><div class="player-embed" id="pembed"><?php echo $stream; ?></div></div>
				</div>



<div class="item video-nav">
					<div class="mobius">
						<select class="mirror" name="mirror" onchange="loadMi(this);">
		<option value="">Select Video Server</option>
<?php 
$server =  potong($urlx, '<option value="">Pilih Server Video</option>', '</select> ');
$serverxz = explode('<option', $server);
// menghitung banyaknya data yang terdapat pada array
$count = count($serverxz);
$count = $count-1;
function encodeurl($id) { return rtrim(base64_encode($id)); }

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$link = potong($serverxz [$i], 'value="', '"');
$title = potong($serverxz [$i], '>', '</');

echo '<option value="'.$link.'" data-index="'.$i.'">'.$title.'		</option>';

}   ?>          
                        
				
        </select>
						<div class="iconx">
						<div class="icol expand"><i class="fa fa-expand" aria-hidden="true"></i> <span>Expand</span></div>
						<div class="icol light"><i class="far fa-lightbulb"></i> <span>Turn Off Light</span></div>
											</div>
					</div>
				</div>

<div class="naveps bignav">

<?php 


$naveps = potong($urlx, '<div class="naveps bignav">','</div>
</div>');
$naveps = str_ireplace('<div class="nvs nvsc"><a href=\'https://'.$spatch.'','<div class="nvs nvsc"><a href=\'/drama', $naveps);
$naveps = str_ireplace('https://'.$spatch.'','/episode', $naveps);
echo $naveps;
?>
                          
                          
</div>
</div>
<div class="kln">
<center>
<?php include 'ads/bawahplayer.php';?>
</center></div><br/>
	<div id="mobilepisode"></div>
	<div class="entry-content">
	<div class="bixbox infx">
		<p>Download <b><?php echo $Judulssss; ?></b>, Watch <b><?php echo $Judulssss; ?></b>, don't forget to click on the like and share button. Anime <b><?php echo $Judulssss; ?></b> always updated at<?php echo $sitename; ?>. Don't forget to watch other anime updates. </p>
	</div>

		
			<div class="bixbox">
			<div class="releases">
				<h3>Download <?php echo $Judulssss; ?></h3>
			</div>
			<div class="mctnx">
								<div class="soraddlx soradlg">
					
												<div class="dlbox">
				<ul>
					<li class="head"><span class="q">
						<b>Server</b>
						</span><span class="w">Kualitas</span>
						<span class="e">Links</span></li>
<?php $listeps = potong($urlx, '<div class="dlbox">', '</ul>');
//$listeps2 =  potong($listeps, '<div class="episodelist list-group">', '</div>');
$ep = explode('<li>', $listeps);
// menghitung banyaknya data yang terdapat pada array
$count = count($ep);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {
$link = potong($ep [$i], '<span class="e">', '</span>');
$title = potong($ep [$i], '"16" />', '</b>');
$imgserver = potong($ep [$i], 'img src=" ', '"');
$quality = potong($ep [$i], '<span class="w">', '</span>');


echo '<li>
						<span class="q"><b><img src="'.$imgserver.'" width="16" height="16" /> '.$title.'</b></span><span class="w">'.$quality.'</span><span class="e">'.$link.'</span>
					</li> 
';

}   ?>
														
													</ul>

										</div>
							</div>
		</div>
			</div>
<?php
$contenitem = potong($urlx, '<div class="single-info bixbox">', '<div class="bixbox">');
$img = potong($contenitem, '<img src="', '"');
$rating = potong($contenitem, '<div class="rtb"><span style="width:', '%');
      $infoc = potong($contenitem, '<div class="spe">', '</div>');
      $infoc = str_ireplace('https://'.$spatch.'','',$infoc);
      $genrex = potong($contenitem, '<div class="genxed">', '</div>');
      $genrex = str_ireplace('https://'.$spatch.'','',$genrex);
      

      
?>
                                                                    
<div class="single-info bixbox">
	<div class="thumb">
		<img width="225" height="350" src="<?php echo $img; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />	</div>
	<div class="infox">
				<div class="infolimit">
					<h2 itemprop="partOfSeries"><?php echo ''.str_ireplace('-',' ',$urls).'';?></h2>
					<span class="alter"><?php echo ''.str_ireplace('-',' ',$urls).'';?></span>				</div>
								<div class="rating">
										<strong>Rating <?php echo $rate; ?></strong>
					<div class="rating-prc">
						<div class="rtp">
							<div class="rtb"><span style="width:<?php echo $rating; ?>%"></span></div>
						</div>
					</div>
									</div>
				<div class="info-content">
				<div class="spe">
					<?php echo $infoc;?>																												
                        </div>
				<div class="genxed">

<?php echo $genrex;?>
                                   </div>									
                                   <div class="desc mindes">
						<?php echo strip_tags($description); ?>					<span class="colap"></span>
					</div>
								</div>
			</div>
</div>
                                                                     
<div class="bixbox">
	<div class="releases"><h3><span>Comment</span></h3></div>
	<div class="cmt commentx">
			
<div id="disqus_thread"></div>
			 </div>
              <script>
     var disqus_config = function () {
        this.page.url = '<?php echo 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].''; ?>';
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
	
	<meta itemprop="author" content="animeindo">
	<meta itemprop="datePublished" content="2021-04-04T16:22:32+00:00">
	<meta itemprop="dateModified" content="2021-04-04T16:22:32+00:00">
	<span style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
		<span style="display: none;" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
			<meta itemprop="url" content="https://animeindo.site/wp-content/uploads/2020/10/logo2.png">
		</span>
		<meta itemprop="name" content="Animeindo.Site">
	</span>
	</article>
</div>
<script>tsUpdateView(2458);</script>
<script type="application/javascript">
(function() {

    //version 1.0.0

    var adConfig = {
    "ads_host": "a.exdynsrv.com",
    "syndication_host": "syndication.exdynsrv.com",
    "idzone": 4048130,
    "popup_fallback": false,
    "popup_force": true,
    "chrome_enabled": true,
    "new_tab": true,
    "frequency_period": 5,
    "frequency_count": 1,
    "trigger_method": 2,
    "trigger_class": "chain, overplay, video-content, iframe",
    "only_inline": false,
    "t_venor": false
};

    if(!window.document.querySelectorAll){document.querySelectorAll=document.body.querySelectorAll=Object.querySelectorAll=function querySelectorAllPolyfill(r,c,i,j,a){var d=document,s=d.createStyleSheet();a=d.all;c=[];r=r.replace(/\[for\b/gi,"[htmlFor").split(",");for(i=r.length;i--;){s.addRule(r[i],"k:v");for(j=a.length;j--;){a[j].currentStyle.k&&c.push(a[j])}s.removeRule(0)}return c}}var popMagic={version:"1.0.0",cookie_name:"",url:"",config:{},open_count:0,top:null,browser:null,venor_loaded:false,venor:false,configTpl:{ads_host:"",syndication_host:"",idzone:"",frequency_period:720,frequency_count:1,trigger_method:1,trigger_class:"",popup_force:false,popup_fallback:false,chrome_enabled:true,new_tab:false,cat:"",tags:"",el:"",sub:"",sub2:"",sub3:"",only_inline:false,t_venor:false},init:function(config){if(typeof config.idzone==="undefined"||!config.idzone){return}for(var key in this.configTpl){if(!this.configTpl.hasOwnProperty(key)){continue}if(typeof config[key]!=="undefined"){this.config[key]=config[key]}else{this.config[key]=this.configTpl[key]}}if(typeof this.config.idzone==="undefined"||this.config.idzone===""){return}if(this.config.only_inline!==true){this.loadHosted()}this.addEventToElement(window,"load",this.preparePop)},getCountFromCookie:function(){var shownCookie=popMagic.getCookie(popMagic.cookie_name);var ctr=typeof shownCookie==="undefined"?0:parseInt(shownCookie);if(isNaN(ctr)){ctr=0}return ctr},shouldShow:function(){if(popMagic.open_count>=popMagic.config.frequency_count){return false}var ctr=popMagic.getCountFromCookie();popMagic.open_count=ctr;return!(ctr>=popMagic.config.frequency_count)},venorShouldShow:function(){return!popMagic.config.t_venor||popMagic.venor_loaded&&popMagic.venor==="0"},setAsOpened:function(){var new_ctr=1;if(popMagic.open_count!==0){new_ctr=popMagic.open_count+1}else{new_ctr=popMagic.getCountFromCookie()+1}popMagic.setCookie(popMagic.cookie_name,new_ctr,popMagic.config.frequency_period);if(new_ctr>=popMagic.config.frequency_count){popMagic.setCookie("nb-no-req-"+popMagic.config.idzone,true,popMagic.config.frequency_period)}},loadHosted:function(){var hostedScript=document.createElement("script");hostedScript.type="application/javascript";hostedScript.async=true;hostedScript.src="//"+this.config.ads_host+"/popunder1000.js";hostedScript.id="popmagicldr";for(var key in this.config){if(!this.config.hasOwnProperty(key)){continue}if(key==="ads_host"||key==="syndication_host"){continue}hostedScript.setAttribute("data-exo-"+key,this.config[key])}var insertAnchor=document.getElementsByTagName("body").item(0);if(insertAnchor.firstChild){insertAnchor.insertBefore(hostedScript,insertAnchor.firstChild)}else{insertAnchor.appendChild(hostedScript)}},preparePop:function(){if(typeof exoJsPop101==="object"&&exoJsPop101.hasOwnProperty("add")){return}popMagic.top=self;if(popMagic.top!==self){try{if(top.document.location.toString()){popMagic.top=top}}catch(err){}}popMagic.cookie_name="splashWeb-"+popMagic.config.idzone+"-42";if(popMagic.config.t_venor&&popMagic.shouldShow()){var xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==XMLHttpRequest.DONE){popMagic.venor_loaded=true;if(xmlhttp.status==200){popMagic.venor=xmlhttp.responseText}}};var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;xmlhttp.open("GET",protocol+"//"+popMagic.config.syndication_host+"/venor.php",true);try{xmlhttp.send()}catch(error){popMagic.venor_loaded=true}}popMagic.buildUrl();popMagic.browser=popMagic.browserDetector.detectBrowser(navigator.userAgent);if(!popMagic.config.chrome_enabled&&(popMagic.browser.name==="chrome"||popMagic.browser.name==="crios")){return}var popMethod=popMagic.getPopMethod(popMagic.browser);popMagic.addEvent("click",popMethod)},getPopMethod:function(browserInfo){if(popMagic.config.popup_force){return popMagic.methods.popup}if(popMagic.config.popup_fallback&&browserInfo.name==="chrome"&&browserInfo.version>=68&&!browserInfo.isMobile){return popMagic.methods.popup}if(browserInfo.isMobile){return popMagic.methods.default}if(browserInfo.name==="chrome"){return popMagic.methods.chromeTab}return popMagic.methods.default},buildUrl:function(){var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;var p=top===self?document.URL:document.referrer;var script_info={type:"inline",name:"popMagic",ver:this.version};var encodeScriptInfo=function(script_info){var result=script_info["type"]+"|"+script_info["name"]+"|"+script_info["ver"];return encodeURIComponent(btoa(result))};this.url=protocol+"//"+this.config.syndication_host+"/splash.php"+"?cat="+this.config.cat+"&idzone="+this.config.idzone+"&type=8"+"&p="+encodeURIComponent(p)+"&sub="+this.config.sub+(this.config.sub2!==""?"&sub2="+this.config.sub2:"")+(this.config.sub3!==""?"&sub3="+this.config.sub3:"")+"&block=1"+"&el="+this.config.el+"&tags="+this.config.tags+"&scr_info="+encodeScriptInfo(script_info)},addEventToElement:function(obj,type,fn){if(obj.addEventListener){obj.addEventListener(type,fn,false)}else if(obj.attachEvent){obj["e"+type+fn]=fn;obj[type+fn]=function(){obj["e"+type+fn](window.event)};obj.attachEvent("on"+type,obj[type+fn])}else{obj["on"+type]=obj["e"+type+fn]}},addEvent:function(type,fn){var targetElements;if(popMagic.config.trigger_method=="3"){targetElements=document.querySelectorAll("a");for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}if(popMagic.config.trigger_method=="2"&&popMagic.config.trigger_method!=""){var trigger_classes;var trigger_classes_final=[];if(popMagic.config.trigger_class.indexOf(",")===-1){trigger_classes=popMagic.config.trigger_class.split(" ")}else{var trimmed_trigger_classes=popMagic.config.trigger_class.replace(/\s/g,"");trigger_classes=trimmed_trigger_classes.split(",")}for(var i=0;i<trigger_classes.length;i++){if(trigger_classes[i]!==""){trigger_classes_final.push("."+trigger_classes[i])}}targetElements=document.querySelectorAll(trigger_classes_final.join(", "));for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}popMagic.addEventToElement(document,type,fn)},setCookie:function(name,value,ttl_minutes){var now_date=new Date;now_date.setMinutes(now_date.getMinutes()+parseInt(ttl_minutes));var c_value=encodeURIComponent(value)+"; expires="+now_date.toUTCString()+"; path=/";document.cookie=name+"="+c_value},getCookie:function(name){var i,x,y,cookiesArray=document.cookie.split(";");for(i=0;i<cookiesArray.length;i++){x=cookiesArray[i].substr(0,cookiesArray[i].indexOf("="));y=cookiesArray[i].substr(cookiesArray[i].indexOf("=")+1);x=x.replace(/^\s+|\s+$/g,"");if(x===name){return decodeURIComponent(y)}}},randStr:function(length,possibleChars){var text="";var possible=possibleChars||"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";for(var i=0;i<length;i++){text+=possible.charAt(Math.floor(Math.random()*possible.length))}return text},isValidUserEvent:function(event){if("isTrusted"in event&&event.isTrusted&&popMagic.browser.name!=="ie"&&popMagic.browser.name!=="safari"){return true}else{return event.screenX!=0&&event.screenY!=0}},isValidHref:function(href){if(typeof href==="undefined"||href==""){return false}var empty_ref=/\s?javascript\s?:/i;return!empty_ref.test(href)},findLinkToOpen:function(clickedElement){var target=clickedElement;var location=false;try{var breakCtr=0;while(breakCtr<20&&!target.getAttribute("href")&&target!==document&&target.nodeName.toLowerCase()!=="html"){target=target.parentNode;breakCtr++}var elementTargetAttr=target.getAttribute("target");if(!elementTargetAttr||elementTargetAttr.indexOf("_blank")===-1){location=target.getAttribute("href")}}catch(err){}if(!popMagic.isValidHref(location)){location=false}return location||window.location.href},getPuId:function(){return"ok_"+Math.floor(89999999*Math.random()+1e7)},browserDetector:{browserDefinitions:[["firefox",/Firefox\/([0-9.]+)(?:\s|$)/],["opera",/Opera\/([0-9.]+)(?:\s|$)/],["opera",/OPR\/([0-9.]+)(:?\s|$)$/],["edge",/Edg(?:e|)\/([0-9._]+)/],["ie",/Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],["ie",/MSIE\s([0-9.]+);.*Trident\/[4-7].0/],["ie",/MSIE\s(7\.0)/],["safari",/Version\/([0-9._]+).*Safari/],["chrome",/(?!Chrom.*Edg(?:e|))Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["chrome",/(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["bb10",/BB10;\sTouch.*Version\/([0-9.]+)/],["android",/Android\s([0-9.]+)/],["ios",/Version\/([0-9._]+).*Mobile.*Safari.*/],["yandexbrowser",/YaBrowser\/([0-9._]+)/],["crios",/CriOS\/([0-9.]+)(:?\s|$)/]],detectBrowser:function(userAgent){var isMobile=userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i);for(var i in this.browserDefinitions){var definition=this.browserDefinitions[i];if(definition[1].test(userAgent)){var match=definition[1].exec(userAgent);var version=match&&match[1].split(/[._]/).slice(0,3);var versionTails=Array.prototype.slice.call(version,1).join("")||"0";if(version&&version.length<3){Array.prototype.push.apply(version,version.length===1?[0,0]:[0])}return{name:definition[0],version:version.join("."),versionNumber:parseFloat(version[0]+"."+versionTails),isMobile:isMobile}}}return{name:"other",version:"1.0",versionNumber:1,isMobile:isMobile}}},methods:{default:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var clickedElement=triggeredEvent.target||triggeredEvent.srcElement;var href=popMagic.findLinkToOpen(clickedElement);window.open(href,"_blank");popMagic.setAsOpened();popMagic.top.document.location=popMagic.url;if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}return true},chromeTab:function(event){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(event))return true;if(typeof event.preventDefault!=="undefined"){event.preventDefault();event.stopPropagation()}else{return true}var a=top.window.document.createElement("a");var target=event.target||event.srcElement;a.href=popMagic.findLinkToOpen(target);document.getElementsByTagName("body")[0].appendChild(a);var e=new MouseEvent("click",{bubbles:true,cancelable:true,view:window,screenX:0,screenY:0,clientX:0,clientY:0,ctrlKey:true,altKey:false,shiftKey:false,metaKey:true,button:0});e.preventDefault=undefined;a.dispatchEvent(e);a.parentNode.removeChild(a);window.open(popMagic.url,"_self");popMagic.setAsOpened()},popup:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var winOptions="";if(popMagic.config.popup_fallback&&!popMagic.config.popup_force){var height=Math.max(Math.round(window.innerHeight*.8),300);var width=Math.max(Math.round(window.innerWidth*.7),300);var top=window.screenY+100;var left=window.screenX+100;winOptions="menubar=1,resizable=1,width="+width+",height="+height+",top="+top+",left="+left}var prePopUrl=document.location.href;var popWin=window.open(prePopUrl,popMagic.getPuId(),winOptions);setTimeout(function(){popWin.location.href=popMagic.url},200);popMagic.setAsOpened();if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}}}};    popMagic.init(adConfig);
})();
</script>
<?php include 'sidep.php';?>
<?php include 'include/foot.php';?>