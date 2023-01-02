<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Personal
 */

?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- #content -->
	<?php $blog_personal_enable_footer_text = blog_personal_get_option( 'enable_footer_text' );
	$blog_personal_enable_footer_menu = blog_personal_get_option( 'enable_footer_menu' );
	?>
	
	<footer class="footer">

<div class="footer-top section">
  <div class="container">

	<div class="footer-brand">

	  <a href="#" class="logo page-logo">
		<img src="./assets/images/logo.png" alt="Mao Shop logo">
	  </a>

	  <ul class="social-list">

		<li>
		  <a href="#" class="social-link">
			<ion-icon name="logo-facebook"></ion-icon>
		  </a>
		</li>

		<li>
		  <a href="#" class="social-link">
			<ion-icon name="logo-twitter"></ion-icon>
		  </a>
		</li>

		<li>
		  <a href="#" class="social-link">
			<ion-icon name="logo-pinterest"></ion-icon>
		  </a>
		</li>

		<li>
		  <a href="#" class="social-link">
			<ion-icon name="logo-linkedin"></ion-icon>
		  </a>
		</li>

	  </ul>

	</div>

	<div class="footer-link-box">

	  <ul class="footer-list">

		<li>
		  <p class="footer-list-title">Contact Us</p>
		</li>

		<li>
		  <address class="footer-link">
			<ion-icon name="location"></ion-icon>

			<span class="footer-link-text">
			  2751 S Parker Rd, Aurora, CO 80014, United States
			</span>
		  </address>
		</li>

		<li>
		  <a href="tel:+557343673257" class="footer-link">
			<ion-icon name="call"></ion-icon>

			<span class="footer-link-text">+557343673257</span>
		  </a>
		</li>

		<li>
		  <a href="mailto:Mao Shop@help.com" class="footer-link">
			<ion-icon name="mail"></ion-icon>

			<span class="footer-link-text">Mao Shop@help.com</span>
		  </a>
		</li>

	  </ul>

	  <ul class="footer-list">

		<li>
		  <p class="footer-list-title">My Account</p>
		</li>

		<li>
		  <a href="#" class="footer-link">
			<ion-icon name="chevron-forward-outline"></ion-icon>

			<span class="footer-link-text">My Account</span>
		  </a>
		</li>

		<li>
		  <a href="#" class="footer-link">
			<ion-icon name="chevron-forward-outline"></ion-icon>

			<span class="footer-link-text">View Cart</span>
		  </a>
		</li>

		<li>
		  <a href="#" class="footer-link">
			<ion-icon name="chevron-forward-outline"></ion-icon>

			<span class="footer-link-text">Wishlist</span>
		  </a>
		</li>

		<li>
		  <a href="#" class="footer-link">
			<ion-icon name="chevron-forward-outline"></ion-icon>

			<span class="footer-link-text">Compare</span>
		  </a>
		</li>

		<li>
		  <a href="#" class="footer-link">
			<ion-icon name="chevron-forward-outline"></ion-icon>

			<span class="footer-link-text">New Products</span>
		  </a>
		</li>

	  </ul>

	  <div class="footer-list">

		<p class="footer-list-title">Opening Time</p>

		<table class="footer-table">
		  <tbody>

			<tr class="table-row">
			  <th class="table-head" scope="row">Mon - Tue:</th>

			  <td class="table-data">8AM - 10PM</td>
			</tr>

			<tr class="table-row">
			  <th class="table-head" scope="row">Wed:</th>

			  <td class="table-data">8AM - 7PM</td>
			</tr>

			<tr class="table-row">
			  <th class="table-head" scope="row">Fri:</th>

			  <td class="table-data">7AM - 12PM</td>
			</tr>

			<tr class="table-row">
			  <th class="table-head" scope="row">Sat:</th>

			  <td class="table-data">9AM - 8PM</td>
			</tr>

			<tr class="table-row">
			  <th class="table-head" scope="row">Sun:</th>

			  <td class="table-data">Closed</td>
			</tr>

		  </tbody>
		</table>

	  </div>

	  <div class="footer-list">

		<p class="footer-list-title">Newsletter</p>

		<p class="newsletter-text">
		  Authoritatively morph 24/7 potentialities with error-free partnerships.
		</p>

		<form action="" class="newsletter-form">
		  <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

		  <button type="submit" class="btn btn-primary">Subscribe</button>
		</form>

	  </div>

	</div>

  </div>
</div>

<div class="footer-bottom">
  <div class="container">

	<p class="copyright">
	  &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
	</p>

  </div>
</div>

</footer>
	<?php $enable_scroll_back = blog_personal_get_option( 'enable_scroll_back' );
	if ( true == $enable_scroll_back ): ?>
		<div class="back-to-top">
			<a href="#masthead" title="Go to Top" class="fa-angle-up"></a>       
		</div>
	<?php endif; ?>		
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
