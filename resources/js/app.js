require('./bootstrap');

// Highlight code blocks
import hljs from 'highlight.js';

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
});


import "@ryangjchandler/alpine-clipboard"
require('alpinejs');
