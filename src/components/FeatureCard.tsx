import {
  Bot,
  BrainCircuit,
  CheckCircle2,
  ClipboardCheck,
  Code2,
  Database,
  FileText,
  Gauge,
  GitBranch,
  Layers,
  Library,
  Mail,
  MessageSquare,
  Notebook,
  Search,
  ShieldCheck,
  Sparkles,
  Terminal,
  Workflow,
  Wrench,
} from "lucide-react";
import { motion } from "motion/react";

const iconMap = {
  Bot,
  BrainCircuit,
  CheckCircle2,
  ClipboardCheck,
  Code2,
  Database,
  FileText,
  Gauge,
  GitBranch,
  Layers,
  Library,
  Mail,
  MessageSquare,
  Notebook,
  Search,
  ShieldCheck,
  Sparkles,
  Terminal,
  Workflow,
  Wrench,
};

type FeatureCardProps = {
  icon: keyof typeof iconMap | string;
  eyebrow?: string;
  title: string;
  description: string;
  items?: string[];
  href?: string;
};

export default function FeatureCard({ icon, eyebrow, title, description, items, href }: FeatureCardProps) {
  const Icon = iconMap[icon as keyof typeof iconMap] ?? Sparkles;
  const content = (
    <>
      <div className="card-icon">
        <Icon size={20} strokeWidth={1.8} />
      </div>
      {eyebrow && <p className="card-eyebrow">{eyebrow}</p>}
      <h3>{title}</h3>
      <p>{description}</p>
      {items && (
        <ul className="card-list">
          {items.map((item) => (
            <li key={item}>
              <CheckCircle2 size={15} aria-hidden="true" />
              <span>{item}</span>
            </li>
          ))}
        </ul>
      )}
    </>
  );

  const className = href ? "feature-card feature-card-link" : "feature-card";

  return (
    <motion.article
      className={className}
      whileHover={{ y: -6 }}
      transition={{ type: "spring", stiffness: 260, damping: 22 }}
    >
      {href ? (
        <a href={href} aria-label={title}>
          {content}
        </a>
      ) : (
        content
      )}
    </motion.article>
  );
}
