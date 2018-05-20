<?php 

get_header();
the_post();

?>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area ptb-80" data-overlay="7" style="background-image: url(<?php echo get_theme_file_uri('/img/slider/slide1.jpg') ?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="breadcrumb-text">
					<h1><?php the_title(); ?></h1> 
					<div class="breadcrumb-menu">
						<ul>
							<li><a href="<?php echo get_settings('home'); ?>" title="Home"><?php echo get_field('home_text','option'); ?></a></li>
							<li><span><?php the_title(); ?></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="inquery">
					<h2><?php echo get_field('contact_us_today','option'); ?><a href="tel:+44 (0)7586 805 221" title="+44 (0)7586 805 221"><?php echo get_field('call_button_text','option'); ?></a></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area-end -->       

<div class="latest-blog-area blog-list pt-100 pb-70">

	<div class="container">

		<div class="row">

				<?php
				    $args = array(
				        'post_type' => 'post',
				        //'cat' => 6,
				        'posts_per_page' => 2
				    );

				    $post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
				    $post_query->the_post();
				    ?>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

				<div class="latest-blog-wrapper mb-30">

					<div class="row">

						<div class="col-sm-5">

							<div class="latest-blog-img">

								<!-- <a href="news-details.php"><img src="<?php echo get_theme_file_uri('/img/blog.jpg') ?>" alt=""></a> -->

				<!-- <a href="news-details.php"><?php the_post_thumbnail('thumbnail'); ?></a> -->

				<!-- <?php wp_get_attachment_image_src('subgall-thumb'); ?> -->

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<img src="<?php echo the_post_thumbnail_url(); ?>"/>
				</a>

							</div>

						</div>

						<div class="col-sm-7">

							<div class="latest-blog-text">

								<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

								<div class="bolg-date">

									<a href="<?php the_permalink(); ?>"><span><i class="fas fa-user"></i><?php echo  get_author_name(); ?></span></a>

									<a title="Date"><span><i class="far fa-clock"></i><?php echo get_the_date('F j, Y'); ?></span></a>

									<a href="<?php the_permalink(); ?>" title="Comments"><span><i class="far fa-comments"></i><?php wp_count_comments('7'); ?></span></a>

									<a href="<?php the_permalink(); ?>" title="Like"><span><i class="fas fa-heart"></i> <?php comments_number( 'No Comments', '1 Comment',  '% Comments'); ?></span></a>

									<a href="<?php the_permalink(); ?>" title="Share It"><span><i class="fas fa-share-alt"></i> 2</span></a>

								</div>

								<?php echo get_the_content(); ?>

								<a href="<?php the_permalink(); ?>" class="mt-20">read more</a>

							</div>

						</div>

					</div>

				</div>

			</div>

			
 <?php
  }
}
?>


			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-20">

				<ul class="pagination float-right">

					<li class="page-item"><a class="page-link" href="#">Previous</a></li>

					<li class="page-item active"><a class="page-link" href="#">1</a></li>

					<li class="page-item"><a class="page-link" href="#">2</a></li>

					<li class="page-item"><a class="page-link" href="#">3</a></li>

					<li class="page-item"><a class="page-link" href="#">Next</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>