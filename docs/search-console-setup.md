# Google Search Console登録手順

この手順は、kiwa-blg.com をGoogle Search Consoleへ登録し、sitemapを送信するための手動作業メモです。
Search Console操作は人間が手動で行います。
AgentはGoogle Search Console、お名前.com、本番サーバーへログインしません。

参考:

- Google Search Console Help: Add a website property to Search Console  
  https://support.google.com/webmasters/answer/34592
- Google Search Console Help: Verify your site ownership  
  https://support.google.com/webmasters/answer/9008080
- Google Search Console Help: URL Inspection Tool  
  https://support.google.com/webmasters/answer/9012289

## 今回の推奨

推奨は URLプレフィックスプロパティ。

登録するURL:

```text
https://kiwa-blg.com/
```

理由:

- 今回の公開対象が `https://kiwa-blg.com/` に限定されている
- 静的サイトではHTMLファイルアップロード確認が分かりやすい
- DNSレコード編集を避けても所有権確認できる可能性がある

## 登録手順

1. Google Search Consoleにアクセスする。
2. Googleアカウントでログインする。
3. プロパティ追加を選ぶ。
4. `URLプレフィックス` を選ぶ。
5. `https://kiwa-blg.com/` を入力する。
6. 所有権確認方法を選ぶ。
7. 所有権確認が完了したら、左メニューの `サイトマップ` を開く。
8. `sitemap-index.xml` を送信する。
9. URL検査で `https://kiwa-blg.com/` を確認する。
10. 問題がなければインデックス登録をリクエストする。

## 所有権確認方法の候補

### HTMLファイルアップロード

今回の静的サイトでは最も分かりやすい候補。

手順:

1. Search Consoleが提示するHTML確認ファイルをダウンロードする。
2. そのファイルをリポジトリの `public/` に置く。
3. `npm run build` を実行する。
4. `dist/` の中身だけを本番へ手動アップロードする。
5. Search Consoleで確認を実行する。

注意:

- HTML確認ファイルは公開される所有権確認用ファイル。
- ファイル名を変更しない。
- 確認後も削除しない。
- AgentにGoogleアカウント情報を渡さない。

### HTMLタグ

共通headにmeta tagを追加する方法。

手順:

1. Search Consoleが提示するmeta tagを確認する。
2. `BaseLayout.astro` にmeta tagを追加する。
3. `npm run build` を実行する。
4. `dist/` の中身だけを本番へ手動アップロードする。
5. Search Consoleで確認を実行する。

注意:

- meta tagは所有権確認用の公開トークン。
- 誤って別サイトのtokenを入れない。
- 複数人で管理する場合、既存tokenを上書きしない。

### DNSレコード

Domain propertyを使う場合、またはDNS確認を選ぶ場合の方法。

手順:

1. Search Consoleが提示するDNS TXTレコードを確認する。
2. お名前.com側でDNS TXTレコードを追加する。
3. DNS反映後、Search Consoleで確認を実行する。

注意:

- DNS編集が必要。
- 反映に時間がかかる場合がある。
- Agentはお名前.com管理画面へログインしない。

## sitemap送信

Search Consoleのサイトマップ欄に以下を入力する。

```text
sitemap-index.xml
```

送信対象URL:

```text
https://kiwa-blg.com/sitemap-index.xml
```

補助確認URL:

```text
https://kiwa-blg.com/sitemap-0.xml
```

`robots.txt` では以下を指定済み。

```text
Sitemap: https://kiwa-blg.com/sitemap-index.xml
```

## URL検査

Search ConsoleのURL検査で以下を確認する。

```text
https://kiwa-blg.com/
```

確認する項目:

- GoogleがURLへアクセスできるか
- index可能か
- canonicalが想定どおりか
- robotsでブロックされていないか
- noindexが付いていないか

問題がなければ `インデックス登録をリクエスト` を実行する。

Google公式ヘルプでは、URL検査ツールから単一URLのインデックス登録リクエストができる一方、複数ページや新規サイトではsitemap送信が有効と説明されている。

## 登録後に記録すること

`docs/public-launch-log.md` に以下を追記する。

```text
Search Console登録日:
Property type: URL prefix
Property URL: https://kiwa-blg.com/
Verification method:
Sitemap submitted: https://kiwa-blg.com/sitemap-index.xml
URL inspection:
Indexing request:
Notes:
```
