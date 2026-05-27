# 公開後チェックログ

## 基本情報

- 対象サイト: https://kiwa-blg.com/
- 公開日: 2026-05-27
- 公開方式: Astro静的ビルドを手動アップロード
- アップロード対象: `release/kiwa-blg-dist.zip` の中身
- 本番サーバー接続: 未実施
- お名前.com管理画面ログイン: 未実施
- FTP / SSH / DB接続: 未実施
- 自動デプロイ: 未実施

## 公開時点の構成

- Astro + React + Motion + TypeScript
- 静的書き出し
- SSRなし
- DBなし
- API Routesなし
- 外部フォーム送信なし
- WordPress由来ファイルは `_old_wordpress_theme/` に退避済み

## リポジトリ側で確認済み

- `npm run build` が成功する
- `dist/index.html` が生成される
- `dist/robots.txt` が生成される
- `dist/sitemap-index.xml` が生成される
- `dist/sitemap-0.xml` が生成される
- `robots.txt` は `https://kiwa-blg.com/sitemap-index.xml` を指す
- `dist/` 直下に主要ページ用ディレクトリが生成される
- OGP設定は共通Layoutに集約済み
- OGP画像は初期状態では `og-image.svg`

## 本番で手動確認する項目

Agentは本番サーバーへ接続しないため、以下はブラウザで手動確認する。

- `https://kiwa-blg.com/` が表示される
- `https://kiwa-blg.com/about/` が表示される
- `https://kiwa-blg.com/articles/` が表示される
- `https://kiwa-blg.com/prompt-skill-agent/` が表示される
- `https://kiwa-blg.com/codex/` が表示される
- `https://kiwa-blg.com/tools/` が表示される
- `https://kiwa-blg.com/contact/` が表示される
- `https://kiwa-blg.com/robots.txt` が表示される
- `https://kiwa-blg.com/sitemap-index.xml` が表示される
- `https://kiwa-blg.com/sitemap-0.xml` が表示される
- CSSとJSが読み込まれている
- スマホ幅でHero、カード、CTAが崩れていない
- Contactページに送信処理や個人情報入力欄がない

## 公開後の注意点

- 初期OGP画像はSVGのため、SNSプレビューで表示が不安定な場合はPNGへ差し替える。
- Google Search Console登録後、sitemap送信とインデックス状況を確認する。
- 追加記事が少ないため、公開直後は検索流入よりも記事追加と内部リンク整備を優先する。
- 本番で問題が出た場合は、リポジトリで修正して `npm run build` し、`dist/` の中身を再アップロードする。
