export type ToolComparison = {
  name: string;
  role: string;
  bestFor: string;
  strengths: string[];
  cautions: string[];
  icon: string;
  accent: "teal" | "amber" | "blue" | "steel";
};

export const toolComparisons: ToolComparison[] = [
  {
    name: "ChatGPT",
    role: "相談、設計、文書化、軽量な自動化の中心に置きやすい汎用AI。",
    bestFor: "業務フローの整理、たたき台作成、日々のAI秘書運用。",
    strengths: ["会話から成果物に落とし込みやすい", "Custom GPTやProjectsで再利用しやすい"],
    cautions: ["実行ログと判断根拠を残す運用が必要", "社外秘データの扱いをルール化する"],
    icon: "MessageSquare",
    accent: "teal",
  },
  {
    name: "Codex",
    role: "リポジトリを読み、実装、検証、コミットまで進める開発Agent。",
    bestFor: "静的サイト、社内ツール、定型処理、品質改善の継続実装。",
    strengths: ["コードベースに沿った変更ができる", "テストと差分確認を作業に組み込める"],
    cautions: ["権限境界と秘密情報の扱いを明確にする", "大きな変更は作業単位を小さく切る"],
    icon: "Terminal",
    accent: "blue",
  },
  {
    name: "Claude Code",
    role: "大きなコード理解、長い文脈、設計相談に強い開発支援環境。",
    bestFor: "既存システムの読み解き、仕様整理、リファクタリング計画。",
    strengths: ["長い文書やコードを扱いやすい", "設計レビューの相手にしやすい"],
    cautions: ["実行前後の差分確認を徹底する", "チーム標準のコマンドに寄せる"],
    icon: "Code2",
    accent: "steel",
  },
  {
    name: "Cursor",
    role: "エディタ内でAI補助を使いながら高速に実装を進める開発環境。",
    bestFor: "小さな修正、UI調整、既存コードを見ながらの反復開発。",
    strengths: ["手元の編集体験と一体化している", "差分を見ながら細かく直せる"],
    cautions: ["広範囲の自動編集はレビューが必要", "プロンプトの再利用設計を別途持つ"],
    icon: "Wrench",
    accent: "amber",
  },
  {
    name: "Gemini",
    role: "Google Workspaceや検索系の文脈と組み合わせやすいAI。",
    bestFor: "調査、表計算、ドキュメント業務、Google環境の補助。",
    strengths: ["Google系ツールと相性がよい", "調査起点のワークフローを作りやすい"],
    cautions: ["出典確認を運用に入れる", "社内データ連携の範囲を制限する"],
    icon: "Search",
    accent: "teal",
  },
  {
    name: "Obsidian",
    role: "Prompt、Skill、Agent設計、実践ログを蓄積する知識ベース。",
    bestFor: "AI運用ナレッジの保存、改善履歴、再利用可能な型の管理。",
    strengths: ["ローカルMarkdownで長期管理しやすい", "リンクで知識を接続しやすい"],
    cautions: ["命名規則とフォルダ設計を決める", "メモで終わらせず実行手順に落とす"],
    icon: "Notebook",
    accent: "steel",
  },
];
