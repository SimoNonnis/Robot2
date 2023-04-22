import { defineConfig } from "vite";
import vitePluginPartial from "vite-plugin-partial";

export default defineConfig({
  plugins: [vitePluginPartial.default()],
});
