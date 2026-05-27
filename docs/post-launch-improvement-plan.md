# 公開後改善計画

## 優先順位つき改善タスク

1. Google Search Console登録
2. Search Consoleで `sitemap-index.xml` を送信
3. URL検査でトップページを確認し、インデックス登録をリクエスト
4. OGP画像をSVGからPNGへ差し替え
5. SNS共有プレビューを確認
6. 初期記事を5本追加
7. Aboutページに編集方針と信頼情報を追加
8. Contactページに相談メモ導線を追加
9. Articles一覧にカテゴリ別導線を追加
10. 公開後ログを継続更新

## OGP PNG化

現状は `public/og-image.svg` を参照している。
SVGは軽量だが、SNSや外部プレビューサービスによっては表示が不安定になる場合がある。

次の対応:

- `public/og-image.png` を作成
- サイズは 1200 x 630px
- `src/lib/site.ts` の `ogImage` を `/og-image.png` に変更
- `npm run build` を実行
- SNS共有プレビューを確認

詳細は [ogp-png-plan.md](ogp-png-plan.md) に整理する。

## 記事追加

最初に追加すべき記事は、サイトの中心テーマを説明し、内部リンクの軸になるものを優先する。

優先5本:

1. AIに聞いて終わりをやめるための業務改善設計
2. ChatGPTとCodexの役割分担
3. Prompt / Skill / Agent の違い
4. ObsidianでAI成果物を保存再利用する
5. GuardrailsとHuman Approvalの基本

詳細は [article-roadmap.md](article-roadmap.md) に整理する。

## About改善

- サイトの目的をより明確にする
- 誰に向けたサイトかを明記する
- 扱うテーマと扱わないテーマを分ける
- 実践ログ中心の編集方針を追加する
- 秘密情報や個人情報を扱わない方針を明記する

詳細は [about-contact-improvement-plan.md](about-contact-improvement-plan.md) に整理する。

## Contact改善

- まだフォーム処理は作らない
- 相談前に整理する項目を提示する
- Googleフォームやメールリンクを使う場合は、個人情報保護とスパム対策を先に整理する
- 外部送信や保存が発生する場合は、プライバシーポリシー整備後に実装する

## Search Console登録

今回の推奨は URLプレフィックスプロパティ。

- 登録URL: `https://kiwa-blg.com/`
- sitemap送信: `sitemap-index.xml`
- sitemap URL: `https://kiwa-blg.com/sitemap-index.xml`

操作は人間がGoogle Search Consoleにログインして手動で行う。
Agentはログイン、認証、DNS編集、ファイルアップロードを行わない。

詳細は [search-console-setup.md](search-console-setup.md) に整理する。

## SNS共有確認

確認対象:

- X
- Facebook
- LINE
- Slack
- Discord

確認する項目:

- タイトルが表示される
- descriptionが表示される
- OGP画像が表示される
- URLが `https://kiwa-blg.com/` になっている

## 今後の運用ルール

- 記事追加はMarkdown / MDXで行う
- 変更後は必ず `npm run build`
- buildが通ったらcommit
- remoteが設定済みならpush
- 本番反映は `dist/` の中身だけを手動アップロード
- 本番サーバーで直接編集しない
- 秘密情報、APIキー、個人情報はリポジトリに入れない
- 公開後の確認結果は `docs/public-launch-log.md` に追記する
