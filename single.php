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

<!-- latest-blog-area-start -->

<div class="blog-area pt-100 pb-70">

	<div class="container">

		<div class="row">

			<div class="col-xl-9 col-lg-8">

				<div class="blog-wrapper cleafix mb-60">

					<div class="blog-thumb mb-20">

						<!-- <img src="<?php echo get_theme_file_uri('/img/blog.jpg') ?>" alt=""> -->
						<img src="<?php echo the_post_thumbnail_url(); ?>"/>

					</div>

					<div class="blog-content">

						<div class="blog-title">

							<h3><?php echo get_field('post_title'); ?></h3>

						</div>

						<div class="blog-d-meta">

							<a href="<?php the_permalink(); ?>"><span><i class="fas fa-user"></i><?php echo  get_author_name(); ?></span></a>

							<a title="Date"><span><i class="far fa-clock"></i><?php echo get_the_date('F j, Y'); ?></span></a>

							<a href="<?php the_permalink(); ?>" title="Comments"><span><i class="far fa-comments"></i><?php comments_number( 'No Comments', '1 Comment',  '% Comments'); ?></span></a>

							<a href="<?php the_permalink(); ?>" title="Like"><span><i class="fas fa-heart"></i> 10</span></a>

						</div>

						<?php echo get_field('description'); ?>
					</div>

					<div class="row mt-20">

						<div class="col-xl-12 col-lg-12 col-md-12">

							<div class="blog-share-icon text-left">

								<span>Share: </span>

								<a href="#">

									<i class="fab fa-facebook-f"></i>

								</a>

								<a href="#">

									<i class="fab fa-twitter"></i>

								</a>

								<a href="#">

									<i class="fab fa-google-plus-g"></i>

								</a>

								<a href="#">

									<i class="fab fa-instagram"></i>

								</a>

							</div>

						</div>

					</div>

				</div>

				<div class="post-comments">

					<div class="section-title mb-50">

						<h3>Recent Comments</h3>

					</div>

					<div class="latest-comments">

						<ul>

							<li>

								<div class="comments-box">

									<div class="comments-avatar">

										<img src="img/user.png" alt="">

									</div>

									<div class="comments-text">

										<div class="avatar-name">

											<h5>Omar Elnagar</h5>

											<span>10 Min ago</span>

										</div>

										<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper

										the faster than lightning. No one you see is smarter than he</p>

										<a href="#">Reply</a>

									</div>

								</div>

								<ul class="comments-reply">

									<li>

										<div class="comments-box">

											<div class="comments-avatar">

												<img src="img/user.png" alt="">

											</div>

											<div class="comments-text">

												<div class="avatar-name">

													<h5>Omar Elnagar</h5>

													<span>10 Min ago</span>

												</div>

												<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper

												the faster than lightning. No one you see is smarter than he</p>

												<a href="#">Reply</a>

											</div>

										</div>

									</li>

								</ul>

							</li>

							<li>

								<div class="comments-box">

									<div class="comments-avatar">

										<img src="img/user.png" alt="">

									</div>

									<div class="comments-text">

										<div class="avatar-name">

											<h5>Omar Elnagar</h5>

											<span>10 Min ago</span>

										</div>

										<p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper

										the faster than lightning. No one you see is smarter than he</p>

										<a href="#">Reply</a>

									</div>

								</div>

							</li>

						</ul>

					</div>

				</div>

				<div class="post-comments-form pt-40 mb-50">

					<div class="section-title mb-30">

						<h3>Post A Comment</h3>

					</div>

					<form action="#">

						<div class="row">

							<div class="col-xl-4">

								<input type="text" placeholder="Your Name">

							</div>

							<div class="col-xl-4">

								<input type="text" placeholder="Your Email">

							</div>

							<div class="col-xl-4">

								<input type="text" placeholder="Website">

							</div>

							<div class="col-xl-12">

								<textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments"></textarea>

								<button class="btn theme-btn btn-hover" type="submit">Submit</button>

							</div>

						</div>

					</form>

				</div>

			</div>

			<div class="col-xl-3 col-lg-4 mb-30">

				<div class="widget mb-60">

					<h6 class="widget-title">Recent News</h6>

					

						


				<?php
				    $args = array(
				        'post_type' => 'post',
				        //'cat' => 6,
				        'posts_per_page' => -1
				    );

				    $post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
				    $post_query->the_post();
				    ?>

				    <ul class="recent-posts">
				    <li>

							<div class="widget-posts-image">

								<a href="news-details.php">

									<img src="<?php echo the_post_thumbnail_url(); ?>"/>

								</a>

							</div>

							<div class="widget-posts-body">

								<h6 class="widget-posts-title">

									<a href="news-details.php"><?php echo wp_trim_words(get_field('post_title'),2); ?></a>

								</h6>

								<div class="widget-posts-meta"><?php echo get_the_date('F j, Y'); ?></div>

							</div>
					</li>

				</ul>

				<?php
				  }
				}
				?>
			

				</div>

			</div>

		</div>

	</div>

</div>

<!-- latest-blog-area-end -->

<?php get_footer();?>