<?php

get_header(); ?>

	<div id="primary" class="inner secondpage content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-header">
					<h1 class="page-title">404（ページが見つかりません）</h1>
				</div><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'police' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
