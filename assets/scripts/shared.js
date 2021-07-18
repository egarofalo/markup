import $ from "./jquery";
import "bootstrap";

// Provide access to these variables outside of JavaScript files processed by Webpack
global.$ = global.jQuery = $;
