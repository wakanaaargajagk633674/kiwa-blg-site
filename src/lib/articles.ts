export type ArticleFrontmatter = {
  title: string;
  description: string;
  pubDate: string | Date;
  category: string;
  tags: string[];
  readTime?: string;
  slug?: string;
  featured?: boolean;
};

export type ArticleModule = {
  frontmatter: ArticleFrontmatter;
  default: unknown;
};

export type ArticleEntry = ArticleFrontmatter & {
  slug: string;
  href: string;
  dateLabel: string;
};

export function getArticleSlug(path: string, frontmatterSlug?: string) {
  if (frontmatterSlug) {
    return frontmatterSlug;
  }

  return (
    path
      .split("/")
      .pop()
      ?.replace(/\.(md|mdx)$/i, "") ?? "article"
  );
}

export function formatArticleDate(value: string | Date) {
  const date = new Date(value);

  return new Intl.DateTimeFormat("ja-JP", {
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
  }).format(date);
}

export function articleFromModule(path: string, articleModule: ArticleModule): ArticleEntry {
  const slug = getArticleSlug(path, articleModule.frontmatter.slug);

  return {
    ...articleModule.frontmatter,
    slug,
    href: `/articles/${slug}/`,
    dateLabel: formatArticleDate(articleModule.frontmatter.pubDate),
  };
}

export function sortArticles(articles: ArticleEntry[]) {
  return articles.sort(
    (a, b) => new Date(b.pubDate).getTime() - new Date(a.pubDate).getTime(),
  );
}
