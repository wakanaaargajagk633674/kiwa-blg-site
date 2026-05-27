<?php
/**
 * Title: Latest Posts — Kiwa
 * Slug: kiwa-personal-media/latest-posts
 * Categories: kiwa-sections
 * Description: 最新記事3件を上品なカードで表示するQuery Loopパターン。
 * Viewport Width: 1280
 * Block Types: core/query
 */
?>
<!-- wp:group {"className":"kiwa-section kiwa-section--posts","style":{"color":{"background":"#fffaf4"},"spacing":{"padding":{"top":"clamp(4.5rem,9vw,7.5rem)","bottom":"clamp(5rem,10vw,8.5rem)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group kiwa-section kiwa-section--posts" style="background-color:#fffaf4;">

	<!-- Section header -->
	<!-- wp:group {"className":"kiwa-section-header","style":{"spacing":{"margin":{"bottom":"clamp(2.5rem,5vw,3.75rem)"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"flex-end","flexWrap":"wrap","rowGap":"0.75rem"}} -->
	<div class="wp-block-group kiwa-section-header">

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"kiwa-section-label","style":{"color":{"text":"#b89b72"},"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.18em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="kiwa-section-label" style="color:#b89b72;font-size:0.6875rem;font-weight:700;letter-spacing:0.18em;margin:0;">NOTES &amp; THOUGHTS</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kiwa-section-heading","style":{"typography":{"fontWeight":"700","fontSize":"clamp(1.25rem,2.5vw,1.625rem)","letterSpacing":"-0.02em","lineHeight":"1.3"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0.375rem","bottom":"0"}}}} -->
			<h2 class="kiwa-section-heading" style="font-size:clamp(1.25rem,2.5vw,1.625rem);font-weight:700;letter-spacing:-0.02em;line-height:1.3;color:#1d2433;margin-top:0.375rem;margin-bottom:0;">最新の記録</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"kiwa-view-all","style":{"color":{"text":"#b89b72"},"typography":{"fontSize":"0.8125rem","fontWeight":"500","letterSpacing":"0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="kiwa-view-all" style="color:#b89b72;font-size:0.8125rem;font-weight:500;letter-spacing:0.02em;margin:0;"><a href="/wp/blog/" style="color:inherit;text-decoration:none;" class="kiwa-view-all__link">すべての記事を見る →</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- Query Loop: 3 posts, grid layout -->
	<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"className":"kiwa-post-grid","style":{"spacing":{"blockGap":"clamp(1.25rem,3vw,1.75rem)"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"260px"}} -->

			<!-- Post card -->
			<!-- wp:group {"className":"kiwa-post-card","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px","color":"rgba(32,42,68,0.08)","width":"1px"},"color":{"background":"#ffffff"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group kiwa-post-card" style="background-color:#ffffff;border-radius:20px;border:1px solid rgba(32,42,68,0.08);">

				<!-- Featured image -->
				<!-- wp:post-featured-image {"isLink":true,"height":"160px","style":{"border":{"radius":"20px 20px 0 0"}}} /-->

				<!-- Card body -->
				<!-- wp:group {"className":"kiwa-post-card__body","style":{"spacing":{"padding":{"top":"1.375rem","left":"1.5rem","right":"1.5rem","bottom":"1.625rem"},"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group kiwa-post-card__body">

					<!-- Meta: category + date -->
					<!-- wp:group {"className":"kiwa-post-meta","style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"0.625rem"}}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
					<div class="wp-block-group kiwa-post-meta">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.07em"},"color":{"text":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
						<!-- wp:post-date {"style":{"typography":{"fontSize":"0.6875rem","letterSpacing":"0.04em"},"color":{"text":"#94a3b8"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- Title -->
					<!-- wp:post-title {"isLink":true,"className":"kiwa-post-title","style":{"typography":{"fontWeight":"600","fontSize":"clamp(0.9375rem,1.5vw,1.0625rem)","lineHeight":"1.5"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0","bottom":"0.5rem"}}}} /-->

					<!-- Excerpt -->
					<!-- wp:post-excerpt {"numberOfWords":28,"moreText":"","showMoreOnNewLine":false,"className":"kiwa-post-excerpt","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.85"},"color":{"text":"#667085"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

					<!-- Read more -->
					<!-- wp:paragraph {"className":"kiwa-read-more","style":{"color":{"text":"#b89b72"},"typography":{"fontSize":"0.8125rem","fontWeight":"500","letterSpacing":"0.02em"},"spacing":{"margin":{"top":"0.875rem","bottom":"0"}}}} -->
					<p class="kiwa-read-more" style="color:#b89b72;font-size:0.8125rem;font-weight:500;letter-spacing:0.02em;margin-top:0.875rem;margin-bottom:0;"><a href="#" style="color:inherit;text-decoration:none;">続きを読む →</a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"style":{"color":{"text":"#667085"},"typography":{"fontSize":"0.9375rem","lineHeight":"1.85"},"spacing":{"padding":{"top":"3.5rem","bottom":"3.5rem"}}} } -->
		<p style="color:#667085;font-size:0.9375rem;line-height:1.85;padding-top:3.5rem;padding-bottom:3.5rem;">まだ記事がありません。最初の投稿をお楽しみに。</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
