---
title: "ChatGPTとCodexの役割分担。相談AIと作業AIを分ける"
description: "ChatGPTは方針整理とレビュー、Codexはファイル作成と検証。人間が判断と本番操作を担当するための役割分担。"
date: "2026-05-27"
category: "Tools"
tags: ["ChatGPT", "Codex", "Guardrails", "Human Approval"]
draft: false
readTime: "8 min"
slug: "chatgpt-codex-role-split"
featured: true
---

ChatGPTとCodexは、どちらもAIですが役割が違います。同じものとして扱うと、相談で終わったり、逆に実行範囲を広げすぎたりします。

AI業務改善では、相談AIと作業AIを分けることが重要です。

- ChatGPT = 方針整理、プロンプト設計、レビュー
- Codex = ファイル作成、編集、build、commit、push
- 人間 = 判断、公開、本番操作、最終確認

この役割分担を決めると、AIに任せる作業が安定します。

## ChatGPTは方針整理に向いている

ChatGPTは、曖昧な相談を整理するのに向いています。

例えば次のような作業です。

- 目的を言語化する
- 作業方針を比較する
- 記事構成を作る
- Promptを改善する
- チェックリストを作る
- 実装前の論点を整理する

ChatGPTは、会話しながら考える相手として使いやすいAIです。まだファイルを触る段階ではない相談、方針決め、レビューに向いています。

ただし、ChatGPTの回答をそのまま実装に使うと抜け漏れが出ることがあります。実務では、回答をPrompt、Skill、チェックリストとして保存し、次の作業へ渡します。

## Codexは作業AIとして使う

Codexは、リポジトリを読み、ファイルを編集し、コマンドを実行できる開発Agentです。

このサイトでは、Codexに次の作業を任せました。

- Astro構成の作成
- Reactコンポーネントの追加
- CSS調整
- Markdown記事追加
- `npm run build`
- git status
- git commit
- git push

Codexの強みは、相談で止まらず成果物まで進められることです。実際にファイルが変わり、buildが通り、commitが残ります。

詳しい実践ログは [CodexでAstroサイトを作った流れ](/articles/codex-astro-site-build-log/) にまとめています。

## 人間は判断と本番操作を担当する

人間が担当すべき作業もあります。

- 本番サーバーへアップロードする
- お名前.com管理画面を操作する
- DNSを変更する
- Google Search Consoleへログインする
- 顧客情報や秘密情報を扱う
- 公開するか最終判断する

これらは、AIが勝手に進めるべきではありません。

AIが作った成果物を確認し、公開するか判断し、本番操作を行うのは人間です。これは単なる慎重さではなく、実務上の責任分界です。

## Guardrailsを先に書く

Codexのような作業AIを使うときは、最初にGuardrailsを書きます。

Guardrailsとは、AIにやってよいこと、やってはいけないことを明確にするルールです。

このサイトでは、次のようなルールを置いています。

- 本番サーバーへ接続しない
- お名前.com管理画面へログインしない
- FTP / SSH / DBへ接続しない
- Google Search Consoleへログインしない
- `.env` や認証情報を作らない
- 秘密情報を読まない、保存しない
- `dist` を本番へ自動アップロードしない

具体的に書くほど、AIの作業は安全になります。

## Human Approvalを作業に入れる

Human Approvalは、人間の承認が必要なポイントです。

例えば、Codexがrelease zipを作るところまでは任せても、本番アップロードは人間が行います。Search Console登録手順をdocsに書くところまでは任せても、Googleアカウントへのログインは人間が行います。

このように境界を作ると、AIを強く使いながらも危険な操作を避けられます。

## ChatGPTからCodexへ渡す流れ

実務では、次の流れが扱いやすいです。

1. ChatGPTで目的と方針を整理する
2. 作業手順と禁止事項をPromptにする
3. Codexにリポジトリ内の作業を任せる
4. Codexがbuildと差分確認を行う
5. 人間が内容を確認する
6. 人間が本番操作を行う

この流れにすると、ChatGPTとCodexが競合しません。相談AIと作業AIを分けて使えます。

## 役割分担を保存する

一度うまくいった役割分担は、Obsidianなどに保存します。

保存する項目は次のようなものです。

- ChatGPTに相談する内容
- Codexに任せる作業
- 人間が承認する箇所
- 禁止事項
- buildや確認コマンド
- 公開手順

保存しておくと、次のサイト更新や記事追加でも同じ流れを再利用できます。

## 次に読む記事

- [ObsidianでAI成果物を保存再利用する方法](/articles/obsidian-ai-output-reuse/)
- [PromptSkillAgentの違いを実務目線で整理する](/articles/prompt-skill-agent-practical-difference/)
- [AIに聞いて終わりをやめる。業務改善AIラボの考え方](/articles/stop-asking-start-building-ai-operations/)
