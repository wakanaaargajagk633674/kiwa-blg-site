import mdx from "@astrojs/mdx";
import react from "@astrojs/react";
import { defineConfig } from "astro/config";

export default defineConfig({
  site: "https://kiwa-blg.com",
  output: "static",
  integrations: [react(), mdx()],
});
