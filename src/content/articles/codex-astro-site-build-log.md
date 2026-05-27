---
title: "CodexでAstroサイトを作った流れ"
description: "WordPress削除後にAstro + React + Motionへ移行し、commit、push、release zip、お名前.com公開まで進めた実践ログ。"
date: "2026-05-27"
category: "Codex"
tags: ["Codex", "Astro", "React", "Motion", "公開ログ"]
draft: false
readTime: "10 min"
slug: "codex-astro-site-build-log"
featured: true
---

kiwa-blg.com は、WordPressを削除したあと、Astro + React + Motion + TypeScript の静的サイトとして作り直しました。

この作業では、Codexを開発Agentとして使いました。人間が目的、禁止事項、公開判断を決め、Codexがリポジトリ内のファイル作成、編集、build、commit、pushまで担当する流れです。

この記事では、実際にどの順番で進めたかを整理します。

## まずWordPress由来ファイルを退避した

最初のリポジトリには、WordPressテーマ由来のファイルが残っていました。

- `functions.php`
- `theme.json`
- `templates/`
- `parts/`
- `patterns/`
- WordPressテーマ用の `style.css`
- `assets/`

削除はせず、`_old_wordpress_theme/` に退避しました。これは、後から確認できる状態を残しつつ、Astro側の構成と混同しないようにするためです。

公開前の整理では、削除より退避のほうが安全です。特に初回公開では、何が必要だったか後から確認できる状態を残しておく価値があります。

## Astro + React + Motion構成を作った

次に、静的サイト用の構成を作りました。

- Astro
- React
- Motion
- TypeScript
- Markdown / MDX記事
- `@astrojs/sitemap`

サーバー常駐アプリ、SSR、DB、API Routesは使っていません。お名前.comレンタルサーバーへは、最終的に `dist/` の中身だけをアップロードする前提です。

この方針により、運用はかなり単純になります。buildして、静的ファイルを置くだけです。

## Codexに任せたこと

Codexに任せた主な作業は次の通りです。

- 現在のフォルダ状態の確認
- Astro関連ファイルの作成
- Reactコンポーネントの追加
- Motion演出の追加
- ページ作成
- Markdown / MDX記事の追加
- global CSSの整備
- `npm run build` の実行
- エラー修正
- git commit
- remoteがある場合のpush
- release zip作成
- 公開手順書の作成

Codexは、リポジトリ内の作業に向いています。既存ファイルを読み、差分を作り、buildで検証し、commitまで進められます。

## 人間が判断したこと

一方で、人間が判断する作業も残しました。

- 本番サーバーへアップロードするか
- お名前.com管理画面を操作するか
- DNSやSearch Consoleを設定するか
- どの内容を公開するか
- 公開後に何を優先改善するか

AIに任せる範囲と、人間が判断する範囲を分けたことが重要です。

この役割分担は [ChatGPTとCodexの役割分担](/articles/chatgpt-codex-role-split/) でも整理しています。

## buildとcommitを作業単位にした

作業の区切りごとに `npm run build` を実行しました。

Astroでは、Markdownのfrontmatter、動的記事ページ、React island、sitemap生成などがbuild時に検出されます。画面で見えていても、静的生成が失敗することがあります。

そのため、変更後は必ずbuildを通します。

このサイトでは、buildが通ったらcommitする運用にしました。commit messageは作業内容が分かる粒度にします。

## release zipを作った

お名前.comへ手動アップロードするために、`release/kiwa-blg-dist.zip` を作成しました。

重要なのは、zipに `dist/` フォルダ本体を入れないことです。zipには `dist/` の中身を直接入れます。

正しい例:

```text
index.html
_astro/
about/
articles/
robots.txt
sitemap-index.xml
```

避ける例:

```text
dist/
  index.html
```

公開ディレクトリに `dist` が一段残ると、トップページが想定どおり表示されない可能性があります。

## お名前.com公開は手動で行った

Codexは本番サーバーへ接続していません。

お名前.comへのアップロードは、人間が手動で行いました。これは安全上の方針です。

本番サーバー、DNS、Search Console、Googleアカウントなどは、AIに操作させず、人間が確認しながら進めます。

## 注意点

Codexでサイトを作るときは、次の点を明確にする必要があります。

- 触ってよいディレクトリ
- 触ってはいけないファイル
- 実行してよいコマンド
- 本番接続の禁止
- 秘密情報を扱わないこと
- buildを完了条件にすること
- commit前にgit statusを見ること

この制約がないと、作業範囲が広がりすぎます。

## 今回の学び

Codexは、静的サイト制作と相性が良いです。特にAstroのようにbuildで成果物を確認できる構成では、作業、検証、commitを一つの流れにできます。

一方で、本番公開そのものは人間が行うほうが安全です。Codexにはリポジトリ内の作業を任せ、人間は本番操作と最終判断を担当する。この分担が現実的です。

## 次に読む記事

- [ChatGPTとCodexの役割分担。相談AIと作業AIを分ける](/articles/chatgpt-codex-role-split/)
- [AIに聞いて終わりをやめる。業務改善AIラボの考え方](/articles/stop-asking-start-building-ai-operations/)
- [ObsidianでAI成果物を保存再利用する方法](/articles/obsidian-ai-output-reuse/)
