<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png?v=jw6eaWrlml">
        <link rel="icon" type="image/png" href="favicon/favicon-32x32.png?v=jw6eaWrlml" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon/favicon-16x16.png?v=jw6eaWrlml" sizes="16x16">
        <link rel="manifest" href="favicon/manifest.json?v=jw6eaWrlml">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg?v=jw6eaWrlml" color="#006cd9">
        <link rel="shortcut icon" href="favicon/favicon.ico?v=jw6eaWrlml">
        <meta name="msapplication-config" content="favicon/browserconfig.xml?v=jw6eaWrlml">
        <meta name="theme-color" content="#ffffff">
        <?php
            date_default_timezone_set('America/Los_Angeles');
            echo "<!-- It is currently " . date('g:i a') . " in Seattle, the United States -->";
            date_default_timezone_set('Europe/Amsterdam');
            echo "\n" . "        <!-- and " . date('g:i a') . " in Groningen, the Netherlands. -->";
            echo "\n";
        ?>
        <title><?= $title; ?></title>
        <style>.h1{font-size:2rem}.h2{font-size:1.5rem}.h3{font-size:1.25rem}.h4{font-size:1rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none,ins{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.italic{font-style:italic}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.nowrap{white-space:nowrap}.break-word{word-wrap:break-word}.line-height-1{line-height:1}.line-height-2{line-height:1.125}.line-height-3,h1,h2,h3,h4,h5,h6{line-height:1.25}.line-height-4{line-height:1.5}.list-style-none{list-style:none}.underline{text-decoration:underline}.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.list-reset{list-style:none;padding-left:0}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.table{display:table}.table-cell{display:table-cell}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-auto{overflow:auto}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.left{float:left}.right{float:right}.fit,img{max-width:100%}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.border-box{box-sizing:border-box}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.m0,figure{margin:0}.mt0{margin-top:0}.mr0{margin-right:0}.mb0{margin-bottom:0}.ml0,.mx0{margin-left:0}.mx0{margin-right:0}.my0,nav ul{margin-top:0;margin-bottom:0}.m1{margin:.5rem}.mt1{margin-top:.5rem}.mr1{margin-right:.5rem}.mb1{margin-bottom:.5rem}.ml1,.mx1{margin-left:.5rem}.mx1{margin-right:.5rem}.my1{margin-top:.5rem;margin-bottom:.5rem}.m2{margin:1rem}.mt2{margin-top:1rem}.mr2{margin-right:1rem}.mb2{margin-bottom:1rem}.ml2,.mx2{margin-left:1rem}.mx2{margin-right:1rem}.my2{margin-top:1rem;margin-bottom:1rem}.m3{margin:2rem}.mt3{margin-top:2rem}.mr3{margin-right:2rem}.mb3{margin-bottom:2rem}.ml3,.mx3{margin-left:2rem}.mx3{margin-right:2rem}.my3{margin-top:2rem;margin-bottom:2rem}.m4{margin:4rem}.mt4{margin-top:4rem}.mr4{margin-right:4rem}.mb4{margin-bottom:4rem}.ml4,.mx4{margin-left:4rem}.mx4{margin-right:4rem}.my4{margin-top:4rem;margin-bottom:4rem}.mxn1{margin-left:-.5rem;margin-right:-.5rem}.mxn2{margin-left:-1rem;margin-right:-1rem}.mxn3{margin-left:-2rem;margin-right:-2rem}.mxn4{margin-left:-4rem;margin-right:-4rem}.ml-auto{margin-left:auto}.mr-auto,.mx-auto{margin-right:auto}.mx-auto{margin-left:auto}.p0{padding:0}.pt0{padding-top:0}.pr0{padding-right:0}.pb0{padding-bottom:0}.pl0,.px0{padding-left:0}.px0{padding-right:0}.py0{padding-top:0;padding-bottom:0}.p1{padding:.5rem}.pt1{padding-top:.5rem}.pr1{padding-right:.5rem}.pb1{padding-bottom:.5rem}.pl1{padding-left:.5rem}.py1{padding-top:.5rem;padding-bottom:.5rem}.px1{padding-left:.5rem;padding-right:.5rem}.p2{padding:1rem}.pt2{padding-top:1rem}.pr2{padding-right:1rem}.pb2{padding-bottom:1rem}.pl2{padding-left:1rem}.py2{padding-top:1rem;padding-bottom:1rem}.px2{padding-left:1rem;padding-right:1rem}.p3{padding:2rem}.pt3{padding-top:2rem}.pr3{padding-right:2rem}.pb3{padding-bottom:2rem}.pl3{padding-left:2rem}.py3{padding-top:2rem;padding-bottom:2rem}.px3{padding-left:2rem;padding-right:2rem}.p4{padding:4rem}.pt4{padding-top:4rem}.pr4{padding-right:4rem}.pb4{padding-bottom:4rem}.pl4{padding-left:4rem}.py4{padding-top:4rem;padding-bottom:4rem}.px4{padding-left:4rem;padding-right:4rem}.col{float:left}*,.col,.col-right{box-sizing:border-box}.col-right{float:right}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}@media (min-width:40em){.sm-col,.sm-col-right{float:left;box-sizing:border-box}.sm-col-right{float:right}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}}@media (min-width:52em){.md-col,.md-col-right{float:left;box-sizing:border-box}.md-col-right{float:right}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}}@media (min-width:64em){.lg-col,.lg-col-right{float:left;box-sizing:border-box}.lg-col-right{float:right}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}}.flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}@media (min-width:40em){.sm-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}@media (min-width:52em){.md-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}@media (min-width:64em){.lg-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}.flex-column{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.flex-wrap{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;-ms-grid-row-align:flex-start;align-items:flex-start}.items-end{-webkit-box-align:end;-webkit-align-items:flex-end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.items-center{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.items-baseline{-webkit-box-align:baseline;-webkit-align-items:baseline;-ms-flex-align:baseline;-ms-grid-row-align:baseline;align-items:baseline}.items-stretch{-webkit-box-align:stretch;-webkit-align-items:stretch;-ms-flex-align:stretch;-ms-grid-row-align:stretch;align-items:stretch}.self-start{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start}.self-end{-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end}.self-center{-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}.self-baseline{-webkit-align-self:baseline;-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-webkit-align-self:stretch;-ms-flex-item-align:stretch;align-self:stretch}.justify-start{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.justify-end{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.justify-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.justify-between{-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.justify-around{-webkit-justify-content:space-around;-ms-flex-pack:distribute;justify-content:space-around}.content-start{-webkit-align-content:flex-start;-ms-flex-line-pack:start;align-content:flex-start}.content-end{-webkit-align-content:flex-end;-ms-flex-line-pack:end;align-content:flex-end}.content-center{-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center}.content-between{-webkit-align-content:space-between;-ms-flex-line-pack:justify;align-content:space-between}.content-around{-webkit-align-content:space-around;-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-webkit-align-content:stretch;-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-webkit-box-flex:0;-webkit-flex:none;-ms-flex:none;flex:none}.order-0{-webkit-box-ordinal-group:1;-webkit-order:0;-ms-flex-order:0;order:0}.order-1{-webkit-box-ordinal-group:2;-webkit-order:1;-ms-flex-order:1;order:1}.order-2{-webkit-box-ordinal-group:3;-webkit-order:2;-ms-flex-order:2;order:2}.order-3{-webkit-box-ordinal-group:4;-webkit-order:3;-ms-flex-order:3;order:3}.order-last{-webkit-box-ordinal-group:100000;-webkit-order:99999;-ms-flex-order:99999;order:99999}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none,hr{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40em){.xs-hide{display:none!important}}@media (min-width:40em) and (max-width:52em){.sm-hide{display:none!important}}@media (min-width:52em) and (max-width:64em){.md-hide{display:none!important}}@media (min-width:64em){.lg-hide{display:none!important}}.display-none{display:none!important}a,body{color:#1f2933}body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif;line-height:1.5;margin:0;background-color:#fff;opacity:0}img{height:auto}svg{max-height:100%}a{transition:color .15s ease-in;text-decoration:none}.card:hover .lighten,.card:hover h3,.card:hover p,a:hover{color:#006cd9}h1,h2,h4,h5,h6{font-weight:600;margin-top:1.5em;margin-bottom:.5em}h3{margin-top:1.8em;margin-bottom:.8em;font-size:1.25rem}h1{font-size:2rem}h2{font-size:1.5rem}h4{font-size:1rem}h5{font-size:.875rem}h6{font-size:.75rem}blockquote,dl,ol,p,pre,ul{margin-top:1em;margin-bottom:1em}code,pre,samp{font-family:Roboto Mono,Source Code Pro,Menlo,Consolas,Liberation Mono,monospace}code,samp{padding:.125em}code,pre,samp{font-size:87.5%}pre{overflow:scroll}blockquote{color:#1f2933;font-style:italic;padding:1.5rem;margin:2rem 0;box-sizing:border-box;border-left:2px solid #1f2933}hr{margin-top:1.5em;margin-bottom:1.5em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#ccc}.mobile-portrait{padding-top:177.77778%}.desktop-hd{padding-top:71.11111%}.sixteen-by-nine{padding-top:56.25%}.marvel{padding-top:64.28571%}.three-by-two{padding-top:66.66667%}.invision{padding-top:47.09677%}.desktop-hd,.invision,.marvel,.mobile-portrait,.sixteen-by-nine,.three-by-two{position:relative}.card,.invision div{height:100%}.desktop-hd>div,.invision>div,.marvel>div,.mobile-portrait>div,.sixteen-by-nine>div,.sixteen-by-nine>img,.three-by-two>img{position:absolute;top:0;right:0;bottom:0;left:0}iframe,video{width:100%;height:100%}.card{background-color:#fff;border-radius:4px;box-shadow:0 .25rem 1rem rgba(32,41,51,.1);overflow:hidden;transition:box-shadow .5s .05s}.card:hover{box-shadow:0 .5rem 2rem rgba(32,41,51,.3)}.bg-black{background-color:#000}.bg-cyan{background-color:#0ff}.max-width-measure{max-width:34em}#vincentmvdm,h3{font-weight:600}#project-image{height:25rem}#project-image img,.sixteen-by-nine>img,.three-by-two>img{-o-object-fit:cover;object-fit:cover;height:100%;width:100%}blockquote,footer .fa{font-size:1.25rem}.h-100{height:100%}::-moz-selection{background-color:#006cd9;color:#fff}::selection{background-color:#006cd9;color:#fff}.bg-section{background-color:#e9f4fa}.highlight{transition:color .15s ease-in}.current,.highlight{color:#006cd9}.highlight:hover{color:#0079f3}.lighten{color:#616d73;transition:color .15s ease-in}#introduction{padding:4rem 0}#contents{border-left:2px solid #1f2933;list-style-type:none;padding-left:1.5rem;margin-top:1.5rem}#back-to-top{display:none;position:fixed;right:2rem;bottom:2rem;z-index:999;width:32px}.btn{text-decoration:none;cursor:pointer;display:inline-block;background-color:#1f2933;color:#fff;border-radius:4px}.btn:hover{color:#fff;background-color:#006cd9}@media only screen and (min-width:40em){#project-image{height:35rem}#introduction{padding:8rem 0}#contents,blockquote{margin-left:-1.5rem}}.fadeIn.delay{-webkit-animation-delay:.5s;animation-delay:.5s}.bg-perduko{background-color:#faf7eb}.bg-carmax{background-color:#f5fbff}.bg-carmax-alternative{background-color:#fffffd}.bg-getthere{background-color:#fff5f7}.bg-gray{background-color:#fafafa}.shadow-getthere{box-shadow:0 .25rem 1rem rgba(64,64,64,.1)}.bg-getthere-alternative{background-color:#fbfbfb}.shadow-carmax{box-shadow:0 .25rem 1rem rgba(1,38,72,.1)}.shadow-scout{box-shadow:0 .25rem 1rem rgba(18,18,18,.1)}.shadow-perduko{box-shadow:0 .25rem 1rem rgba(7,4,13,.1)}.bg-creativeaid{background-color:#fff5f9}.bg-scout{background-color:#f5f5ff}.shadow-creativeaid{box-shadow:0 .25rem 1rem rgba(51,51,51,.1)}video{background-color:#fff}.bg-perduko-alternative{background-color:#e6e6e6}figcaption{font-style:italic;font-size:.875rem;padding-top:1rem}figcaption,h4,h5,h6{color:#616d73}#recommended a:hover,#selected-projects a:hover{color:#1f2933}.grow{-moz-osx-font-smoothing:grayscale;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateZ(0);transform:translateZ(0);transition:transform .25s ease-out;transition:transform .25s ease-out,-webkit-transform .25s ease-out}.grow:focus,.grow:hover{-webkit-transform:scale(1.05);transform:scale(1.05)}.grow:active{-webkit-transform:scale(.9);transform:scale(.9)}@media only screen and (min-width:74em){#back-to-top{right:calc((100% - 64em)/2 + 16px - 4rem)}}</style>
        <script>
            document.createElement( "picture" );
        </script>
        <script>!function(e){var t=navigator.userAgent;e.HTMLPictureElement&&/ecko/.test(t)&&t.match(/rv\:(\d+)/)&&RegExp.$1<45&&addEventListener("resize",function(){var t,r=document.createElement("source"),s=function(e){var t,s,n=e.parentNode;"PICTURE"===n.nodeName.toUpperCase()?(t=r.cloneNode(),n.insertBefore(t,n.firstElementChild),setTimeout(function(){n.removeChild(t)})):(!e._pfLastSize||e.offsetWidth>e._pfLastSize)&&(e._pfLastSize=e.offsetWidth,s=e.sizes,e.sizes+=",100vw",setTimeout(function(){e.sizes=s}))},n=function(){var e,t=document.querySelectorAll("picture > img, img[srcset][sizes]");for(e=0;e<t.length;e++)s(t[e])},i=function(){clearTimeout(t),t=setTimeout(n,99)},c=e.matchMedia&&matchMedia("(orientation: landscape)"),a=function(){i(),c&&c.addListener&&c.addListener(i)};return r.srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",/^[c|i]|d$/.test(document.readyState||"")?a():document.addEventListener("DOMContentLoaded",a),i}())}(window),function(e,t,r){"use strict";function s(e){return" "===e||"\t"===e||"\n"===e||"\f"===e||"\r"===e}function n(){U=!1,W=e.devicePixelRatio,$={},k={},h.DPR=W||1,Q.width=Math.max(e.innerWidth||0,E.clientWidth),Q.height=Math.max(e.innerHeight||0,E.clientHeight),Q.vw=Q.width/100,Q.vh=Q.height/100,m=[Q.height,Q.width,W].join("-"),Q.em=h.getEmValue(),Q.rem=Q.em}function i(e,t,r,s){var n,i,c,a;return"saveData"===b.algorithm?e>2.7?a=r+1:(i=t-r,n=Math.pow(e-.6,1.5),c=i*n,s&&(c+=.1*n),a=e+c):a=r>1?Math.sqrt(e*t):e,a>r}function c(e){var t,r=h.getSet(e),s=!1;"pending"!==r&&(s=m,r&&(t=h.setRes(r),h.applySetCandidate(t,e))),e[h.ns].evaled=s}function a(e,t){return e.res-t.res}function u(e,t,r){var s;return!r&&t&&(r=e[h.ns].sets,r=r&&r[r.length-1]),(s=o(t,r))&&(t=h.makeUrl(t),e[h.ns].curSrc=t,e[h.ns].curCan=s,s.res||X(s,s.set.sizes)),s}function o(e,t){var r,s,n;if(e&&t)for(n=h.parseSet(t),e=h.makeUrl(e),r=0;r<n.length;r++)if(e===h.makeUrl(n[r].url)){s=n[r];break}return s}function l(e,t){var r,s,n,i,c=e.getElementsByTagName("source");for(r=0,s=c.length;s>r;r++)n=c[r],n[h.ns]=!0,(i=n.getAttribute("srcset"))&&t.push({srcset:i,media:n.getAttribute("media"),type:n.getAttribute("type"),sizes:n.getAttribute("sizes")})}function f(e,t){function r(t){var r,s=t.exec(e.substring(f));return s?(r=s[0],f+=r.length,r):void 0}function n(){var e,r,s,n,a,u,o,l,f,p=!1,A={};for(n=0;n<c.length;n++)a=c[n],u=a[a.length-1],o=a.substring(0,a.length-1),l=parseInt(o,10),f=parseFloat(o),j.test(o)&&"w"===u?((e||r)&&(p=!0),0===l?p=!0:e=l):V.test(o)&&"x"===u?((e||r||s)&&(p=!0),0>f?p=!0:r=f):j.test(o)&&"h"===u?((s||r)&&(p=!0),0===l?p=!0:s=l):p=!0;p||(A.url=i,e&&(A.w=e),r&&(A.d=r),s&&(A.h=s),s||r||e||(A.d=1),1===A.d&&(t.has1x=!0),A.set=t,d.push(A))}for(var i,c,a,u,o,l=e.length,f=0,d=[];;){if(r(N),f>=l)return d;i=r(O),c=[],","===i.slice(-1)?(i=i.replace(q,""),n()):function(){for(r(F),a="",u="in descriptor";;){if(o=e.charAt(f),"in descriptor"===u)if(s(o))a&&(c.push(a),a="",u="after descriptor");else{if(","===o)return f+=1,a&&c.push(a),void n();if("("===o)a+=o,u="in parens";else{if(""===o)return a&&c.push(a),void n();a+=o}}else if("in parens"===u)if(")"===o)a+=o,u="in descriptor";else{if(""===o)return c.push(a),void n();a+=o}else if("after descriptor"===u)if(s(o));else{if(""===o)return void n();u="in descriptor",f-=1}f+=1}}()}}function d(e){var t,r,n,i,c,a,u=/^(?:[+-]?[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?(?:ch|cm|em|ex|in|mm|pc|pt|px|rem|vh|vmin|vmax|vw)$/i,o=/^calc\((?:[0-9a-z \.\+\-\*\/\(\)]+)\)$/i;for(r=function(e){function t(){i&&(c.push(i),i="")}function r(){c[0]&&(a.push(c),c=[])}for(var n,i="",c=[],a=[],u=0,o=0,l=!1;;){if(""===(n=e.charAt(o)))return t(),r(),a;if(l){if("*"===n&&"/"===e[o+1]){l=!1,o+=2,t();continue}o+=1}else{if(s(n)){if(e.charAt(o-1)&&s(e.charAt(o-1))||!i){o+=1;continue}if(0===u){t(),o+=1;continue}n=" "}else if("("===n)u+=1;else if(")"===n)u-=1;else{if(","===n){t(),r(),o+=1;continue}if("/"===n&&"*"===e.charAt(o+1)){l=!0,o+=2;continue}}i+=n,o+=1}}}(e),n=r.length,t=0;n>t;t++)if(i=r[t],c=i[i.length-1],function(e){return!!(u.test(e)&&parseFloat(e)>=0)||!!o.test(e)||"0"===e||"-0"===e||"+0"===e}(c)){if(a=c,i.pop(),0===i.length)return a;if(i=i.join(" "),h.matchesMedia(i))return a}return"100vw"}t.createElement("picture");var p,A,m,h={},g=!1,v=function(){},w=t.createElement("img"),S=w.getAttribute,x=w.setAttribute,y=w.removeAttribute,E=t.documentElement,z={},b={algorithm:""},T="data-pfsrc",C=T+"set",R=navigator.userAgent,L=/rident/.test(R)||/ecko/.test(R)&&R.match(/rv\:(\d+)/)&&RegExp.$1>35,M="currentSrc",P=/\s+\+?\d+(e\d+)?w/,D=/(\([^)]+\))?\s*(.+)/,B=e.picturefillCFG,I="font-size:100%!important;",U=!0,$={},k={},W=e.devicePixelRatio,Q={px:1,in:96},G=t.createElement("a"),H=!1,F=/^[ \t\n\r\u000c]+/,N=/^[, \t\n\r\u000c]+/,O=/^[^ \t\n\r\u000c]+/,q=/[,]+$/,j=/^\d+$/,V=/^-?(?:[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?$/,_=function(e,t,r,s){e.addEventListener?e.addEventListener(t,r,s||!1):e.attachEvent&&e.attachEvent("on"+t,r)},K=function(e){var t={};return function(r){return r in t||(t[r]=e(r)),t[r]}},J=function(){var e=/^([\d\.]+)(em|vw|px)$/,t=function(){for(var e=arguments,t=0,r=e[0];++t in e;)r=r.replace(e[t],e[++t]);return r},r=K(function(e){return"return "+t((e||"").toLowerCase(),/\band\b/g,"&&",/,/g,"||",/min-([a-z-\s]+):/g,"e.$1>=",/max-([a-z-\s]+):/g,"e.$1<=",/calc([^)]+)/g,"($1)",/(\d+[\.]*[\d]*)([a-z]+)/g,"($1 * e.$2)",/^(?!(e.[a-z]|[0-9\.&=|><\+\-\*\(\)\/])).*/gi,"")+";"});return function(t,s){var n;if(!(t in $))if($[t]=!1,s&&(n=t.match(e)))$[t]=n[1]*Q[n[2]];else try{$[t]=new Function("e",r(t))(Q)}catch(e){}return $[t]}}(),X=function(e,t){return e.w?(e.cWidth=h.calcListLength(t||"100vw"),e.res=e.w/e.cWidth):e.res=e.d,e},Y=function(e){if(g){var r,s,n,i=e||{};if(i.elements&&1===i.elements.nodeType&&("IMG"===i.elements.nodeName.toUpperCase()?i.elements=[i.elements]:(i.context=i.elements,i.elements=null)),r=i.elements||h.qsa(i.context||t,i.reevaluate||i.reselect?h.sel:h.selShort),n=r.length){for(h.setupRun(i),H=!0,s=0;n>s;s++)h.fillImg(r[s],i);h.teardownRun(i)}}};e.console&&console.warn,M in w||(M="src"),z["image/jpeg"]=!0,z["image/gif"]=!0,z["image/png"]=!0,z["image/svg+xml"]=t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),h.ns=("pf"+(new Date).getTime()).substr(0,9),h.supSrcset="srcset"in w,h.supSizes="sizes"in w,h.supPicture=!!e.HTMLPictureElement,h.supSrcset&&h.supPicture&&!h.supSizes&&function(e){w.srcset="data:,a",e.src="data:,a",h.supSrcset=w.complete===e.complete,h.supPicture=h.supSrcset&&h.supPicture}(t.createElement("img")),h.supSrcset&&!h.supSizes?function(){var e="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",r=t.createElement("img"),s=function(){2===r.width&&(h.supSizes=!0),A=h.supSrcset&&!h.supSizes,g=!0,setTimeout(Y)};r.onload=s,r.onerror=s,r.setAttribute("sizes","9px"),r.srcset=e+" 1w,data:image/gif;base64,R0lGODlhAgABAPAAAP///wAAACH5BAAAAAAALAAAAAACAAEAAAICBAoAOw== 9w",r.src=e}():g=!0,h.selShort="picture>img,img[srcset]",h.sel=h.selShort,h.cfg=b,h.DPR=W||1,h.u=Q,h.types=z,h.setSize=v,h.makeUrl=K(function(e){return G.href=e,G.href}),h.qsa=function(e,t){return"querySelector"in e?e.querySelectorAll(t):[]},h.matchesMedia=function(){return e.matchMedia&&(matchMedia("(min-width: 0.1em)")||{}).matches?h.matchesMedia=function(e){return!e||matchMedia(e).matches}:h.matchesMedia=h.mMQ,h.matchesMedia.apply(this,arguments)},h.mMQ=function(e){return!e||J(e)},h.calcLength=function(e){var t=J(e,!0)||!1;return 0>t&&(t=!1),t},h.supportsType=function(e){return!e||z[e]},h.parseSize=K(function(e){var t=(e||"").match(D);return{media:t&&t[1],length:t&&t[2]}}),h.parseSet=function(e){return e.cands||(e.cands=f(e.srcset,e)),e.cands},h.getEmValue=function(){var e;if(!p&&(e=t.body)){var r=t.createElement("div"),s=E.style.cssText,n=e.style.cssText;r.style.cssText="position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)",E.style.cssText=I,e.style.cssText=I,e.appendChild(r),p=r.offsetWidth,e.removeChild(r),p=parseFloat(p,10),E.style.cssText=s,e.style.cssText=n}return p||16},h.calcListLength=function(e){if(!(e in k)||b.uT){var t=h.calcLength(d(e));k[e]=t||Q.width}return k[e]},h.setRes=function(e){var t;if(e)for(var r=0,s=(t=h.parseSet(e)).length;s>r;r++)X(t[r],e.sizes);return t},h.setRes.res=X,h.applySetCandidate=function(e,t){if(e.length){var r,s,n,c,o,l,f,d,p,A=t[h.ns],m=h.DPR;if(l=A.curSrc||t[M],(f=A.curCan||u(t,l,e[0].set))&&f.set===e[0].set&&((p=L&&!t.complete&&f.res-.1>m)||(f.cached=!0,f.res>=m&&(o=f))),!o)for(e.sort(a),c=e.length,o=e[c-1],s=0;c>s;s++)if((r=e[s]).res>=m){o=e[n=s-1]&&(p||l!==h.makeUrl(r.url))&&i(e[n].res,r.res,m,e[n].cached)?e[n]:r;break}o&&(d=h.makeUrl(o.url),A.curSrc=d,A.curCan=o,d!==l&&h.setSrc(t,o),h.setSize(t))}},h.setSrc=function(e,t){var r;e.src=t.url,"image/svg+xml"===t.set.type&&(r=e.style.width,e.style.width=e.offsetWidth+1+"px",e.offsetWidth+1&&(e.style.width=r))},h.getSet=function(e){var t,r,s,n=!1,i=e[h.ns].sets;for(t=0;t<i.length&&!n;t++)if((r=i[t]).srcset&&h.matchesMedia(r.media)&&(s=h.supportsType(r.type))){"pending"===s&&(r=s),n=r;break}return n},h.parseSets=function(e,t,s){var n,i,c,a,u=t&&"PICTURE"===t.nodeName.toUpperCase(),f=e[h.ns];(f.src===r||s.src)&&(f.src=S.call(e,"src"),f.src?x.call(e,T,f.src):y.call(e,T)),(f.srcset===r||s.srcset||!h.supSrcset||e.srcset)&&(n=S.call(e,"srcset"),f.srcset=n,a=!0),f.sets=[],u&&(f.pic=!0,l(t,f.sets)),f.srcset?(i={srcset:f.srcset,sizes:S.call(e,"sizes")},f.sets.push(i),(c=(A||f.src)&&P.test(f.srcset||""))||!f.src||o(f.src,i)||i.has1x||(i.srcset+=", "+f.src,i.cands.push({url:f.src,d:1,set:i}))):f.src&&f.sets.push({srcset:f.src,sizes:null}),f.curCan=null,f.curSrc=r,f.supported=!(u||i&&!h.supSrcset||c&&!h.supSizes),a&&h.supSrcset&&!f.supported&&(n?(x.call(e,C,n),e.srcset=""):y.call(e,C)),f.supported&&!f.srcset&&(!f.src&&e.src||e.src!==h.makeUrl(f.src))&&(null===f.src?e.removeAttribute("src"):e.src=f.src),f.parsed=!0},h.fillImg=function(e,t){var r,s=t.reselect||t.reevaluate;e[h.ns]||(e[h.ns]={}),r=e[h.ns],(s||r.evaled!==m)&&((!r.parsed||t.reevaluate)&&h.parseSets(e,e.parentNode,t),r.supported?r.evaled=m:c(e))},h.setupRun=function(){(!H||U||W!==e.devicePixelRatio)&&n()},h.supPicture?(Y=v,h.fillImg=v):function(){var r,s=e.attachEvent?/d$|^c/:/d$|^c|^i/,n=function(){var e=t.readyState||"";i=setTimeout(n,"loading"===e?200:999),t.body&&(h.fillImgs(),(r=r||s.test(e))&&clearTimeout(i))},i=setTimeout(n,t.body?9:99),c=E.clientHeight;_(e,"resize",function(e,t){var r,s,n=function(){var i=new Date-s;t>i?r=setTimeout(n,t-i):(r=null,e())};return function(){s=new Date,r||(r=setTimeout(n,t))}}(function(){U=Math.max(e.innerWidth||0,E.clientWidth)!==Q.width||E.clientHeight!==c,c=E.clientHeight,U&&h.fillImgs()},99)),_(t,"readystatechange",n)}(),h.picturefill=Y,h.fillImgs=Y,h.teardownRun=v,Y._=h,e.picturefillCFG={pf:h,push:function(e){var t=e.shift();"function"==typeof h[t]?h[t].apply(h,e):(b[t]=e[0],H&&h.fillImgs({reselect:!0}))}};for(;B&&B.length;)e.picturefillCFG.push(B.shift());e.picturefill=Y,"object"==typeof module&&"object"==typeof module.exports?module.exports=Y:"function"==typeof define&&define.amd&&define("picturefill",function(){return Y}),h.supPicture||(z["image/webp"]=function(t,r){var s=new e.Image;return s.onerror=function(){z[t]=!1,Y()},s.onload=function(){z[t]=1===s.width,Y()},s.src=r,"pending"}("image/webp","data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA=="))}(window,document);</script>
    </head>
    <?php $page = basename($_SERVER['PHP_SELF'], '.php'); ?>
    <body class="page <?= $page; ?>">
        <?php include_once("includes/analyticstracking.php"); ?>
