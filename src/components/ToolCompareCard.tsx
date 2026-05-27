import {
  AlertTriangle,
  CheckCircle2,
  Code2,
  MessageSquare,
  Notebook,
  Search,
  Sparkles,
  Terminal,
  Wrench,
} from "lucide-react";
import { motion } from "motion/react";

const iconMap = {
  Code2,
  MessageSquare,
  Notebook,
  Search,
  Sparkles,
  Terminal,
  Wrench,
};

type ToolCompareCardProps = {
  name: string;
  role: string;
  bestFor: string;
  strengths: string[];
  cautions: string[];
  icon: keyof typeof iconMap | string;
  accent: "teal" | "amber" | "blue" | "steel";
};

export default function ToolCompareCard({
  name,
  role,
  bestFor,
  strengths,
  cautions,
  icon,
  accent,
}: ToolCompareCardProps) {
  const Icon = iconMap[icon as keyof typeof iconMap] ?? Sparkles;

  return (
    <motion.article
      className={`tool-card accent-${accent}`}
      whileHover={{ y: -6 }}
      transition={{ type: "spring", stiffness: 260, damping: 22 }}
    >
      <div className="tool-card-head">
        <div className="card-icon">
          <Icon size={20} strokeWidth={1.8} />
        </div>
        <div>
          <p className="card-eyebrow">Tool profile</p>
          <h3>{name}</h3>
        </div>
      </div>
      <p>{role}</p>
      <div className="tool-best">
        <span>Best for</span>
        <strong>{bestFor}</strong>
      </div>
      <div className="tool-lists">
        <div>
          <h4>Strength</h4>
          <ul>
            {strengths.map((item) => (
              <li key={item}>
                <CheckCircle2 size={15} aria-hidden="true" />
                <span>{item}</span>
              </li>
            ))}
          </ul>
        </div>
        <div>
          <h4>Guardrail</h4>
          <ul>
            {cautions.map((item) => (
              <li key={item}>
                <AlertTriangle size={15} aria-hidden="true" />
                <span>{item}</span>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </motion.article>
  );
}
