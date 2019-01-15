<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LG-ofertas
 */

?>

	<footer class="site-footer" role="contentinfo">
		
			<div class="footer-columns">
				<ul class="social">
					<li>
						<a href="#">
							<span class="fa-stack fa-lg">
								<i style="color: #fff" class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook-f fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/LG_Argentina" target="_blank">
							<span class="fa-stack fa-lg">
								<i style="color: #fff" class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="http://www.youtube.com/user/LgElectronicsAr" target="_blank">
							<span class="fa-stack fa-lg">
								<i style="color: #fff" class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube-play fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li><a href="http://www.lg.com/ar" target="_blank">LG.COM/AR</a></li>
				</ul>
			</div>
			<div class="footer-columns">
				<form class="news-form">
					<h4>Sucribite a nuestro newsletter</h4>
					<input id="email" type="text" placeholder="Ingresá tu correo electrónico">
					<button id="submit-bt" type="button" onClick="saveEmail();"><i class="fa fa-angle-right"></i></button>
				</form>
			</div>
			<div class="footer-columns">
				<a href="http://www.lg.com/ar/privacy" target="_blank">Privacidad</a>
				<span class="separador">|</span>
				<a href="http://www.lg.com/ar/legal" target="_blank">Legalidad</a>
			</div>
			<p class="copy">Copyright © 2016 LG Electronics. Todos los derechos reservados.</p>
	</footer>

<?php wp_footer(); ?>
</div><!-- #wrapper -->
</body>
</html>
