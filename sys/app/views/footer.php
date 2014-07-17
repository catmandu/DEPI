</div>
 	<div id="footer">
					<?
						switch($this->uri->segment(2)){
							case "sponsors" : 
								$this->load->view('footer-partners');
								break;
							case "partners" : 
								$this->load->view('footer-sponsors');
								break;
							default: 
								$this->load->view('footer-partners');
								$this->load->view('footer-sponsors');								
								break;
						}
					?>
					<p class="footer-text">
						<?=$this->lang->line('footer.copyright')?> © 2013 División de Estudios de Posgrado e Investigación<br />
						<a href="#" class="footer-links">|Webmaster </a>| <?=$this->lang->line('footer.dev')?><a class="footer-links"href="#"> JaguarSoft <img src="<?=base_url()?>img/js.png" alt="" /></a>|
					</p>
				</div>
			</div>
		</div>
        <style>
.boton
{
	position:fixed;
	z-index: 1;
	top:250px;
	left:1170px;
	border-radius:14px;
}
</style>

<a class="boton" href="http://posgrado.itcolima.edu.mx/mediosdeverificacion/"><img height="130" width="170" class="boton" src="<?=base_url()?>img/boton1.jpg"/></a>
	</body>
</html>
