# Google Search Console登録手順

この手順は、kiwa-blg.com をGoogle Search Consoleへ登録し、sitemapを送信するための手動作業メモです。
AgentはGoogleアカウント、お名前.com管理画面、本番サーバーへログインしません。

参考:

- Google Search Console Help: Add a website property to Search Console  
  https://support.google.com/webmasters/answer/34592
- Google Search Console Help: Verify your site ownership  
  https://support.google.com/webmasters/answer/9008080
- Google Search Console Help: Top tasks for Search Console users  
  https://support.google.com/webmasters/answer/10351509

## 推奨方針

可能なら `Domain property` で登録する。

理由:

- `kiwa-blg.com` 全体をまとめて扱える
- `https://kiwa-blg.com/`、`http://kiwa-blg.com/`、`www` などの差分をまとめやすい
- URL-prefix propertyよりプロパティ分割が少ない

ただし、Domain propertyの確認はDNSレコード確認が必要。
DNS編集が難しい場合は `URL-prefix property` で `https://kiwa-blg.com/` を登録する。

## Domain propertyで登録する場合

1. Google Search Consoleを開く。
2. プロパティ追加を選ぶ。
3. `Domain` を選ぶ。
4. ドメインに `kiwa-blg.com` を入力する。
5. Googleが表示するDNS TXTレコードをコピーする。
6. お名前.com側で、`kiwa-blg.com` のDNS TXTレコードとして追加する。
7. DNS反映後、Search Consoleで所有権確認を実行する。
8. 確認できたら、左メニューの `Sitemaps` を開く。
9. sitemapとして `sitemap-index.xml` を送信する。
10. ステータスが成功になるか確認する。

注意:

- DNS TXTレコードはSearch Console所有権確認に使うため、削除しない。
- DNS反映には時間がかかる場合がある。
- AgentにDNS値やGoogleアカウント情報を渡さない。

## URL-prefix propertyで登録する場合

1. Google Search Consoleを開く。
2. プロパティ追加を選ぶ。
3. `URL prefix` を選ぶ。
4. URLに `https://kiwa-blg.com/` を入力する。
5. Search Consoleが提示する確認方法から、使う方法を選ぶ。
6. HTMLファイル確認を使う場合は、Googleが提示する確認ファイルを `public/` に置き、`npm run build` 後に `dist/` の中身を再アップロードする。
7. HTML meta tag確認を使う場合は、共通Layoutへmeta tagを入れ、`npm run build` 後に `dist/` の中身を再アップロードする。
8. 所有権確認後、`Sitemaps` で `sitemap-index.xml` を送信する。

注意:

- HTML確認ファイルやmeta tagは所有権確認用の公開トークンとして扱う。
- 使う場合は、公開してよいことを理解したうえで追加する。
- 認証情報、APIキー、Googleアカウント情報はリポジトリへ保存しない。

## 送信するsitemap

送信値:

```text
sitemap-index.xml
```

確認URL:

```text
https://kiwa-blg.com/sitemap-index.xml
https://kiwa-blg.com/sitemap-0.xml
```

`robots.txt` でも以下を指定済み。

```text
Sitemap: https://kiwa-blg.com/sitemap-index.xml
```

## 登録後に見る項目

- Sitemapsの送信結果
- Pages / Indexingの状態
- URL Inspectionでトップページを検査
- Performanceの初期データ
- Core Web Vitals
- Mobile Usabilityに相当するページ体験系レポート

公開直後はデータがない、または反映に時間がかかる。
数日から数週間の単位で確認する。

## Search Console登録後ログ

登録したら、以下を `docs/public-launch-log.md` へ追記する。

```text
Search Console登録日:
Property type:
Verification method:
Sitemap submitted:
Initial status:
Notes:
```
