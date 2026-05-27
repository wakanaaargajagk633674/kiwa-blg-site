# OGP PNG化計画

## 現状

- 現在のOGP画像: `public/og-image.svg`
- 参照設定: `src/lib/site.ts` の `ogImage`
- 現在値: `/og-image.svg`

## PNG化する理由

- SNSやチャットツールによってはSVG OGP画像の扱いが不安定な場合がある。
- PNGはOGP画像として広く使われており、共有プレビューの互換性を高めやすい。
- 1200 x 630pxの画像にすると、主要SNSのカード表示に合わせやすい。

## 推奨サイズ

```text
1200 x 630px
```

## デザイン案

方向性:

- 暗め背景
- グリッド背景
- ガラス風パネル
- ティールとアンバーをアクセントにする
- 紫グラデーションに寄せない
- 実務感と未来感を両立する

入れるテキスト:

- `AI業務改善ラボ`
- `AIに聞いて終わりをやめる`
- `ChatGPT / Codex / Skill / Agent / Eval`
- `kiwa-blg.com`

レイアウト:

- 左上に小さく `AI OPERATIONS IMPROVEMENT LAB`
- 中央に大きく `AI業務改善ラボ`
- その下にサブコピー
- 下部に主要テーマの短い並び

## 実装手順

1. `public/og-image.png` を作成する。
2. 既存の `public/og-image.svg` は削除せず残す。
3. `src/lib/site.ts` を開く。
4. `ogImage` を `/og-image.svg` から `/og-image.png` に変更する。
5. `npm run build` を実行する。
6. `dist/og-image.png` が生成されることを確認する。
7. 本番公開時は `dist/` の中身だけを手動アップロードする。
8. SNS共有プレビューを確認する。

## BaseLayout側の扱い

`BaseLayout.astro` は `src/lib/site.ts` の `site.ogImage` を使って `og:image` と `twitter:image` を出力している。

そのため、PNGへ切り替える場合は基本的に `src/lib/site.ts` の変更だけでよい。

確認するmeta:

```html
<meta property="og:image" content="https://kiwa-blg.com/og-image.png">
<meta name="twitter:image" content="https://kiwa-blg.com/og-image.png">
```

## 注意点

- PNG画像はリポジトリ内に保存してよい公開画像のみを使う。
- 商標、人物写真、第三者素材を使う場合は権利確認が必要。
- OGP画像を差し替えた後もSNS側のキャッシュが残る場合がある。
