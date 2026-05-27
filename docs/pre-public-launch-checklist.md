# 公開前チェックリスト

## ローカル確認

- [ ] `git status --short --branch` で意図しない差分がない
- [ ] `npm install` 済み
- [ ] `npm run dev` でトップページが表示される
- [ ] スマホ幅でHero、カード、CTA、ヘッダーが崩れていない
- [ ] 横スクロールが出ていない

## Build確認

- [ ] `npm run build` が成功する
- [ ] `dist/index.html` が存在する
- [ ] `dist/_astro/` が存在する
- [ ] `dist/about/index.html` が存在する
- [ ] `dist/articles/index.html` が存在する
- [ ] `dist/codex/index.html` が存在する
- [ ] `dist/contact/index.html` が存在する
- [ ] `dist/prompt-skill-agent/index.html` が存在する
- [ ] `dist/tools/index.html` が存在する

## リンク確認

- [ ] Headerの各リンクが正しい
- [ ] Footerの各リンクが正しい
- [ ] トップページのCTAが正しい
- [ ] Articles一覧から記事詳細へ遷移できる
- [ ] 記事詳細からArticles一覧へ戻れる
- [ ] Contactページに外部送信フォームがない

## SEO / OGP確認

- [ ] 各ページにtitleがある
- [ ] 各ページにdescriptionがある
- [ ] canonical URLが `https://kiwa-blg.com/` 配下になっている
- [ ] `og:title` がある
- [ ] `og:description` がある
- [ ] `og:image` がある
- [ ] `twitter:card` がある
- [ ] 初期OGP画像がSVGのため、PNG本番画像へ差し替えるか判断した

## Sitemap / Robots確認

- [ ] `dist/robots.txt` が存在する
- [ ] `dist/robots.txt` が `https://kiwa-blg.com/sitemap-index.xml` を指している
- [ ] `dist/sitemap-index.xml` が存在する
- [ ] `dist/sitemap-0.xml` が存在する
- [ ] `sitemap-0.xml` に主要ページURLが含まれている

## 秘密情報 / 個人情報確認

- [ ] `.env` を作成していない
- [ ] credentials、secrets、APIキーを保存していない
- [ ] 顧客情報、個人情報を含めていない
- [ ] Contactページに送信処理、DB保存、外部フォーム連携がない

## 本番アップロード前

- [ ] アップロード対象が `dist/` の中身だけである
- [ ] `dist/` フォルダそのものをアップロードしない
- [ ] `_old_wordpress_theme/` をアップロードしない
- [ ] `src/`、`node_modules/`、`.git/`、`docs/`、`release/` をアップロードしない
- [ ] 必要であれば既存公開ディレクトリのバックアップを取る

## 本番アップロード後

- [ ] `https://kiwa-blg.com/` が表示される
- [ ] 主要ページが404にならない
- [ ] CSSとJSが読み込まれている
- [ ] スマホ表示が崩れていない
- [ ] `https://kiwa-blg.com/robots.txt` が表示される
- [ ] `https://kiwa-blg.com/sitemap-index.xml` が表示される
- [ ] `https://kiwa-blg.com/sitemap-0.xml` が表示される
- [ ] OGP確認ツールまたはSNS投稿プレビューで表示を確認する
- [ ] 問題があれば直前バックアップ、または問題のないcommitから再ビルドした `dist/` の中身を再アップロードする
