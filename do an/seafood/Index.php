get_header();
?>

<div id="main-content">
	<div class="post">
		<?php if(have_posts()) : while (have_posts()) :the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>"></div>
		<div class="entry-content">
			<?php
				the_content();
				wp_link_pages(
					array(
						'before'=>'<div class="page-links">'.esc_html_('pages:','seafood'),
						'after' => '</div>',
						)
				);
				?>
		</div>
	</div>
</div>
<?php
get_footer();
?>