---
title: "ObsidianでAI成果物を保存再利用する方法"
description: "AI回答を使い捨てにせず、raw、research、wiki、prompts、logsに分けて保存し、AI秘書兼スタッフOSの記憶層にする。"
date: "2026-05-27"
category: "Knowledge"
tags: ["Obsidian", "AI成果物", "Prompt", "Skill", "ログ"]
draft: false
readTime: "9 min"
slug: "obsidian-ai-output-reuse"
featured: true
---

AIの回答は便利ですが、そのまま使い捨てにすると資産になりません。毎回同じ質問をして、似た回答を受け取り、また忘れる。この繰り返しでは業務改善につながりにくくなります。

AI業務改善では、AIの回答を保存し、整理し、再利用できる形にします。その記憶層として使いやすいのがObsidianです。

ObsidianはMarkdownで管理できるため、Prompt、Skill、Agent設計、Eval、実践ログを長く残しやすい道具です。

## AI回答を使い捨てにしない

AIとの会話で価値があるのは、最終回答だけではありません。

- うまくいった依頼文
- 失敗した指示
- 修正した条件
- 判断基準
- 出力形式
- 次回使えるチェックリスト

これらを残すと、次回の作業が短くなります。AIに再度説明する時間が減り、作業品質も安定します。

## rawは生ログの置き場

`raw` は、AIとのやり取りをそのまま置く場所です。

最初からきれいに整理しようとすると続きません。まずは、会話ログ、出力、失敗した回答、使えそうな断片を残します。

例:

```text
raw/
  2026-05-27_codex-site-build-log.md
  2026-05-27_chatgpt-article-ideas.md
```

rawの目的は、後から拾えるようにすることです。完璧な整理は不要です。

## researchは調査メモの置き場

`research` は、比較、調査、検討メモを置く場所です。

例えば、ChatGPTとCodexの違い、Astroの静的公開方法、Search Console登録手順、OGP画像仕様などを整理します。

researchには、出典、前提、未確認事項も残します。AIの回答をそのまま信じるのではなく、確認が必要な情報を分けておくことが重要です。

## wikiは確定した知識の置き場

`wiki` は、何度も使う知識を整理した場所です。

rawやresearchから、今後も使う内容だけをwikiへ昇格させます。

例:

```text
wiki/
  astro-static-deploy.md
  codex-guardrails.md
  search-console-sitemap.md
```

wikiに入れる内容は、なるべく短く、実行しやすい形にします。

## promptsは再利用する依頼文の置き場

`prompts` は、再利用するPromptを保存する場所です。

Promptは、その場で作るだけでなく、改善しながら育てます。

保存する項目:

- 目的
- 入力
- 制約
- 出力形式
- 禁止事項
- 確認観点

例:

```text
prompts/
  article-draft.md
  codex-article-addition.md
  pre-public-check.md
```

Promptを保存しておくと、ChatGPTやCodexへ渡す依頼が安定します。

## logsは実践記録の置き場

`logs` は、実際に行った作業を残す場所です。

このサイトであれば、次のようなログを残せます。

- Astro初期構築ログ
- WordPress由来ファイル退避ログ
- release zip作成ログ
- Search Console登録ログ
- OGP PNG化ログ
- 記事追加ログ

ログには、成功したことだけでなく、失敗や注意点も書きます。次回の改善材料になるからです。

## おすすめのフォルダ構成

最初は、次の構成で十分です。

```text
ai-ops-vault/
  raw/
  research/
  wiki/
  prompts/
  skills/
  agents/
  evals/
  logs/
```

最初から細かく分けすぎると続きません。運用しながら増やします。

## AI秘書兼スタッフOSの記憶層にする

AI秘書兼スタッフOSを作るには、AIが出したものを人間が確認し、保存し、次回に戻す場所が必要です。

Obsidianは、その記憶層になります。

ChatGPTで考えたこと、Codexで実行したこと、人間が判断したことをMarkdownで残す。これにより、AI活用が会話履歴ではなく、業務改善の知識ベースになります。

## 再利用するときの注意点

保存したPromptやSkillをそのまま使い回すのは危険な場合があります。

毎回確認する項目:

- 今回の目的に合っているか
- 禁止事項は古くないか
- 使用ツールは変わっていないか
- 本番操作を含んでいないか
- 個人情報や秘密情報を前提にしていないか

再利用は、コピーではなく更新です。

## 次に読む記事

- [AIに聞いて終わりをやめる。業務改善AIラボの考え方](/articles/stop-asking-start-building-ai-operations/)
- [ChatGPTとCodexの役割分担。相談AIと作業AIを分ける](/articles/chatgpt-codex-role-split/)
- [PromptSkillAgentの違いを実務目線で整理する](/articles/prompt-skill-agent-practical-difference/)
