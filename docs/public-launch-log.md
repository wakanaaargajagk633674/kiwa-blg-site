# 公開後作業ログ

## 公開情報

- 公開日: 2026-05-27
- 公開URL: https://kiwa-blg.com/
- サイト名: AI業務改善ラボ
- 公開フェーズ: 初回公開完了、公開後整備フェーズへ移行

## 技術構成

- Astro
- React
- Motion
- TypeScript
- Markdown / MDX記事管理
- 静的書き出し
- SSRなし
- DBなし
- API Routesなし
- 外部フォーム送信なし

## 公開方法

- `npm run build` で `dist/` を生成
- `release/kiwa-blg-dist.zip` を作成
- zip内のファイルをお名前.comレンタルサーバーへ手動アップロード
- アップロード対象は `dist/` の中身のみ
- 本番サーバーへの自動接続、自動デプロイ、FTP / SSH / DB接続は未実施

## release zip

- ファイル: `release/kiwa-blg-dist.zip`
- 形式: `dist/` フォルダ本体ではなく、`dist/` の中身を格納
- Git管理: `release/*.zip` は `.gitignore` 対象

## 確認すべきURL

主要ページ:

- https://kiwa-blg.com/
- https://kiwa-blg.com/about/
- https://kiwa-blg.com/articles/
- https://kiwa-blg.com/prompt-skill-agent/
- https://kiwa-blg.com/codex/
- https://kiwa-blg.com/tools/
- https://kiwa-blg.com/contact/

記事ページ:

- https://kiwa-blg.com/articles/codex-static-site-log/
- https://kiwa-blg.com/articles/prompt-skill-agent-basic/
- https://kiwa-blg.com/articles/ai-tool-stack-operations/

SEO関連:

- https://kiwa-blg.com/robots.txt
- https://kiwa-blg.com/sitemap-index.xml
- https://kiwa-blg.com/sitemap-0.xml
- https://kiwa-blg.com/og-image.svg

## リポジトリ側で確認済み

- `npm run build` 成功
- `dist/index.html` 生成済み
- `dist/robots.txt` 生成済み
- `dist/sitemap-index.xml` 生成済み
- `dist/sitemap-0.xml` 生成済み
- `robots.txt` は `https://kiwa-blg.com/sitemap-index.xml` を指定
- WordPress由来ファイルは `_old_wordpress_theme/` に退避済み

## 現時点の未対応項目

- Google Search Console登録
- Search Consoleでのsitemap送信
- URL検査とインデックス登録リクエスト
- OGP画像のPNG化
- SNS共有プレビュー確認
- 初期記事の追加
- Aboutページの信頼情報強化
- Contactページの相談導線具体化
- 公開後のアクセス状況確認

## 運用メモ

- 本番で問題が出た場合は、リポジトリで修正して `npm run build` し、`dist/` の中身だけを再アップロードする。
- 本番サーバー上で直接ファイル編集しない。
- `.env`、認証情報、APIキー、顧客情報、個人情報はリポジトリに保存しない。

## 初期記事5本追加済み

- 実施日: 2026-05-27
- 対象: 公開直後に必要な初期記事5本
- build結果: 15ページ生成
- release zip: 最新 `dist/` の中身で `release/kiwa-blg-dist.zip` を再作成

追加記事:

- `AIに聞いて終わりをやめる。業務改善AIラボの考え方`
- `PromptSkillAgentの違いを実務目線で整理する`
- `CodexでAstroサイトを作った流れ`
- `ChatGPTとCodexの役割分担。相談AIと作業AIを分ける`
- `ObsidianでAI成果物を保存再利用する方法`

本番反映は人間が手動アップロードで行う。Agentは本番サーバー、FTP、SSH、お名前.com管理画面へ接続しない。
