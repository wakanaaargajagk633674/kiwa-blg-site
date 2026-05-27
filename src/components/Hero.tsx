import { Activity, ArrowRight, Layers, Terminal } from "lucide-react";
import { motion, useReducedMotion } from "motion/react";

const metrics = [
  { label: "相談で終わらせない", value: "業務改善 / 自動化" },
  { label: "成果物を残す", value: "Prompt / Skill / Agent" },
  { label: "再利用へ戻す", value: "Guardrails / Eval / Log" },
];

const signals = [
  "業務をAIに渡せる単位へ分解",
  "実行権限と禁止事項を明確化",
  "成果物を保存し次回の型に変換",
  "評価ログを改善サイクルへ戻す",
];

export default function Hero() {
  const reduceMotion = useReducedMotion();

  return (
    <section className="hero">
      <div className="container hero-layout">
        <div className="hero-copy">
          <motion.p
            className="hero-kicker"
            initial={reduceMotion ? false : { opacity: 0, y: 16 }}
            animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
            transition={{ duration: 0.55 }}
          >
            AI Operations Improvement Lab
          </motion.p>
          <motion.h1
            className="hero-title"
            initial={reduceMotion ? false : { opacity: 0, y: 22 }}
            animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
            transition={{ duration: 0.7, delay: 0.05, ease: [0.22, 1, 0.36, 1] }}
          >
            <span className="hero-title-main">AIに聞いて</span>
            <span>終わり、をやめる。</span>
          </motion.h1>
          <motion.p
            className="hero-lede"
            initial={reduceMotion ? false : { opacity: 0, y: 22 }}
            animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
            transition={{ duration: 0.7, delay: 0.14, ease: [0.22, 1, 0.36, 1] }}
          >
            ChatGPT、Codex、Claude Code、Cursor、Gemini、Obsidianをつなぎ、業務改善、自動化、成果物保存、再利用まで進めるための実践サイトです。
          </motion.p>
          <motion.div
            className="hero-actions"
            initial={reduceMotion ? false : { opacity: 0, y: 22 }}
            animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
            transition={{ duration: 0.7, delay: 0.22, ease: [0.22, 1, 0.36, 1] }}
          >
            <a className="btn btn-primary" href="/prompt-skill-agent/">
              仕組み化の入口へ
              <ArrowRight size={17} aria-hidden="true" />
            </a>
            <a className="btn btn-secondary" href="/articles/">
              実践ログを見る
            </a>
            <a className="btn btn-secondary" href="/en/">
              English
            </a>
          </motion.div>
        </div>

        <motion.div
          className="hero-signal-panel"
          initial={reduceMotion ? false : { opacity: 0, x: 28 }}
          animate={reduceMotion ? undefined : { opacity: 1, x: 0 }}
          transition={{ duration: 0.75, delay: 0.18, ease: [0.22, 1, 0.36, 1] }}
        >
          <div className="signal-header">
            <span>
              <Activity size={16} aria-hidden="true" />
              Workflow Console
            </span>
            <small>static / reusable</small>
          </div>
          <div className="signal-list">
            {signals.map((signal, index) => (
              <motion.div
                className="signal-item"
                key={signal}
                initial={reduceMotion ? false : { opacity: 0, y: 12 }}
                animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
                transition={{ duration: 0.5, delay: 0.35 + index * 0.08 }}
              >
                <span className="signal-index">0{index + 1}</span>
                <span>{signal}</span>
              </motion.div>
            ))}
          </div>
          <div className="signal-footer">
            <span>
              <Terminal size={15} aria-hidden="true" />
              codex task
            </span>
            <span>
              <Layers size={15} aria-hidden="true" />
              saved asset
            </span>
          </div>
        </motion.div>
      </div>

      <div className="container hero-metrics" aria-label="サイトの扱う領域">
        {metrics.map((metric) => (
          <motion.div
            className="metric"
            key={metric.label}
            initial={reduceMotion ? false : { opacity: 0, y: 18 }}
            animate={reduceMotion ? undefined : { opacity: 1, y: 0 }}
            transition={{ duration: 0.55, delay: 0.35 }}
          >
            <span>{metric.label}</span>
            <strong>{metric.value}</strong>
          </motion.div>
        ))}
      </div>
    </section>
  );
}
