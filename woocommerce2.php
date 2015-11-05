<?php 
/*
Template Name: Universal (1 column)
*/
get_header(); ?>


		<section role="main">
			<a href="<?php echo get_page_link(48); ?>" id="free-class" title="Book my free class now >">Book my free class now ></a>

<!—WOO COMMERCE START—>			
<?php woocommerce_content(); ?>
<!—WOO COMMERCE END—>
		</section>

				
<?php get_footer(); ?>