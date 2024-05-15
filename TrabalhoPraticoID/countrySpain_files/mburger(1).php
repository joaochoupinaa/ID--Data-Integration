/*!
 * mburger CSS v1.3.3
 * mmenujs.com/mburger
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 *
 * License: CC-BY-4.0
 * http://creativecommons.org/licenses/by/4.0/
 */:root{--mb-button-size:60px;--mb-bar-width:0.6;--mb-bar-height:4px;--mb-bar-spacing:10px;--mb-animate-timeout:0.4s}.mburger{background:0 0;border:none;border-radius:0;color:inherit;display:inline-block;position:relative;box-sizing:border-box;height:var(--mb-button-size);padding:0 0 0 var(--mb-button-size);margin:0;line-height:var(--mb-button-size);vertical-align:middle;appearance:none;outline:0;cursor:pointer}.mburger b{display:block;position:absolute;left:calc(var(--mb-button-size) * ((1 - var(--mb-bar-width))/ 2));width:calc(var(--mb-button-size) * var(--mb-bar-width));height:var(--mb-bar-height);border-radius:calc(var(--mb-bar-height)/ 2);background:currentColor;color:inherit;opacity:1}.mburger b:nth-of-type(1){bottom:calc(50% + var(--mb-bar-spacing));transition:bottom .2s ease,transform .2s ease,width .2s ease}.mburger b:nth-of-type(2){top:calc(50% - (var(--mb-bar-height)/ 2));transition:opacity .2s ease}.mburger b:nth-of-type(3){top:calc(50% + var(--mb-bar-spacing));transition:top .2s ease,transform .2s ease,width .2s ease}.mm-wrapper_opened .mburger b:nth-of-type(1){bottom:calc(50% - (var(--mb-bar-height)/ 2));transform:rotate(45deg)}.mm-wrapper_opened .mburger b:nth-of-type(2){opacity:0}.mm-wrapper_opened .mburger b:nth-of-type(3){top:calc(50% - (var(--mb-bar-height)/ 2));transform:rotate(-45deg)}.mburger--collapse b:nth-of-type(1){transition:bottom .2s ease,margin .2s ease,transform .2s ease;transition-delay:.2s,0s,0s}.mburger--collapse b:nth-of-type(2){transition:top .2s ease,opacity 0s ease;transition-delay:.3s,.3s}.mburger--collapse b:nth-of-type(3){transition:top .2s ease,transform .2s ease}.mm-wrapper_opened .mburger--collapse b:nth-of-type(1){bottom:calc(50% - var(--mb-bar-spacing) - var(--mb-bar-height));margin-bottom:calc(var(--mb-bar-spacing) + (var(--mb-bar-height)/ 2));transform:rotate(45deg);transition-delay:calc(var(--mb-animate-timeout) + .1s),calc(var(--mb-animate-timeout) + .3s),calc(var(--mb-animate-timeout) + .3s)}.mm-wrapper_opened .mburger--collapse b:nth-of-type(2){top:calc(50% + var(--mb-bar-spacing));opacity:0;transition-delay:calc(var(--mb-animate-timeout) + 0s),calc(var(--mb-animate-timeout) + .2s)}.mm-wrapper_opened .mburger--collapse b:nth-of-type(3){top:calc(50% - (var(--mb-bar-height)/ 2));transform:rotate(-45deg);transition-delay:calc(var(--mb-animate-timeout) + .3s),calc(var(--mb-animate-timeout) + .3s)}.mburger--spin b:nth-of-type(1){transition-delay:.2s,0s}.mburger--spin b:nth-of-type(2){transition-duration:0s;transition-delay:.2s}.mburger--spin b:nth-of-type(3){transition-delay:.2s,0s}.mm-wrapper_opened .mburger--spin b:nth-of-type(1){transform:rotate(135deg);transition-delay:calc(var(--mb-animate-timeout) + 0s),calc(var(--mb-animate-timeout) + .2s)}.mm-wrapper_opened .mburger--spin b:nth-of-type(2){transition-delay:calc(var(--mb-animate-timeout) + 0s)}.mm-wrapper_opened .mburger--spin b:nth-of-type(3){transform:rotate(225deg);transition-delay:calc(var(--mb-animate-timeout) + 0s),calc(var(--mb-animate-timeout) + .2s)}.mburger--squeeze b:nth-of-type(1){transition-delay:.1s,0s}.mburger--squeeze b:nth-of-type(2){transition-delay:.1s}.mburger--squeeze b:nth-of-type(3){transition-delay:.1s,0s}.mm-wrapper_opened .mburger--squeeze b:nth-of-type(1){transition-delay:calc(var(--mb-animate-timeout) + 0s),calc(var(--mb-animate-timeout) + .1s)}.mm-wrapper_opened .mburger--squeeze b:nth-of-type(2){transition-delay:calc(var(--mb-animate-timeout) + 0s)}.mm-wrapper_opened .mburger--squeeze b:nth-of-type(3){transition-delay:calc(var(--mb-animate-timeout) + 0s),calc(var(--mb-animate-timeout) + .1s)}.mburger--tornado b:nth-of-type(1){transition:bottom .2s ease,transform .2s ease;transition-delay:.2s}.mburger--tornado b:nth-of-type(2){transition:opacity 0s ease,transform .2s ease;transition-delay:.1s,.1s}.mburger--tornado b:nth-of-type(3){transition:top .2s ease,transform .2s ease;transition-delay:0s}.mm-wrapper_opened .mburger--tornado b:nth-of-type(1){transform:rotate(-135deg);transition-delay:calc(var(--mb-animate-timeout) + 0s)}.mm-wrapper_opened .mburger--tornado b:nth-of-type(2){opacity:0;transform:rotate(-135deg);transition-delay:calc(var(--mb-animate-timeout) + .4s),calc(var(--mb-animate-timeout) + .1s)}.mm-wrapper_opened .mburger--tornado b:nth-of-type(3){transform:rotate(-225deg);transition-delay:calc(var(--mb-animate-timeout) + .2s)}
/*
     FILE ARCHIVED ON 20:31:23 Nov 28, 2023 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 22:31:19 Apr 26, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.679
  exclusion.robots: 0.081
  exclusion.robots.policy: 0.07
  cdx.remote: 0.063
  esindex: 0.009
  LoadShardBlock: 206.467 (3)
  PetaboxLoader3.datanode: 187.646 (4)
  load_resource: 147.088
  PetaboxLoader3.resolve: 135.608
*/