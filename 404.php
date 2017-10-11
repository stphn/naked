<?php get_header(); ?>

	<div class="section">

		<div class="row">

			<div class="column medium-8">

				<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<article id="post-not-found" class="hentry cf">

						<header class="article-header">

							<h1><?php _e( 'Epic 404 - Article Not Found', 'nakedtheme' ); ?></h1>

						</header>

						<section class="entry-content">

							<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'nakedtheme' ); ?></p>

						</section>

						<section class="search">

							<p><?php get_search_form(); ?></p>

						</section>

						<footer class="article-footer">

							<p><?php _e( 'This is the 404.php template.', 'nakedtheme' ); ?></p>

						</footer>

					</article>

				</main>

			</div><!-- end of .column ! -->

			<div class="column medium-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- end of .row ! -->
	</div>

<?php get_footer(); ?>