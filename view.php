<?php

require_once 'config/func.php';

if($_GET['link']) {
$link = $_GET['link'];
$url = 'http://'.$spatch.'/'.$link.'';
} else {
$url = 'http://'.$spatch.'/';
}

$urlx = strstr(grab($url), '<body');

$descriptions = potong($urlx, '<div class="col-md-9 description">', '</div>');

$num_char = 200;
$descr = potong($descriptions, '<p>', '</p>');
$descr = str_ireplace('<font class="text-primary">','', $descr);
$descr = str_ireplace('</font><br>','', $descr);
$descr = str_ireplace('"','', $descr);
$cut_text = substr($descr, 0, $num_char);

$fbcom = $link;

if($ti = potong($urlx, '<h1 class="judul-post">', '</h1>'))
{

$to = potong($urlx, '<h1 class="judul-post">', '</h1>');
$te = potong($ti, 'Nonton ', ':');
$to =  str_ireplace('Sub Indo', 'Subtitle Indonesia', $to);
$to =  str_ireplace('Nonton ', 'Nonton Anime ', $to);

$title = ''.$to.' Subtitle Indo - '.$sitename.'';
$description = 'Nonton streaming '.$to.', download anime '.$to.'. '.$cut_text.'';
$keyword = 'Nonton streaming '.$to.' , Nonton online '.$to.', anime '.$te.' sub indo, animeindo, download anime '.$te.' sub indo, download movie anime '.$te.' sub indo, download anime batch '.$te.' sub indo';
}
else
{

$too = potong($urlx, '<div class="col-md-3 content-item">', '</div>');
$to = potong($too, 'title="', '"');
$title = ''.$to.' Subtitle Indo - '.$sitename.'';
$description = 'Nonton streaming '.$to.', download anime '.$to.'. '.$cut_text.'';
$keyword = 'Nonton streaming '.$to.' , Nonton online '.$to.', anime '.$to.' sub indo, animeindo, download anime '.$to.' sub indo, download movie anime '.$to.' sub indo, download anime batch '.$to.' sub indo';
}
?>

<?php include 'include/head.php';?>
<div id="main">
<div class="container">
<script type="text/javascript" src="/ip.temp/at_017/js/ipplayer.js"></script>
<?php if($stream = potong($urlx, '<div class="col-md-7 box-content">', '<div class="col-md-3 box-content">')) 
{
$server = potong($stream , '<select id="change-server" class="form-control">', '</select>');
if($playor = potong($server , '<option class="link_server" selected value="', '">480p'))
{
$play = $playor;
}
else 
{
    $playors = potong($server , '<option class="link_server" selected value="', '">720p');
    $play  = $playors;
}
$play2 = potong($play , '/file/', '?');

$animeInfo = potong($stream , '<div class="animeInfo">', '</div>');
$judul = potong($stream , '<h1 class="judul-post">', '</');
if($cov2 = potong($stream , '<img class="img-fluid" src="https', '" alt=""')) 
{
$cov = $cov2;
}
else {
$cov='//'.$_SERVER['HTTP_HOST'].'/images/anime.jpg'; 
}
$link = $_GET['link'];
$lol ='-'.$link.'';
$dataex = explode('-', $lol);

$count = count($dataex);
$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
for($i=1; $i<=$count; $i++) {

$nexta = ''.$dataex[$i].'';
}
$prev = $nexta-1;
$prev = str_pad($prev, 3, '0', STR_PAD_LEFT);
$next = $nexta+1;
$next = str_pad($next, 3, '0', STR_PAD_LEFT);

$animexx = potong($stream, '<a href="https://nanime.tv/anime/','" class="btn btn-primary" title="Lihat Semua Episode">');

$idjson = potong($urlx, '<script type="application/ld+json">', '</script>');
$idjsondescription = potong($idjson, '"description": "', '"');
$idjsonthumbnailUrl = potong($idjson, '"thumbnailUrl": "', '"');
$idjsonuploadDate = potong($idjson, '"uploadDate": "', '"');
$idjsonembedUrl = potong($idjson, '"embedUrl": "', '"');
$idjsonduration = potong($idjson, '"duration": "', '"');

echo '<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "VideoObject",
      "name": "'.$judul.' - AnimeIndo.Pw",
      "description": "'.$idjsondescription.'.",
      "thumbnailUrl": "'.$idjsonthumbnailUrl.'",
      "uploadDate": "'.$idjsonuploadDate.'"
      },
      "embedUrl": "'.$idjsonembedUrl.'",
      "duration": "'.$idjsonduration.'",
    }
  </script>';
  

} ?>
<?php echo '<style>span.quality { background: #fed700; color: #222; border-radius: 2px; padding: 1px 5px; display: inline-block; }</style>
<div id="padding-expand"></div>
<div id="main-content" class="watch">
<div class="goblock play-anime">
<div class="gobread">
<ol class="breadcrumb">
<li><a href="/"><span>Home</span></a></li>
<li class="active"><span>Watching '.$judul.'</span></li>
</ol>
</div>
<div class="goblock-content go-full">
<div id="media-play" class="cssload-2x cssload-center" style="background:black;float:left;">
<div id="player">
<div class="content_swf">

