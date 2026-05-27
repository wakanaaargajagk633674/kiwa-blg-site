<?php
/**
 * Title: Hero — Kiwa
 * Slug: kiwa-personal-media/hero-kiwa
 * Categories: kiwa-sections
 * Description: トップページHero。2カラム：左コピー・右浮遊カード。
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"className":"kiwa-hero","style":{"color":{"background":"#fffaf4"},"spacing":{"padding":{"top":"clamp(5rem,11vw,9rem)","bottom":"clamp(4rem,9vw,7.5rem)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group kiwa-hero" style="background-color:#fffaf4;">

	<!-- wp:columns {"className":"kiwa-hero__grid","style":{"spacing":{"blockGap":{"top":"3rem","left":"clamp(2.5rem,5vw,5rem)"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns kiwa-hero__grid">

		<!-- wp:column {"width":"55%","className":"kiwa-hero__content"} -->
		<div class="wp-block-column kiwa-hero__content" style="flex-basis:55%">

			<!-- wp:group {"className":"kiwa-hero__eyebrow","style":{"spacing":{"margin":{"bottom":"1.75rem"}}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap","columnGap":"0.75rem"}} -->
			<div class="wp-block-group kiwa-hero__eyebrow" style="margin-bottom:1.75rem;">
				<!-- wp:separator {"className":"kiwa-hero__line","style":{"color":{"background":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity kiwa-hero__line" style="background-color:#b89b72;" />
				<!-- /wp:separator -->
				<!-- wp:paragraph {"style":{"color":{"text":"#b89b72"},"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.14em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#b89b72;font-size:0.75rem;font-weight:700;letter-spacing:0.14em;margin:0;">PERSONAL MEDIA</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"className":"kiwa-hero__heading","style":{"typography":{"fontWeight":"800","lineHeight":"1.22","fontSize":"clamp(1.875rem,5.5vw,3.5rem)","letterSpacing":"-0.03em"},"color":{"text":"#1d2433"},"spacing":{"margin":{"bottom":"1.75rem"}}}} -->
			<h1 class="kiwa-hero__heading" style="color:#1d2433;font-size:clamp(1.875rem,5.5vw,3.5rem);font-weight:800;line-height:1.22;letter-spacing:-0.03em;margin-bottom:1.75rem;">法律上の家族だけでは語れない、<br>「そばにいてほしい人」のこと。</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kiwa-hero__sub","style":{"color":{"text":"#1d2433"},"typography":{"fontSize":"clamp(1rem,2vw,1.1875rem)","lineHeight":"1.85"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<p class="kiwa-hero__sub" style="color:#1d2433;font-size:clamp(1rem,2vw,1.1875rem);line-height:1.85;margin-bottom:1.25rem;">40代ゲイとして、恋愛、パートナーシップ、家族のかたち、終活、AIとWebによる働き方を考える個人メディアです。</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"kiwa-hero__body","style":{"color":{"text":"#667085"},"typography":{"fontSize":"clamp(0.9375rem,1.6vw,1.0625rem)","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"2.5rem"}}}} -->
			<p class="kiwa-hero__body" style="color:#667085;font-size:clamp(0.9375rem,1.6vw,1.0625rem);line-height:1.9;margin-bottom:2.5rem;">人生の終わりに関わる仕事をしながら、これからの生き方、働き方、つながり方を少しずつ整えています。</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","columnGap":"1rem","rowGap":"0.75rem"}} -->
			<div class="wp-block-buttons">

				<!-- wp:button {"className":"kiwa-btn-primary","style":{"color":{"background":"#202a44","text":"#fffaf4"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"1.875rem","right":"1.875rem"}},"typography":{"fontWeight":"600","fontSize":"0.9375rem","letterSpacing":"0.02em"}}} -->
				<div class="wp-block-button kiwa-btn-primary"><a class="wp-block-button__link wp-element-button" href="/wp/about/" style="background-color:#202a44;color:#fffaf4;border-radius:8px;padding:0.875rem 1.875rem;font-weight:600;font-size:0.9375rem;letter-spacing:0.02em;">さとるんについて読む</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"kiwa-btn-secondary","style":{"color":{"background":"transparent","text":"#202a44"},"border":{"radius":"8px","color":"rgba(32,42,68,0.28)","width":"1.5px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"1.625rem","right":"1.625rem"}},"typography":{"fontWeight":"500","fontSize":"0.9375rem"}}} -->
				<div class="wp-block-button kiwa-btn-secondary"><a class="wp-block-button__link wp-element-button" href="/wp/blog/" style="background-color:transparent;color:#202a44;border-radius:8px;border:1.5px solid rgba(32,42,68,0.28);padding:0.875rem 1.625rem;font-weight:500;font-size:0.9375rem;">最新記事を見る</a></div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","className":"kiwa-hero__visual-col"} -->
		<div class="wp-block-column kiwa-hero__visual-col" style="flex-basis:45%">

			<!-- wp:group {"className":"kiwa-hero__visual","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group kiwa-hero__visual">

				<!-- wp:group {"className":"kiwa-float-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.375rem","bottom":"1.375rem","left":"1.375rem","right":"1.375rem"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group kiwa-float-card" style="background-color:#ffffff;border-radius:14px;padding:1.375rem;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.14em"},"color":{"text":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.6875rem;font-weight:700;letter-spacing:0.14em;color:#b89b72;margin:0;">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","lineHeight":"1.4"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.875rem;font-weight:600;line-height:1.4;color:#1d2433;margin:0;">40代ゲイの人生設計</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","lineHeight":"1.65"},"color":{"text":"#667085"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.75rem;line-height:1.65;color:#667085;margin:0;">恋愛・パートナーシップ・孤独・終活</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kiwa-float-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.375rem","bottom":"1.375rem","left":"1.375rem","right":"1.375rem"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group kiwa-float-card" style="background-color:#ffffff;border-radius:14px;padding:1.375rem;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.14em"},"color":{"text":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.6875rem;font-weight:700;letter-spacing:0.14em;color:#b89b72;margin:0;">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","lineHeight":"1.4"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.875rem;font-weight:600;line-height:1.4;color:#1d2433;margin:0;">終わりから考える生き方</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","lineHeight":"1.65"},"color":{"text":"#667085"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.75rem;line-height:1.65;color:#667085;margin:0;">後悔しない生き方・人生の整え方</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kiwa-float-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.375rem","bottom":"1.375rem","left":"1.375rem","right":"1.375rem"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group kiwa-float-card" style="background-color:#ffffff;border-radius:14px;padding:1.375rem;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.14em"},"color":{"text":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.6875rem;font-weight:700;letter-spacing:0.14em;color:#b89b72;margin:0;">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","lineHeight":"1.4"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.875rem;font-weight:600;line-height:1.4;color:#1d2433;margin:0;">AIとWebの働き方</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","lineHeight":"1.65"},"color":{"text":"#667085"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.75rem;line-height:1.65;color:#667085;margin:0;">AI活用・Web制作・副業の整え方</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kiwa-float-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.375rem","bottom":"1.375rem","left":"1.375rem","right":"1.375rem"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group kiwa-float-card" style="background-color:#ffffff;border-radius:14px;padding:1.375rem;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.14em"},"color":{"text":"#b89b72"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.6875rem;font-weight:700;letter-spacing:0.14em;color:#b89b72;margin:0;">04</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","lineHeight":"1.4"},"color":{"text":"#1d2433"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.875rem;font-weight:600;line-height:1.4;color:#1d2433;margin:0;">言葉でつくる個人メディア</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","lineHeight":"1.65"},"color":{"text":"#667085"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="font-size:0.75rem;line-height:1.65;color:#667085;margin:0;">経験・問い・制作の記録</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
