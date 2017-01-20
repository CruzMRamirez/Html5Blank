<?php $loopvar = 0; ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php
		if($loopvar === 0){
			$class_str = "";
			$class2_str = "style1";
			$id_str = "one";
			$loopvar++;
		} elseif($loopvar === 1){
			$class_str = "alt";
			$class2_str = "style2";
			$id_str = "two";
			$loopvar++;
		} elseif($loopvar === 2){
			$class_str = "";
			$class2_str = "style3";
			$id_str = "three";
			$loopvar++;
		} elseif($loopvar === 3){
			$class_str = "alt";
			$class2_str = "style1";
			$id_str = "one";
			$loopvar++;
		} elseif($loopvar === 4){
			$class_str = "";
			$class2_str = "style2";
			$id_str = "two";
			$loopvar++;
		} elseif($loopvar === 5){
			$class_str = "alt";
			$class2_str = "style3";
			$id_str = "three";
			$loopvar==0;
		}
?>

									<!-- wrapper spotlight style1 -->



				
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- section alternating -->
		<section id="<?php echo $id_str ?>" class="wrapper <?php echo $class_str; ?> spotlight <?php echo $class2_str; ?>">
		<div class="inner">
		
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" class="image" title="<?php the_title();?>">
				<?php the_post_thumbnail(array(300,300));// Declare pixel size you need inside the array ?>
				
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		<div class="content">
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<br>
		<br>
		<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		<br>
		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->
				</div>
				</div>
				</section>
<?php endif; ?>
