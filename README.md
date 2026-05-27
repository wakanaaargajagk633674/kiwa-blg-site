# AI業務改善ラボ

kiwa-blg.com 用の Astro + React + Motion 静的サイトです。

## Commands

```bash
npm run dev
npm run build
npm run preview
```

## Publish

`npm run build` 後、`dist/` の中身だけを静的ファイルとしてアップロードします。
`dist/` フォルダそのもの、`src/`、`node_modules/`、`.git/`、`_old_wordpress_theme/` はアップロードしません。

サーバー常駐アプリ、SSR、DB、API Routes は使いません。

## SEO

- `public/robots.txt` は `https://kiwa-blg.com/sitemap-index.xml` を指します。
- `@astrojs/sitemap` により `dist/sitemap-index.xml` と `dist/sitemap-0.xml` を生成します。
- OGP画像は初期状態では `public/og-image.svg` です。

## TODO

- 公開前または公開後の改善で、OGP画像をSVG仮画像からPNG本番画像へ差し替える。
- PNGへ差し替える場合は `public/og-image.png` を追加し、`src/lib/site.ts` の `ogImage` を更新する。

## Docs

- [お名前.com公開手順](docs/deploy-onamae.md)
- [公開前チェックリスト](docs/pre-public-launch-checklist.md)
- [公開後作業ログ](docs/public-launch-log.md)
- [公開後改善計画](docs/post-launch-improvement-plan.md)
- [Google Search Console登録手順](docs/search-console-setup.md)
- [OGP PNG化計画](docs/ogp-png-plan.md)
- [記事ロードマップ](docs/article-roadmap.md)
- [About / Contact改善計画](docs/about-contact-improvement-plan.md)

## Archived WordPress Theme

旧WordPressテーマ由来のファイルは削除せず、`_old_wordpress_theme/` に退避しています。
