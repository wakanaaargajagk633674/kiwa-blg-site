import { ArrowRight } from "lucide-react";
import { motion } from "motion/react";

type CTASectionProps = {
  title: string;
  text: string;
  primaryHref: string;
  primaryLabel: string;
  secondaryHref?: string;
  secondaryLabel?: string;
};

export default function CTASection({
  title,
  text,
  primaryHref,
  primaryLabel,
  secondaryHref,
  secondaryLabel,
}: CTASectionProps) {
  return (
    <motion.section
      className="cta-section"
      initial={{ opacity: 0, y: 28 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true, margin: "-80px" }}
      transition={{ duration: 0.65, ease: [0.22, 1, 0.36, 1] }}
    >
      <div>
        <p className="section-kicker">Next action</p>
        <h2>{title}</h2>
        <p>{text}</p>
      </div>
      <div className="cta-actions">
        <a className="btn btn-primary" href={primaryHref}>
          {primaryLabel}
          <ArrowRight size={17} aria-hidden="true" />
        </a>
        {secondaryHref && secondaryLabel && (
          <a className="btn btn-secondary" href={secondaryHref}>
            {secondaryLabel}
          </a>
        )}
      </div>
    </motion.section>
  );
}
