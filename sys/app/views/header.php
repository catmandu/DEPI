<?=doctype('xhtml11')."\n"?>
<html>
	<head>
		<?=meta('Content-Type','text/html;charset=utf-8','equiv')?>
		<?=meta('author','CLCAR')?>
		<?=meta('copyright','CLCAR 2011')?>
		<?=meta('keywords',$this->lang->line('header.keywords'))?>
		<?=meta('description',$this->lang->line('header.description'))?>
		<?=link_tag('img/favicon.png','shortcut icon','image/ico')."\n"?>
		<?=link_tag('css/clcar.css')."\n"?>
		<?=link_tag('css/cbcscbclcar.css')."\n"?>
		<?=link_tag('css/carousel.css')."\n"?>
<? if ($this->uri->segment(2)=="register"):?>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.validate.js"></script>
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery.fn.reset = function(){
				jQuery(this).each (function(){
					this.reset(); 
				});
			}
			BASE_URL="<?=base_url()?>";
			LANG="<?=$this->lang->lang()?>";
		</script>
		<script type="text/javascript" src="<?=base_url()?>js/submit.js"></script>
<? endif;?>		
		<script type="text/javascript" src="<?=base_url()?>js/ext-core.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/carousel.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/widget_<?=$this->lang->lang()?>.js"></script>
		<script type="text/javascript">
			BASE_URL="<?=base_url()?>";
			LANG="<?=$this->lang->lang()?>";
			Ext.onReady(function() {
				new Ext.ux.Carousel('header-bg', {itemSelector: 'img', interval: 10, autoPlay: true, transitionType: 'fade',transitionDuration: 0,hideNavigation: true});
				document.getElementById('header-bg').style.visibility='visible';
			});
		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-21202737-1']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
		</script>
		<title>DEPI 2013 - <?=$this->lang->line('header.title')?></title>
	</head>
	<body>
		<div id="page-shadow">
			<div id="container">
				<div id="header">				
					<div id="language">
						<? switch($this->lang->lang()){
							case 'es':
								echo "<span class='selected'>".anchor($this->lang->switch_uri('es'),'Español')."</span>";
						/*		echo anchor($this->lang->switch_uri('en'),'English')."-";
								echo anchor(/*$this->lang->switch_uri('pt')*//*'','Português(não disponível)');*/
								break;
							/*case 'en':
								echo anchor($this->lang->switch_uri('es'),'Español')."-";
								echo "<span class='selected'>".anchor($this->lang->switch_uri('en'),'English')."</span>-";
								echo anchor(/*$this->lang->switch_uri('pt')*//*'','Português(não disponível)');
								break;
							case 'pt':
								echo anchor($this->lang->switch_uri('es'),'Español')."-";
								echo anchor($this->lang->switch_uri('en'),'English')."-";
								echo "<span class='selected'>".anchor(/*$this->lang->switch_uri('pt')*//*'','Português(não disponível)')."</span>";
								break;*/
						}?>
					</div>
					<div id="logo-clcar"></div>					
					<!--div id="info">
						<?=$this->lang->line('header.info')?>
					</div-->
					<!--div id="header-bg">
                        
                    	<img src="<?=base_url()?>img/campana.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/chanal.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/reycoliman.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/perritos.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/jardincentro.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/sal.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/sal2.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/petatera.jpg" alt="" />
                        <img src="<?=base_url()?>/depi/img/bg-manzanillo_las_hadas.png" alt="" />
                        <img src="<?=base_url()?>/depi/img/bg-manzanillo_playa.png" alt="" />
						<img src="<?=base_url()?>/depi/img/losamiales.jpg" alt="" />                        
					</div-->	
				</div>
