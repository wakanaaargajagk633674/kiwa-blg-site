# お名前.com公開手順

この手順は、kiwa-blg.com を静的サイトとして公開するための手動アップロード手順です。
本リポジトリから本番サーバーへ自動接続、FTP、SSH、DB接続は行いません。

## アップロード対象

アップロードするのは `npm run build` 後に生成される `dist/` の中身だけです。

アップロードしないもの:

- `dist/` フォルダそのもの
- `src/`
- `node_modules/`
- `.git/`
- `.astro/`
- `_old_wordpress_theme/`
- `package.json`
- `package-lock.json`
- `README.md`
- `docs/`
- `release/`

## 事前ビルド

```bash
npm run build
```

成功後、`dist/index.html` が存在することを確認します。

## アップロード後のディレクトリ例

お名前.comレンタルサーバー側の公開ディレクトリ直下に、`dist/` の中身を配置します。

例:

```text
public_html/
  index.html
  favicon.svg
  og-image.svg
  robots.txt
  sitemap-index.xml
  sitemap-0.xml
  _astro/
  about/
  articles/
  codex/
  contact/
  prompt-skill-agent/
  tools/
```

`public_html/dist/index.html` のように、`dist` フォルダが一段残る配置にしないでください。

## 公開後に確認するURL

- `https://kiwa-blg.com/`
- `https://kiwa-blg.com/about/`
- `https://kiwa-blg.com/articles/`
- `https://kiwa-blg.com/articles/codex-static-site-log/`
- `https://kiwa-blg.com/articles/prompt-skill-agent-basic/`
- `https://kiwa-blg.com/articles/ai-tool-stack-operations/`
- `https://kiwa-blg.com/prompt-skill-agent/`
- `https://kiwa-blg.com/codex/`
- `https://kiwa-blg.com/tools/`
- `https://kiwa-blg.com/contact/`

## SEO関連URL

- `https://kiwa-blg.com/robots.txt`
- `https://kiwa-blg.com/sitemap-index.xml`
- `https://kiwa-blg.com/sitemap-0.xml`
- `https://kiwa-blg.com/og-image.svg`

`robots.txt` の `Sitemap:` が `https://kiwa-blg.com/sitemap-index.xml` を指していることを確認します。

## OGP確認

公開後、トップページと主要ページのHTMLに以下が含まれることを確認します。

- `og:title`
- `og:description`
- `og:url`
- `og:image`
- `twitter:card`

初期OGP画像は `public/og-image.svg` です。SNS側でSVGの扱いが不安定な場合は、`public/og-image.png` を作成し、`src/lib/site.ts` の `ogImage` を `/og-image.png` に変更して再ビルドしてください。

## 問題があった場合の戻し方

1. 直前に公開されていたファイル一式のバックアップがある場合は、公開ディレクトリへ再アップロードします。
2. Gitで戻す場合は、問題のないcommitへ戻した作業コピーで `npm install`、`npm run build` を実行します。
3. 生成された `dist/` の中身だけを再アップロードします。
4. ブラウザキャッシュ、サーバーキャッシュ、CDNを使っている場合はキャッシュ影響も確認します。

本番サーバー側で直接ファイル編集して戻す運用は避け、リポジトリで修正してから再ビルド、再アップロードしてください。

## 記事追加後の再アップロード手順

記事を追加または更新した後は、以下の流れで手動反映します。

1. ローカルで `npm run build` を実行する。
2. `dist/articles/` に新しい記事ディレクトリが生成されていることを確認する。
3. `dist/sitemap-index.xml` と `dist/sitemap-0.xml` が更新されていることを確認する。
4. `release/kiwa-blg-dist.zip` を最新の `dist/` の中身で再作成する。
5. zip内に `dist/` フォルダ本体ではなく、`index.html`、`_astro/`、`articles/` などが直下に入っていることを確認する。
6. 人間が `release/kiwa-blg-dist.zip` の中身だけを本番公開ディレクトリへ手動アップロードする。
7. 公開後、追加記事URL、Articles一覧、sitemap、robotsをブラウザで確認する。

今回の初期記事5本追加後は、`dist/` で15ページ生成される状態を基準にします。