<div data-src="'.$play.'" class="player" id="player">
        
          <img class="img-fluid" src="https'.$cov.'" alt="" />
        
        <span></span>
      </div>
</div>
</div>
</div>
<div class="clearfix"></div>
<style>
			.play-anime .gocontrol .gc-icon.gc-light:after {content: "Light Off";}
			.play-anime .gocontrol .gc-icon.gc-light.active:after {content: "Light On";}

			</style>
<div class="goblock-bottom gocontrol">
<a href="#main" class="gc-icon gc-light" title=""><i class="icon-light2 mr5"></i></a>

<a class="gc-icon gc-share" title=""><i class="icon-share mr5"></i>Share</a>
<a href="#comments" class="gc-icon gc-comments" title=""><i class="icon-comments mr5"></i>Comments</a>
<a href="#reload" class="gc-icon gc-refresh" id="reloadPlayer"><i class="fa fa-refresh" aria-hidden="true"></i> Muat Ulang</a>
<div id="div_download_link"></div>
<div class="clearfix"></div>
</div>
</div>
</div>';
?>
<div class="goblock block-share" style="display: none;">
<div class="goblock-content text-center">
<p class="desc">Share to your friends</p>
<p class="social">
<a onclick="share('http://animesub.to/anime-boruto-naruto-next-generations-2017-animesub.html','facebook')" class="social-color" title="Share Facebook" href="javascript:void(0)"><i class="icon-facebook fa-3x"></i></a>
<a onclick="share('http://animesub.to/anime-boruto-naruto-next-generations-2017-animesub.html','twitter')" class="social-color" title="Share Twitter" href="javascript:void(0)"><i class="icon-twitter fa-3x"></i></a>
<a onclick="share('http://animesub.to/anime-boruto-naruto-next-generations-2017-animesub.html','google')" class="social-color" title="Share Google" href="javascript:void(0)"><i class="icon-google-plus fa-3x"></i></a>
</p>
<div class="clearfix"></div>
</div>
</div>
<div class="goblock" id="servers-container">
<div class="widget servers">
<div class="widget-title">
<span class="title">SERVER</span>
</div>
<select id="change-server" class="gc-icon form-control">

              <option class="link_server" selected value="https://uservideo.xyz/file/nanime.heya.camp.e01.480p.sub.indo.mp4?embed=true&amp;autoplay=true">480p uservideo.xyz</option>
            <option class="link_server" selected value="https://uservideo.xyz/file/nanime.heya.camp.e01.720p.sub.indo.mp4?embed=true&amp;autoplay=true">720p uservideo.xyz</option>
            <option class="link_server" selected value="https://uservideo.xyz/file/nanime.heya.camp.e01.1080p.sub.indo.mp4?embed=true&amp;autoplay=true">1080p uservideo.xyz</option>
            <option class="link_server"  value="https://naniplay.nanime.in/file/nanime.heya.camp.e01.480p.sub.indo.mp4?embed=true&amp;autoplay=true">480p naniplay.nanime.in</option>
            <option class="link_server"  value="https://naniplay.nanime.in/file/nanime.heya.camp.e01.720p.sub.indo.mp4?embed=true&amp;autoplay=true">720p naniplay.nanime.in</option>
            <option class="link_server"  value="https://naniplay.nanime.in/file/nanime.heya.camp.e01.1080p.sub.indo.mp4?embed=true&amp;autoplay=true">1080p naniplay.nanime.in</option>
            <option class="link_server"  value="https://vidoza.net/embed-xmdfh124v4q7.html?embed=true&amp;autoplay=true">480p vidoza.net</option>
            <option class="link_server"  value="https://vidoza.net/embed-uee3jdz3u1hn.html?720p?embed=true&amp;autoplay=true">720p vidoza.net</option>
            <option class="link_server"  value="https://vidoza.net/embed-waz5j3vimdec.html?1080p?embed=true&amp;autoplay=true">1080p vidoza.net</option>
            <option class="link_server"  value="https://www.autoratio.com/ItWnN?embed=true&amp;autoplay=true">480p www.autoratio.com</option>
            <option class="link_server"  value="https://www.autoratio.com/b2TzYD6Xl?720p?embed=true&amp;autoplay=true">720p www.autoratio.com</option>
            <option class="link_server"  value="https://www.autoratio.com/EhE?1080p?embed=true&amp;autoplay=true">1080p www.autoratio.com</option>
            <option class="link_server"  value="https://semawur.com/TYbyb7EFsX?embed=true&amp;autoplay=true">480p semawur.com</option>
            <option class="link_server"  value="https://semawur.com/5nSNp46m6v07?720p?embed=true&amp;autoplay=true">720p semawur.com</option>
            <option class="link_server"  value="https://semawur.com/553NeacdFN?1080p?embed=true&amp;autoplay=true">1080p semawur.com</option>
            
