<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package All_Star_AI
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row main-footer">
			<div class="col-12 col-md-6 col-lg-3">
				<?php
				the_custom_logo();
				?>
				<div class="content-footer">
					<a href="mailto:support@allstar.com">support@allstar.com</a>
					<p>10624 S. Eastern Ave., Ste. A-614
						Henderson, NV 89052, USA</p>
				</div>
			</div>
			<div class="col-12  col-md-6  col-lg-3">
				<h3 class="title-footer">Products</h3>
				<ul class="list-footer">
					<li><a href="#">Stella Data Analytics</a></li>
					<li><a href="#">Stella Customer Support</a></li>
					<li><a href="#">Stella Knowledge Management</a></li>
					<li><a href="#">Stella Expert Support</a></li>
				</ul>
			</div>
			<div class="col-12  col-md-6  col-lg-3">
				<h3 class="title-footer">About</h3>
				<ul class="list-footer">
					<li><a href="#">User Case</a></li>
					<li><a href="#">Our team</a></li>
					<li><a href="#">Contact Us</a></li>

				</ul>
			</div>
			<div class="col-12  col-md-6  col-lg-3">
				<h3 class="title-footer">Join on our Newsletter</h3>
				<?php
				echo do_shortcode('[contact-form-7 id="fa76b4d" title="Form Email"]');
				?>
				<div class="list-socials">
					<div class="item">
						<a href="#">
							<img src="/wp-content/uploads/2025/01/ELEMENTS.svg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="/wp-content/uploads/2025/01/Vector.svg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="/wp-content/uploads/2025/01/Vector-1.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row bottom-footer">
			<div class="col-12">
				<p class="copyright">© 2025 All Star AI. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
</div>


<?php wp_footer(); ?>
<script>
	AOS.init();
</script>
</body>

</html>