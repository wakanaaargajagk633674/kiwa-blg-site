# 記事ロードマップ

## 初期記事候補10本

1. AIに聞いて終わりをやめるための業務改善設計
2. ChatGPTとCodexの役割分担
3. Prompt / Skill / Agent の違い
4. AI秘書兼スタッフOSとは何か
5. ObsidianでAI成果物を保存再利用する
6. Codexでサイトを作る流れ
7. Astro + React + Motionで静的サイトを作る
8. AIツール比較: ChatGPT / Claude / Gemini / Cursor / Codex
9. GuardrailsとHuman Approvalの基本
10. 中小企業がAI導入で最初にやること

## まず追加すべき5本

### 1. AIに聞いて終わりをやめるための業務改善設計

- 想定読者: ChatGPTは使っているが、業務改善につながっていない人
- 要点:
  - 相談、実行、保存、再利用を分ける
  - 成果物を残す設計にする
  - 作業ログを次回の改善に使う
- 内部リンク先:
  - `/prompt-skill-agent/`
  - `/articles/`
  - `/tools/`
- CTA: Prompt / Skill / Agent入門へ進む

### 2. ChatGPTとCodexの役割分担

- 想定読者: ChatGPTとCodexをどう使い分けるか迷っている人
- 要点:
  - ChatGPTは整理、設計、文書化に向く
  - Codexはリポジトリを読んで実装、検証、commitまで進める
  - 相談AIと実行Agentを分ける
- 内部リンク先:
  - `/codex/`
  - `/tools/`
  - `/articles/codex-static-site-log/`
- CTA: Codex活用ページへ進む

### 3. Prompt / Skill / Agent の違い

- 想定読者: AI活用を属人的なコツから運用に変えたい人
- 要点:
  - Promptは作業指示
  - Skillは再利用可能な手順
  - Agentは権限と完了条件を持つ実行担当
- 内部リンク先:
  - `/prompt-skill-agent/`
  - `/articles/prompt-skill-agent-basic/`
  - `/tools/`
- CTA: 既存業務を一つ選んでPrompt化する

### 4. ObsidianでAI成果物を保存再利用する

- 想定読者: AIの出力が毎回使い捨てになっている人
- 要点:
  - Prompt、Skill、Agent、EvalをMarkdownで残す
  - フォルダ設計と命名規則を決める
  - 実践ログからテンプレートへ昇格する
- 内部リンク先:
  - `/articles/`
  - `/tools/`
  - `/prompt-skill-agent/`
- CTA: Obsidian用テンプレート記事へ進む

### 5. GuardrailsとHuman Approvalの基本

- 想定読者: AIに任せる範囲と人間の確認点を整理したい人
- 要点:
  - 禁止事項を明確にする
  - 人間承認が必要な作業を分ける
  - Evalで確認項目を固定する
- 内部リンク先:
  - `/prompt-skill-agent/`
  - `/codex/`
  - `/tools/`
- CTA: 業務ごとの承認チェックリストを作る

## 残り5本の位置づけ

### AI秘書兼スタッフOSとは何か

- サイト全体のコンセプト説明記事
- トップページから強くリンクする候補

### Codexでサイトを作る流れ

- このサイト制作ログと相性がよい
- `Codex活用` ページの補足記事にする

### Astro + React + Motionで静的サイトを作る

- 技術記事として検索導線を作る
- 公開構成と静的アップロードの説明を含める

### AIツール比較

- Toolsページの詳細版
- ChatGPT、Claude、Gemini、Cursor、Codex、Obsidianを比較する

### 中小企業がAI導入で最初にやること

- 実務読者向けの入口記事
- 問い合わせ導線を将来つなげやすい

## 運用ルール

- 1記事1テーマに絞る
- 各記事から最低2本の内部リンクを設置する
- 最後にCTAを置く
- 記事ごとにPrompt、Skill、Agent、Tool、Evalなどのタグを付ける
- 実践ログ記事では、失敗条件と検証方法も残す
