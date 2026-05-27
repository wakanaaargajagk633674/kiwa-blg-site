export type ArticleFrontmatter = {
  title: string;
  description: string;
  pubDate?: string | Date;
  date?: string | Date;
  category: string;
  tags: string[];
  readTime?: string;
  slug?: string;
  featured?: boolean;
  draft?: boolean;
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

export function getArticleDate(frontmatter: ArticleFrontmatter) {
  return frontmatter.pubDate ?? frontmatter.date ?? new Date();
}

export function articleFromModule(path: string, articleModule: ArticleModule): ArticleEntry {
  const slug = getArticleSlug(path, articleModule.frontmatter.slug);
  const articleDate = getArticleDate(articleModule.frontmatter);

  return {
    ...articleModule.frontmatter,
    pubDate: articleDate,
    slug,
    href: `/articles/${slug}/`,
    dateLabel: formatArticleDate(articleDate),
  };
}

export function sortArticles(articles: ArticleEntry[]) {
  return articles.sort(
    (a, b) => new Date(getArticleDate(b)).getTime() - new Date(getArticleDate(a)).getTime(),
  );
}