</select>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('div[data-target] .tab').click(function () {
			$('.server.active .tab').removeClass('active');
			$(this).addClass('active');
			var name	=	$(this).data('name');
			var target	=	$(this).parent().data('target');
			$(target).hide();
			$(target+'[data-name="'+name+'"]').fadeIn(400);
		});
	});
	</script>
<div class="goblock detail-anime">
<div class="goblock-content go-full">
<div class="detail-content">
<div class="dc-thumb"><img src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&no_expand=1&refresh=604800&url=http://cdn.animesub.to/upload/2019/09/poster-boruto-naruto-next-generations-2017.jpg" title="Boruto: Naruto Next Generations" alt="Boruto: Naruto Next Generations"></div>
<div class="dc-info">
<h1 class="dc-title">
<strong>Boruto: Naruto Next Generations</strong>
<a onclick="return trailer_url();" class="btn btn-trailer"><i class="fa fa-video-camera mr5"></i>Trailer</a> </h1>
<div class="dci-spe">
<div class="dcis dcis-01"><b>Genres</b>: <a href="/genres/action.html" title="Action Movies">Action</a>, <a href="/genres/adventure.html" title="Adventure Movies">Adventure</a>, <a href="/genres/martial-arts.html" title="Martial Arts Movies">Martial Arts</a>, <a href="/genres/shounen.html" title="Shounen Movies">Shounen</a>, <a href="/genres/super-power.html" title="Super Power Movies">Super Power</a></div> <div class="dcis dcis-02"><b>Countrys</b>: <a href="/country/japan.html" title="Japan Movies">Japan</a></div> <div class="dcis dcis-03"><b>Actors</b>: <a href="/actors/Uchiha+Sarada.html" title="Uchiha Sarada">Uchiha Sarada</a>, <a href="/actors/Uzumaki+Boruto.html" title="Uzumaki Boruto">Uzumaki Boruto</a>, <a href="/actors/Mitsuki.html" title="Mitsuki">Mitsuki</a>, <a href="/actors/Sarutobi+Konohamaru.html" title="Sarutobi Konohamaru">Sarutobi Konohamaru</a>, <a href="/actors/Uzumaki+Naruto.html" title="Uzumaki Naruto">Uzumaki Naruto</a>, <a href="/actors/Hatake+Kakashi.html" title="Hatake Kakashi">Hatake Kakashi</a>, <a href="/actors/Uchiha+Sasuke.html" title="Uchiha Sasuke">Uchiha Sasuke</a>, <a href="/actors/Gaara.html" title="Gaara">Gaara</a>, <a href="/actors/Nara+Shikamaru.html" title="Nara Shikamaru">Nara Shikamaru</a>, <a href="/actors/Hyuuga+Hinata.html" title="Hyuuga Hinata">Hyuuga Hinata</a></div> <div class="dcis dcis-04"><b>Director</b>: <a href="/director/Yamashita+Hiroyuki.html" title="Yamashita Hiroyuki">Yamashita Hiroyuki</a>, <a href="/director/Kawano+Tatsurou.html" title="Kawano Tatsurou">Kawano Tatsurou</a></div> <div class="dcis dcis-05"><b>Duration</b>: 23 min.</div> <div class="dcis dcis-06"><b>Quality</b>: <span class="quality">HD</span></div> <div class="dcis dcis-07"><b>Release</b>: 2017</div> <div class="dcis dcis-08"><b>Views</b>: <span id="ip_view">0</span></div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="dci-desc">Following the successful end of the Fourth Shinobi World War, Konohagakure has been enjoying a period of peace, prosperity, and extraordinary technological advancement. This is all due to the efforts of the Allied Shinobi Forces and the village&#39s Seventh Hokage, Naruto Uzumaki. Now resembling a modern metropolis, Konohagakure has changed, particularly the life of a shinobi. Under the watchful eye of Naruto and his old comrades, a new generation of shinobi has stepped up to learn the ways of the ninja.
Boruto Uzumaki is often the center of attention as the son of the Seventh Hokage. Despite having inherited Naruto&#39s boisterous and stubborn demeanor, Boruto is considered a prodigy and is able to unleash his potential with the help of supportive friends and family. Unfortunately, this has only worsened his arrogance and his desire to surpass Naruto which, along with his father&#39s busy lifestyle, has strained their relationship. However, a sinister force brewing within the village may threaten Boruto&#39s carefree life.
New friends and familiar faces join Boruto as a new story begins in Boruto: Naruto Next Generations.
(Written by MAL Rewrite)</div>
<div class="clearfix"></div>
<div class="addthis_inline_share_toolbox_om8z"></div>
</div>
<div class="dc-right">
<div class="dcr-rating">
<strong>Rating</strong> (<strong id="vote_percent">0</strong> - <span id="vote_number">0</span> Votes)
<div data-mark="0" class="dcrr" id="anime-rating" data-movie="319">
<a href="javascript:void(0)" class="fa fa-star-o"></a>
<a href="javascript:void(0)" class="fa fa-star-o"></a>
<a href="javascript:void(0)" class="fa fa-star-o"></a>
<a href="javascript:void(0)" class="fa fa-star-o"></a>
<a href="javascript:void(0)" class="fa fa-star-o"></a>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="goblock-bottom">
<strong>Keywords:</strong>
<a href="/tag/boruto:+naruto+next+generations.html" title="boruto: naruto next generations">boruto: naruto next generations</a>, <a href="/tag/boruto:+naruto+next+generations+2017.html" title="boruto: naruto next generations 2017">boruto: naruto next generations 2017</a>, <a href="/tag/boruto:+naruto+next+generations+free.html" title="boruto: naruto next generations free">boruto: naruto next generations free</a>, <a href="/tag/boruto:+naruto+next+generations+online.html" title="boruto: naruto next generations online">boruto: naruto next generations online</a>, <a href="/tag/9anime.html" title="9anime">9anime</a>, <a href="/tag/animefree.html" title="animefree">animefree</a>, <a href="/tag/kissanime.html" title="kissanime">kissanime</a>, <a href="/tag/123movies.html" title="123movies">123movies</a>, <a href="/tag/fmovies.html" title="fmovies">fmovies</a>, <a href="/tag/animeflv.html" title="animeflv">animeflv</a>,
<a href="/search/boruto:+naruto+next+generations+9anime.html" title="boruto: naruto next generations 9anime">boruto: naruto next generations 9anime</a>, <a href="/search/boruto:+naruto+next+generations+animefree.html" title="boruto: naruto next generations animefree">boruto: naruto next generations animefree</a>, <a href="/search/boruto:+naruto+next+generations+kissanime.html" title="boruto: naruto next generations kissanime">boruto: naruto next generations kissanime</a>, <a href="/search/boruto:+naruto+next+generations+123movies.html" title="boruto: naruto next generations 123movies">boruto: naruto next generations 123movies</a>, <a href="/search/boruto:+naruto+next+generations+fmovies.html" title="boruto: naruto next generations fmovies">boruto: naruto next generations fmovies</a>, <a href="/search/boruto:+naruto+next+generations+animeflv.html" title="boruto: naruto next generations animeflv">boruto: naruto next generations animeflv</a> </div>
<div class="clearfix"></div>
</div>
</div>
<div class="goblock comments" id="comments">
<div class="goblock-header">
<div class="gh-title">COMMENTS</div>
<div class="clearfix"></div>
</div>
<div class="goblock-content">
<div class="fb-comments" data-href="http://animesub.to/anime-boruto-naruto-next-generations-2017-animesub.html" data-width="100%" data-numposts="5"></div>
<div class="clearfix"></div>
</div>
</div>
</div>


