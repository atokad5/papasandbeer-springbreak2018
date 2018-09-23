import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import build from './build.js';
build();

import hover from './hover.js';
hover();

import lazyLoad from './lazyload.js';
lazyLoad();

import cta from './cta.js';
cta();
