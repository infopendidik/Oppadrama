<div id="footer">
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
<div class="footermenu">
<div class="menu-footer-container">
<ul id="menu-footer" class="menu">
<li id="menu-item-5868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5868">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/anime-episode-terbaru/" itemprop="url">Anime Episode Terbaru</a>
</li>
<li id="menu-item-5873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5873">
<a title="AnimeIndo" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/animeindo/" itemprop="url">AnimeIndo</a>
</li>
<li id="menu-item-6710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6710">
<a title="Nanime" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/nanime/" itemprop="url">Nanime</a>
</li>
<li id="menu-item-15115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15115">
<a title="Animeku" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/animeku/" itemprop="url">Animeku</a>
</li>
<li id="menu-item-17460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17460">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/riie/" itemprop="url">RiiE</a>
</li>
<li id="menu-item-17464" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-17463 current_page_item menu-item-17464">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/oploverz/" aria-current="page" itemprop="url">Oploverz</a>
</li>
<li id="menu-item-17468" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17468">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/anoboy/" itemprop="url">Anoboy</a>
</li>
<li id="menu-item-17475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17475">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/neonime/" itemprop="url">Neonime</a>
</li>
<li id="menu-item-17484" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17484">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/animenonton-tv/" itemprop="url">Animenonton TV</a>
</li>
<li id="menu-item-17490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17490">
<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/mangaku/" itemprop="url">Mangaku</a>
</li>
</ul></div></div>
		<div class="footercopyright">
				<div class="copyright marx">
			<div class="footer-logo"><img src="https://animeindo.site/wp-content/uploads/2020/10/logo2.png" title="" alt=""></div>
			<div class="txt">
				<span>Copyright © 2020 - 2021 <?php echo $sitename;?>. Email: admin@animeindo.site. All Rights Reserved</span>
				<p>Disclaimer: This site <i><?php echo $sitename;?></i> does not store any files on its server. All contents are provided by non-affiliated third parties.</p>
			</div>
		</div>
	</div>
	</footer>
</div>
<center></center>


    <script type="application/ld+json">{
          "@context":"http://schema.org",
          "@type":"",
          "@id":"",
          "name":"","image":"https://animeindo.site/favicon.ico","logo":"",
          "address":{
            "@type": "PostalAddress",
            "streetAddress": "",
            "addressLocality":"",
            "addressRegion":"",
            "postalCode":"",
            "addressCountry":""
          },
          "telephone":"",
          "description":"",
          "openingHoursSpecification":[

          ]

          }}

    }</script><script>
var dmlogo1 = '<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/assets/img/logo2.png';
var dmlogo2 = '<?php echo 'https://'.$_SERVER['HTTP_HOST'].''; ?>/assets/img/logo.png';
jQuery("#thememode input[type='checkbox']").on('change', function(){
	var is_on = jQuery("#thememode input[type='checkbox']").prop("checked");
	if (is_on == false){
		if (dmlogo2) jQuery(".logos img").attr('src', dmlogo2);
		localStorage.setItem("thememode", "lightmode");
		jQuery("body").addClass("lightmode");
		jQuery("body").removeClass("darkmode");
	}else{
		if (dmlogo1) jQuery(".logos img").attr('src', dmlogo1);
		localStorage.setItem("thememode", "darkmode");
		jQuery("body").removeClass("lightmode");
		jQuery("body").addClass("darkmode");
	}
});
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/70522792" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script type='text/javascript' src='https://animeindo.site/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4'></script>

<script type='text/javascript'>
    jQuery('.hover-star').rating({
      focus: function(value, link){
        var tip = jQuery('#hover-test');
        tip[0].data = tip[0].data || tip.html();
        tip.html(link.title || 'value: '+value);
      },
      blur: function(value, link){
        var tip = jQuery('#hover-test');
        jQuery('#hover-test').html(tip[0].data || '');
      }
    });
    jQuery(document).ready(function(){
    jQuery(function() {
      function log( message ) {
        jQuery('<div>').text( message ).prependTo( '#log' );
        jQuery('#log').scrollTop( 0 );
      }
      jQuery('[name=city2]').autocomplete({
        source: function( request, response ) {
          jQuery.ajax({
            url: 'http://www.bestlocalseotools.com/index3.php?lang='+'en'+'&request=ajaxcities',
            
            dataType: 'jsonp',
            data: {
              q: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        minLength: 1,
        select: function( event, ui ) {
          event.preventDefault();
          log( ui.item ?
            'Selected: ' + ui.item.label + 'howdy' :
            'Nothing selected, input was ' + this.value);
            var holder = ui.item.label;
            var exploded = holder.split(',');
            jQuery( '[name=city2]' ).val(exploded[0].trim());
            jQuery( '[name=state2]' ).val(exploded[1].trim());    
        },
        open: function() {
          jQuery( this ).removeClass( 'ui-corner-all' ).addClass( 'ui-corner-top' );
        },
        close: function() {
          jQuery( this ).removeClass( 'ui-corner-top' ).addClass( 'ui-corner-all' );
        }
      });
      })});

        
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var countVars = {"disqusShortname":"animeindotsite"};
/* ]]> */
</script>
<script type='text/javascript' src='/assets/js/filter.js?ver=1.0.0'></script>
<script type='text/javascript' src='/assets/js/tsevents.js?ver=1.0.0'></script>
<script type='text/javascript' src='/assets/js/search.js?ver=4.9.16'></script>
<script type='text/javascript' src='https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=4.9.16' async='async'></script>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4557202,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4557202&101" alt="invisible hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</html>