<?php include 'sidebar.php'; ?>

<div class="clearfix"></div>
</div>
</div>
<script type="text/javascript">
      
      var timerAds = 5;
      
      const playerAds = [{"image":"/images/banner_iklan.jpg","link":"https://animeindo.pw"}];
      const playerAd = playerAds[Math.floor(Math.random() * playerAds.length)];
    </script>

  <script type="text/javascript">
$(document).ready(function() {
  if(typeof ADBLOCK == 'undefined') {
    $('.antiad').modal({backdrop: 'static', keyboard: false})
    $('.antiad').modal('show');
  }
  var owl = $("#slider-utama");
  owl.owlCarousel({
    loop:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            loop:true,
            autoplay: true,
        },
        600:{
            items:5,
            loop:true,
            autoplay: true,
        },
        1000:{
            items:10,
            autoplay: true,
            loop:true,
        }
    }
  });
  $("#slide-right").click(function(){
    owl.trigger('next.owl.carousel');
  })
  $("#slide-left").click(function(){
    owl.trigger('prev.owl.carousel');
  })
  $('#reloadPlayer').click(function(event) {
    var src = $('.player').data('src')
    var height = $('.player').children('img').height() ? $('.player').children('img').height() : $('.player').height();
    var width = $('.player').children('img').width() ? $('.player').children('img').width() : $('.player').width();
    $('.player').replaceWith('<iframe class="hold-player player" data-src="'+src+'" width="'+width+'" height="'+height+'" frameBorder="0" src="' + src + '" frameborder="0" allowfullscreen></iframe>');
  });
  $('#change-server').change(function(event) {
    var src = $(this).val();
    if(src) {
      var height = $('.player').children('img').height() ? $('.player').children('img').height() : $('.player').height();
      var width = $('.player').children('img').width() ? $('.player').children('img').width() : $('.player').width();
      $('.player').replaceWith('<iframe class="hold-player player" data-src="'+src+'" width="'+width+'" height="'+height+'" frameBorder="0" src="' + src + '" frameborder="0" allowfullscreen></iframe>');
    }
  });
 $('.player').click(function(event) {
    var ini = $(this);
    var src = $(this).data('src')
    var height = $(this).children('img').height();
    var width = $(this).children('img').width();
    ini.replaceWith('<div data-src="'+src+'" class="player"><a href="'+playerAd.link+'" target="_blank"><img class="img-fluid" src="'+playerAd.image+'" alt=""><div class="skip">Iklan akan berakhir dalam <b id="counter_skip"></b> detik</div></div>');
    display = document.querySelector('#counter_skip');
    startTimer(timerAds, display);
    , (timerAds * 1000) + 1000);
  });
});

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
  </script>
  
<?php include 'include/foot.php';?>