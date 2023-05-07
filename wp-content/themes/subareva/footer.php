<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Subareva
 */
?>
	<footer id="footer" class="footer">
		<div class="footer__container main-container">
			<p>© <?php echo date('Y')?>. Subareva Clinic</p>
		</div>
	</footer>
<div class="popup padding-right padding-left" style="display: none">
	<div class="popup__container">
		<div class="popup__close">
			<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M1.0136 0.514909C1.40412 0.124384 2.03729 0.124384 2.42781 0.514909L11.1816 9.26874L19.9355 0.514909C20.326 0.124384 20.9592 0.124384 21.3497 0.514909C21.7402 0.905433 21.7402 1.5386 21.3497 1.92912L12.5959 10.683L21.3493 19.4364C21.7398 19.8269 21.7398 20.4601 21.3493 20.8506C20.9588 21.2411 20.3256 21.2411 19.9351 20.8506L11.1816 12.0972L2.42821 20.8506C2.03769 21.2411 1.40452 21.2411 1.014 20.8506C0.623475 20.4601 0.623475 19.8269 1.014 19.4364L9.76743 10.683L1.0136 1.92912C0.623072 1.5386 0.623072 0.905433 1.0136 0.514909Z" fill="#C4C4C4"/>
			</svg>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="5" title="Форма заявок"]' ); ?>
	</div>
</div>
<div class="success-send" id="success-send" style="display: none">
	<div class="success-send__container">
		Сообщение отправлено
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
<!--<script src="--><?php //echo get_template_directory_uri() . '/js/fresco.min.js'?><!--"></script>-->
<?php wp_footer(); ?>
</div>
</body>
</html>
