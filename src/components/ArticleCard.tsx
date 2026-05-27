import { ArrowRight } from "lucide-react";
import { motion } from "motion/react";

type ArticleCardProps = {
  title: string;
  description: string;
  href: string;
  category: string;
  date: string;
  readTime?: string;
  tags?: string[];
};

export default function ArticleCard({
  title,
  description,
  href,
  category,
  date,
  readTime,
  tags = [],
}: ArticleCardProps) {
  return (
    <motion.article
      className="article-card"
      whileHover={{ y: -6 }}
      transition={{ type: "spring", stiffness: 260, damping: 22 }}
    >
      <a href={href}>
        <div className="article-card-meta">
          <span>{category}</span>
          <time>{date}</time>
          {readTime && <span>{readTime}</span>}
        </div>
        <h3>{title}</h3>
        <p>{description}</p>
        <div className="tag-row">
          {tags.slice(0, 3).map((tag) => (
            <span key={tag}>{tag}</span>
          ))}
        </div>
        <span className="text-link">
          Read log
          <ArrowRight size={16} aria-hidden="true" />
        </span>
      </a>
    </motion.article>
  );
}
