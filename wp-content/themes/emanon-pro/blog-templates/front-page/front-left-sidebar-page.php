<?php
/**
* Template left sidebar page
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main-right first">
			<?php get_template_part( 'lib/modules/components/ad-front-top' ); ?>
			<?php get_template_part( 'content', 'page-front' ); ?>
			<?php get_template_part( 'lib/modules/components/ad-front-bottom' ); ?>
			</div>
		</main>
		<!--end main-->
		<!--sidebar-->
		<aside class="col-sidebar-left sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<!--end sidebar-->
	</div>
</div>
<!--end content-->
