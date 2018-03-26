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
        <style>@-webkit-keyframes fadeIn{0%,25%{opacity:0}to{opacity:1%}}@keyframes fadeIn{0%,25%{opacity:0}to{opacity:1%}}@-webkit-keyframes delay-1{0%,50%{opacity:0}to{opacity:1%}}@keyframes delay-1{0%,50%{opacity:0}to{opacity:1%}}@-webkit-keyframes delay-2{0%,50%{opacity:0}to{opacity:1%}}@keyframes delay-2{0%,50%{opacity:0}to{opacity:1%}}@-webkit-keyframes moveUp{0%{box-shadow:0 0 0 transparent}to{box-shadow:0 .25rem 8rem rgba(32,41,51,.2)}}@keyframes moveUp{0%{box-shadow:0 0 0 transparent}to{box-shadow:0 .25rem 8rem rgba(32,41,51,.2)}}@-webkit-keyframes warp{0%{top:0;right:0;opacity:0}to{top:-5%;right:-3.33%;opacity:1%}}@keyframes warp{0%{top:0;right:0;opacity:0}to{top:-5%;right:-3.33%;opacity:1%}}@-webkit-keyframes dewarp{0%{top:-5%;right:-3.33%;opacity:1%}to{top:0;right:0;opacity:0}}@keyframes dewarp{0%{top:-5%;right:-3.33%;opacity:1%}to{top:0;right:0;opacity:0}}.h1{font-size:2rem}.h2{font-size:1.5rem}.h3{font-size:1.25rem}.h4{font-size:1rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none,a,ins{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.italic{font-style:italic}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.nowrap{white-space:nowrap}.break-word{word-wrap:break-word}.line-height-1{line-height:1}.line-height-2{line-height:1.125}.line-height-3,h1,h2,h3,h4,h5,h6{line-height:1.25}.line-height-4{line-height:1.5}.list-style-none{list-style:none}.underline{text-decoration:underline}.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.list-reset{list-style:none;padding-left:0}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.table{display:table}.table-cell{display:table-cell}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-auto{overflow:auto}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.left{float:left}.right{float:right}.fit,img{max-width:100%}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.border-box{box-sizing:border-box}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.m0,body,figure{margin:0}.mt0{margin-top:0}.mr0{margin-right:0}.mb0{margin-bottom:0}.ml0,.mx0{margin-left:0}.mx0{margin-right:0}.my0,nav ul{margin-top:0;margin-bottom:0}.m1{margin:.5rem}.mt1{margin-top:.5rem}.mr1{margin-right:.5rem}.mb1{margin-bottom:.5rem}.ml1,.mx1{margin-left:.5rem}.mx1{margin-right:.5rem}.my1{margin-top:.5rem;margin-bottom:.5rem}.m2{margin:1rem}.mt2{margin-top:1rem}.mr2{margin-right:1rem}.mb2{margin-bottom:1rem}.ml2,.mx2{margin-left:1rem}.mx2{margin-right:1rem}.my2{margin-top:1rem;margin-bottom:1rem}.m3{margin:2rem}.mt3{margin-top:2rem}.mr3{margin-right:2rem}.mb3{margin-bottom:2rem}.ml3,.mx3{margin-left:2rem}.mx3{margin-right:2rem}.my3{margin-top:2rem;margin-bottom:2rem}.m4{margin:4rem}.mt4{margin-top:4rem}.mr4{margin-right:4rem}.mb4{margin-bottom:4rem}.ml4,.mx4{margin-left:4rem}.mx4{margin-right:4rem}.my4{margin-top:4rem;margin-bottom:4rem}.mxn1{margin-left:-.5rem;margin-right:-.5rem}.mxn2{margin-left:-1rem;margin-right:-1rem}.mxn3{margin-left:-2rem;margin-right:-2rem}.mxn4{margin-left:-4rem;margin-right:-4rem}.ml-auto{margin-left:auto}.mr-auto,.mx-auto{margin-right:auto}.mx-auto{margin-left:auto}.p0{padding:0}.pt0{padding-top:0}.pr0{padding-right:0}.pb0{padding-bottom:0}.pl0,.px0{padding-left:0}.px0{padding-right:0}.py0{padding-top:0;padding-bottom:0}.p1{padding:.5rem}.pt1{padding-top:.5rem}.pr1{padding-right:.5rem}.pb1{padding-bottom:.5rem}.pl1{padding-left:.5rem}.py1{padding-top:.5rem;padding-bottom:.5rem}.px1{padding-left:.5rem;padding-right:.5rem}.p2{padding:1rem}.pt2{padding-top:1rem}.pr2{padding-right:1rem}.pb2{padding-bottom:1rem}.pl2{padding-left:1rem}.py2{padding-top:1rem;padding-bottom:1rem}.px2{padding-left:1rem;padding-right:1rem}.p3{padding:2rem}.pt3{padding-top:2rem}.pr3{padding-right:2rem}.pb3{padding-bottom:2rem}.pl3{padding-left:2rem}.py3{padding-top:2rem;padding-bottom:2rem}.px3{padding-left:2rem;padding-right:2rem}.p4{padding:4rem}.pt4{padding-top:4rem}.pr4{padding-right:4rem}.pb4{padding-bottom:4rem}.pl4{padding-left:4rem}.py4{padding-top:4rem;padding-bottom:4rem}.px4{padding-left:4rem;padding-right:4rem}.col{float:left}*,.col,.col-right{box-sizing:border-box}.col-right{float:right}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}@media (min-width:40em){.sm-col,.sm-col-right{float:left;box-sizing:border-box}.sm-col-right{float:right}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}}@media (min-width:52em){.md-col,.md-col-right{float:left;box-sizing:border-box}.md-col-right{float:right}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}}@media (min-width:64em){.lg-col,.lg-col-right{float:left;box-sizing:border-box}.lg-col-right{float:right}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}}.flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}@media (min-width:40em){.sm-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}@media (min-width:52em){.md-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}@media (min-width:64em){.lg-flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}.flex-column{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.flex-wrap{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;-ms-grid-row-align:flex-start;align-items:flex-start}.items-end{-webkit-box-align:end;-webkit-align-items:flex-end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.items-center{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.items-baseline{-webkit-box-align:baseline;-webkit-align-items:baseline;-ms-flex-align:baseline;-ms-grid-row-align:baseline;align-items:baseline}.items-stretch{-webkit-box-align:stretch;-webkit-align-items:stretch;-ms-flex-align:stretch;-ms-grid-row-align:stretch;align-items:stretch}.self-start{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start}.self-end{-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end}.self-center{-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}.self-baseline{-webkit-align-self:baseline;-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-webkit-align-self:stretch;-ms-flex-item-align:stretch;align-self:stretch}.justify-start{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.justify-end{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.justify-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.justify-between{-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.justify-around{-webkit-justify-content:space-around;-ms-flex-pack:distribute;justify-content:space-around}.content-start{-webkit-align-content:flex-start;-ms-flex-line-pack:start;align-content:flex-start}.content-end{-webkit-align-content:flex-end;-ms-flex-line-pack:end;align-content:flex-end}.content-center{-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center}.content-between{-webkit-align-content:space-between;-ms-flex-line-pack:justify;align-content:space-between}.content-around{-webkit-align-content:space-around;-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-webkit-align-content:stretch;-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-webkit-box-flex:0;-webkit-flex:none;-ms-flex:none;flex:none}.order-0{-webkit-box-ordinal-group:1;-webkit-order:0;-ms-flex-order:0;order:0}.order-1{-webkit-box-ordinal-group:2;-webkit-order:1;-ms-flex-order:1;order:1}.order-2{-webkit-box-ordinal-group:3;-webkit-order:2;-ms-flex-order:2;order:2}.order-3{-webkit-box-ordinal-group:4;-webkit-order:3;-ms-flex-order:3;order:3}.order-last{-webkit-box-ordinal-group:100000;-webkit-order:99999;-ms-flex-order:99999;order:99999}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none,hr{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40em){.xs-hide{display:none!important}}@media (min-width:40em) and (max-width:52em){.sm-hide{display:none!important}}@media (min-width:52em) and (max-width:64em){.md-hide{display:none!important}}@media (min-width:64em){.lg-hide{display:none!important}}.display-none{display:none!important}body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,sans-serif;line-height:1.5;color:#1f2933;background-color:#fff}img{height:auto}svg{max-height:100%}h1,h2,h4,h5,h6{font-weight:600;margin-top:1.5em;margin-bottom:.5em}h3{margin-top:1.8em;margin-bottom:.8em;font-size:1.25rem}h1{font-size:2rem}h2{font-size:1.5rem}h4{font-size:1rem}h5{font-size:.875rem}h6{font-size:.75rem}blockquote,dl,ol,p,pre,ul{margin-top:1em;margin-bottom:1em}code,pre,samp{font-family:Roboto Mono,Source Code Pro,Menlo,Consolas,Liberation Mono,monospace}code,samp{padding:.125em}code,pre,samp{font-size:87.5%}pre{overflow:scroll}blockquote{color:#1f2933;font-style:italic;padding:1.5rem;margin:2rem 0;box-sizing:border-box;border-left:2px solid #1f2933}hr{margin:0;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#dcdee0}.mobile-portrait{padding-top:177.77778%}.desktop-hd{padding-top:71.11111%}.sixteen-by-nine{padding-top:56.25%}.two-by-one{padding-top:50%}.marvel{padding-top:64.28571%}.three-by-two{padding-top:66.66667%}.invision{padding-top:47.09677%}.desktop-hd,.invision,.marvel,.mobile-portrait,.sixteen-by-nine,.three-by-two,.two-by-one{position:relative}.invision div{height:100%}.small{font-size:14px}.desktop-hd>div,.invision>div,.marvel>div,.mobile-portrait>div,.sixteen-by-nine>div,.sixteen-by-nine>img,.three-by-two>img,.two-by-one>div{position:absolute;top:0;right:0;bottom:0;left:0}iframe,video{width:100%;height:100%}.card{background-color:#fff;border-radius:4px;box-shadow:0 .25rem 1rem rgba(32,41,51,.1);height:100%;overflow:hidden;transition:box-shadow .5s .05s}.card:hover{box-shadow:0 .5rem 2rem rgba(32,41,51,.3)}.bg-black{background-color:#000}.bg-cyan{background-color:#0ff}.max-width-measure{max-width:32em}.bg-white,video{background-color:#fff}#vincentmvdm,h3{font-weight:600}#vincent{box-shadow:0 .25rem 8rem rgba(32,41,51,.2)}#project-image{height:25rem}#project-image img,.sixteen-by-nine>img,.three-by-two>img{-o-object-fit:cover;object-fit:cover;height:100%;width:100%}blockquote,footer .fa{font-size:1.25rem}.bg-linear{background:linear-gradient(1turn,#fff,#f2f4f7)}.h-100{height:100%}.dark-blue{color:#1573d1}::-moz-selection{background-color:#336cd9;color:#fff}::selection{background-color:#336cd9;color:#fff}.book{width:40px;box-shadow:0 .25rem 1rem rgba(32,41,51,.05);transition:box-shadow .5s .05s}.book-container:hover .book{box-shadow:0 .5rem 2rem rgba(32,41,51,.1)}.book-container:hover h4,.book-container:hover p{color:#336cd9}.book-container .book .st1{transition:fill .15s ease-in}.book-container:hover .book .st1{fill:#336cd9}.bg-section{background-color:#e8effa}.experiments footer{background-color:#f2f4f7}.book-container h4,.book-container p,.highlight{transition:color .15s ease-in}.current,.highlight{color:#336cd9}.highlight:hover{color:#0079f3}.lighten{color:#616d73}#introduction{padding:4rem 0}#contents{border-left:2px solid #1f2933;list-style-type:none;padding-left:1.5rem;margin-top:1.5rem}#back-to-top{display:none;position:fixed;right:2rem;bottom:2rem;z-index:999;width:32px}.btn{text-decoration:none;cursor:pointer;display:inline-block;background-color:#1f2933;color:#fff;border-radius:4px;box-shadow:0 .25rem 1rem rgba(32,41,51,.1);transition:box-shadow .5s .05s}.btn:hover{color:#fff;background-color:#336cd9;box-shadow:0 .5rem 2rem rgba(32,41,51,.3)}.btn-outline{background-color:transparent;border:1px solid #1f2933;color:#1f2933;box-shadow:none}.btn-outline:hover{border-color:#336cd9}.blue-fill,a:hover,a:hover .lighten,a:hover h1,a:hover h2,a:hover h3,a:hover h4,a:hover h5,a:hover h6,a:hover p{color:#336cd9}.btn:hover.btn-outline{background-color:transparent;color:#336cd9;box-shadow:0 .25rem 1rem rgba(32,41,51,.1)}@media only screen and (min-width:40em){#project-image{height:35rem}#introduction{padding:8rem 0}#contents,blockquote{margin-left:-1.5rem}}.delay-1,.delay-2,.fadeIn{-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-duration:1.5s;animation-duration:1.5s}.delay-1,.delay-2{-webkit-animation-duration:3s;animation-duration:3s}.delay-2{-webkit-animation-duration:4.5s;animation-duration:4.5s}.bg-perduko{background-color:#faf7eb}.bg-carmax{background-color:#f5fbff}.bg-carmax-alternative{background-color:#fffffd}.bg-getthere{background-color:#fff5f7}.bg-gray{background-color:#f2f4f7}.shadow-getthere{box-shadow:0 .25rem 1rem rgba(64,64,64,.1)}.bg-getthere-alternative{background-color:#fbfbfb}.shadow-carmax{box-shadow:0 .25rem 1rem rgba(1,38,72,.1)}.shadow-scout{box-shadow:0 .25rem 1rem rgba(18,18,18,.1)}.shadow-perduko{box-shadow:0 .25rem 1rem rgba(7,4,13,.1)}.bg-creativeaid{background-color:#fff5f9}.bg-scout{background-color:#f5f5ff}.shadow-creativeaid{box-shadow:0 .25rem 1rem rgba(51,51,51,.1)}.bg-perduko-alternative{background-color:#e6e6e6}figcaption{font-style:italic;font-size:.875rem;padding-top:1rem}figcaption,h4,h5,h6{color:#616d73}#recommended a:hover,#selected-projects a:hover{color:#1f2933}.grow{-moz-osx-font-smoothing:grayscale;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateZ(0);transform:translateZ(0);transition:transform .25s ease-out;transition:transform .25s ease-out,-webkit-transform .25s ease-out}.grow:focus,.grow:hover{-webkit-transform:scale(1.05);transform:scale(1.05)}.grow:active{-webkit-transform:scale(.9);transform:scale(.9)}.resume .card{border-radius:0}.resume nav{border-bottom:1px solid #dcdee0}.resume footer{border-top:1px solid #dcdee0}nav{color:#fff}.resume ul{list-style-type:none}a{color:#1f2933;transition:color .15s ease-in}#blue{left:75%;bottom:63%;top:-5%;right:-3.33%;background-color:#336cd9;z-index:-1}@media print{body.resume{margin:0}.md-col-7{width:58.33333%}.md-col-5{width:41.66667%}#resume-paper{padding:0;max-width:100%}footer,nav{display:none}}@media only screen and (min-width:74em){#back-to-top{right:calc((100% - 64em)/2 + 16px - 4rem)}}.experiments section hr{border-bottom-color:rgba(31,41,51,.2)}</style>
        <script>
            document.createElement( "picture" );
        </script>
        <script>!function(e){var t,s,r,i,n,c,a,u=navigator.userAgent;e.HTMLPictureElement&&/ecko/.test(u)&&u.match(/rv\:(\d+)/)&&RegExp.$1<45&&addEventListener("resize",(s=document.createElement("source"),r=function(e){var t,r,i=e.parentNode;"PICTURE"===i.nodeName.toUpperCase()?(t=s.cloneNode(),i.insertBefore(t,i.firstElementChild),setTimeout(function(){i.removeChild(t)})):(!e._pfLastSize||e.offsetWidth>e._pfLastSize)&&(e._pfLastSize=e.offsetWidth,r=e.sizes,e.sizes+=",100vw",setTimeout(function(){e.sizes=r}))},i=function(){var e,t=document.querySelectorAll("picture > img, img[srcset][sizes]");for(e=0;e<t.length;e++)r(t[e])},n=function(){clearTimeout(t),t=setTimeout(i,99)},c=e.matchMedia&&matchMedia("(orientation: landscape)"),a=function(){n(),c&&c.addListener&&c.addListener(n)},s.srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",/^[c|i]|d$/.test(document.readyState||"")?a():document.addEventListener("DOMContentLoaded",a),n))}(window),function(e,t,s){"use strict";function r(e){return" "===e||"\t"===e||"\n"===e||"\f"===e||"\r"===e}function i(e,t){return e.res-t.res}function n(e,t){var s,r,i;if(e&&t)for(i=R.parseSet(t),e=R.makeUrl(e),s=0;s<i.length;s++)if(e===R.makeUrl(i[s].url)){r=i[s];break}return r}t.createElement("picture");var c,a,u,o,l,f,d,p,A,m,h,g,v,w,S,x,y,E,z,b,T,C,R={},L=!1,M=function(){},P=t.createElement("img"),D=P.getAttribute,B=P.setAttribute,I=P.removeAttribute,U=t.documentElement,$={},k={algorithm:""},W="data-pfsrc",Q=W+"set",G=navigator.userAgent,H=/rident/.test(G)||/ecko/.test(G)&&G.match(/rv\:(\d+)/)&&RegExp.$1>35,F="currentSrc",N=/\s+\+?\d+(e\d+)?w/,O=/(\([^)]+\))?\s*(.+)/,q=e.picturefillCFG,j="font-size:100%!important;",V=!0,_={},K={},J=e.devicePixelRatio,X={px:1,in:96},Y=t.createElement("a"),Z=!1,ee=/^[ \t\n\r\u000c]+/,te=/^[, \t\n\r\u000c]+/,se=/^[^ \t\n\r\u000c]+/,re=/[,]+$/,ie=/^\d+$/,ne=/^-?(?:[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?$/,ce=function(e,t,s,r){e.addEventListener?e.addEventListener(t,s,r||!1):e.attachEvent&&e.attachEvent("on"+t,s)},ae=function(e){var t={};return function(s){return s in t||(t[s]=e(s)),t[s]}},ue=(o=/^([\d\.]+)(em|vw|px)$/,l=ae(function(e){return"return "+function(){for(var e=arguments,t=0,s=e[0];++t in e;)s=s.replace(e[t],e[++t]);return s}((e||"").toLowerCase(),/\band\b/g,"&&",/,/g,"||",/min-([a-z-\s]+):/g,"e.$1>=",/max-([a-z-\s]+):/g,"e.$1<=",/calc([^)]+)/g,"($1)",/(\d+[\.]*[\d]*)([a-z]+)/g,"($1 * e.$2)",/^(?!(e.[a-z]|[0-9\.&=|><\+\-\*\(\)\/])).*/gi,"")+";"}),function(e,t){var s;if(!(e in _))if(_[e]=!1,t&&(s=e.match(o)))_[e]=s[1]*X[s[2]];else try{_[e]=new Function("e",l(e))(X)}catch(e){}return _[e]}),oe=function(e,t){return e.w?(e.cWidth=R.calcListLength(t||"100vw"),e.res=e.w/e.cWidth):e.res=e.d,e},le=function(e){if(L){var s,r,i,n=e||{};if(n.elements&&1===n.elements.nodeType&&("IMG"===n.elements.nodeName.toUpperCase()?n.elements=[n.elements]:(n.context=n.elements,n.elements=null)),i=(s=n.elements||R.qsa(n.context||t,n.reevaluate||n.reselect?R.sel:R.selShort)).length){for(R.setupRun(n),Z=!0,r=0;i>r;r++)R.fillImg(s[r],n);R.teardownRun(n)}}};e.console&&console.warn,F in P||(F="src"),$["image/jpeg"]=!0,$["image/gif"]=!0,$["image/png"]=!0,$["image/svg+xml"]=t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),R.ns=("pf"+(new Date).getTime()).substr(0,9),R.supSrcset="srcset"in P,R.supSizes="sizes"in P,R.supPicture=!!e.HTMLPictureElement,R.supSrcset&&R.supPicture&&!R.supSizes&&(z=t.createElement("img"),P.srcset="data:,a",z.src="data:,a",R.supSrcset=P.complete===z.complete,R.supPicture=R.supSrcset&&R.supPicture),R.supSrcset&&!R.supSizes?(x="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",y=t.createElement("img"),E=function(){2===y.width&&(R.supSizes=!0),a=R.supSrcset&&!R.supSizes,L=!0,setTimeout(le)},y.onload=E,y.onerror=E,y.setAttribute("sizes","9px"),y.srcset=x+" 1w,data:image/gif;base64,R0lGODlhAgABAPAAAP///wAAACH5BAAAAAAALAAAAAACAAEAAAICBAoAOw== 9w",y.src=x):L=!0,R.selShort="picture>img,img[srcset]",R.sel=R.selShort,R.cfg=k,R.DPR=J||1,R.u=X,R.types=$,R.setSize=M,R.makeUrl=ae(function(e){return Y.href=e,Y.href}),R.qsa=function(e,t){return"querySelector"in e?e.querySelectorAll(t):[]},R.matchesMedia=function(){return e.matchMedia&&(matchMedia("(min-width: 0.1em)")||{}).matches?R.matchesMedia=function(e){return!e||matchMedia(e).matches}:R.matchesMedia=R.mMQ,R.matchesMedia.apply(this,arguments)},R.mMQ=function(e){return!e||ue(e)},R.calcLength=function(e){var t=ue(e,!0)||!1;return 0>t&&(t=!1),t},R.supportsType=function(e){return!e||$[e]},R.parseSize=ae(function(e){var t=(e||"").match(O);return{media:t&&t[1],length:t&&t[2]}}),R.parseSet=function(e){return e.cands||(e.cands=function(e,t){function s(t){var s,r=t.exec(e.substring(d));return r?(s=r[0],d+=s.length,s):void 0}function i(){var e,s,r,i,n,u,o,l,f,d=!1,A={};for(i=0;i<a.length;i++)u=(n=a[i])[n.length-1],o=n.substring(0,n.length-1),l=parseInt(o,10),f=parseFloat(o),ie.test(o)&&"w"===u?((e||s)&&(d=!0),0===l?d=!0:e=l):ne.test(o)&&"x"===u?((e||s||r)&&(d=!0),0>f?d=!0:s=f):ie.test(o)&&"h"===u?((r||s)&&(d=!0),0===l?d=!0:r=l):d=!0;d||(A.url=c,e&&(A.w=e),s&&(A.d=s),r&&(A.h=r),r||s||e||(A.d=1),1===A.d&&(t.has1x=!0),A.set=t,p.push(A))}function n(){for(s(ee),u="",o="in descriptor";;){if(l=e.charAt(d),"in descriptor"===o)if(r(l))u&&(a.push(u),u="",o="after descriptor");else{if(","===l)return d+=1,u&&a.push(u),void i();if("("===l)u+=l,o="in parens";else{if(""===l)return u&&a.push(u),void i();u+=l}}else if("in parens"===o)if(")"===l)u+=l,o="in descriptor";else{if(""===l)return a.push(u),void i();u+=l}else if("after descriptor"===o)if(r(l));else{if(""===l)return void i();o="in descriptor",d-=1}d+=1}}for(var c,a,u,o,l,f=e.length,d=0,p=[];;){if(s(te),d>=f)return p;c=s(se),a=[],","===c.slice(-1)?(c=c.replace(re,""),i()):n()}}(e.srcset,e)),e.cands},R.getEmValue=function(){var e;if(!c&&(e=t.body)){var s=t.createElement("div"),r=U.style.cssText,i=e.style.cssText;s.style.cssText="position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)",U.style.cssText=j,e.style.cssText=j,e.appendChild(s),c=s.offsetWidth,e.removeChild(s),c=parseFloat(c,10),U.style.cssText=r,e.style.cssText=i}return c||16},R.calcListLength=function(e){if(!(e in K)||k.uT){var t=R.calcLength(function(e){var t,s,i,n,c,a,u,o=/^(?:[+-]?[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?(?:ch|cm|em|ex|in|mm|pc|pt|px|rem|vh|vmin|vmax|vw)$/i,l=/^calc\((?:[0-9a-z \.\+\-\*\/\(\)]+)\)$/i;for(i=(s=function(e){function t(){n&&(c.push(n),n="")}function s(){c[0]&&(a.push(c),c=[])}for(var i,n="",c=[],a=[],u=0,o=0,l=!1;;){if(""===(i=e.charAt(o)))return t(),s(),a;if(l){if("*"===i&&"/"===e[o+1]){l=!1,o+=2,t();continue}o+=1}else{if(r(i)){if(e.charAt(o-1)&&r(e.charAt(o-1))||!n){o+=1;continue}if(0===u){t(),o+=1;continue}i=" "}else if("("===i)u+=1;else if(")"===i)u-=1;else{if(","===i){t(),s(),o+=1;continue}if("/"===i&&"*"===e.charAt(o+1)){l=!0,o+=2;continue}}n+=i,o+=1}}}(e)).length,t=0;i>t;t++)if(c=(n=s[t])[n.length-1],u=c,o.test(u)&&parseFloat(u)>=0||l.test(u)||"0"===u||"-0"===u||"+0"===u){if(a=c,n.pop(),0===n.length)return a;if(n=n.join(" "),R.matchesMedia(n))return a}return"100vw"}(e));K[e]=t||X.width}return K[e]},R.setRes=function(e){var t;if(e)for(var s=0,r=(t=R.parseSet(e)).length;r>s;s++)oe(t[s],e.sizes);return t},R.setRes.res=oe,R.applySetCandidate=function(e,t){if(e.length){var s,r,c,a,u,o,l,f,d,p=t[R.ns],A=R.DPR;if(o=p.curSrc||t[F],(l=p.curCan||(y=t,E=o,!(z=e[0].set)&&E&&(z=(z=y[R.ns].sets)&&z[z.length-1]),(b=n(E,z))&&(E=R.makeUrl(E),y[R.ns].curSrc=E,y[R.ns].curCan=b,b.res||oe(b,b.set.sizes)),b))&&l.set===e[0].set&&((d=H&&!t.complete&&l.res-.1>A)||(l.cached=!0,l.res>=A&&(u=l))),!u)for(e.sort(i),u=e[(a=e.length)-1],r=0;a>r;r++)if((s=e[r]).res>=A){u=e[c=r-1]&&(d||o!==R.makeUrl(s.url))&&(m=e[c].res,h=s.res,g=A,v=e[c].cached,w=void 0,S=void 0,x=void 0,"saveData"===k.algorithm?m>2.7?x=g+1:(S=(h-g)*(w=Math.pow(m-.6,1.5)),v&&(S+=.1*w),x=m+S):x=g>1?Math.sqrt(m*h):m,x>g)?e[c]:s;break}u&&(f=R.makeUrl(u.url),p.curSrc=f,p.curCan=u,f!==o&&R.setSrc(t,u),R.setSize(t))}var m,h,g,v,w,S,x,y,E,z,b},R.setSrc=function(e,t){var s;e.src=t.url,"image/svg+xml"===t.set.type&&(s=e.style.width,e.style.width=e.offsetWidth+1+"px",e.offsetWidth+1&&(e.style.width=s))},R.getSet=function(e){var t,s,r,i=!1,n=e[R.ns].sets;for(t=0;t<n.length&&!i;t++)if((s=n[t]).srcset&&R.matchesMedia(s.media)&&(r=R.supportsType(s.type))){"pending"===r&&(s=r),i=s;break}return i},R.parseSets=function(e,t,r){var i,c,u,o,l=t&&"PICTURE"===t.nodeName.toUpperCase(),f=e[R.ns];(f.src===s||r.src)&&(f.src=D.call(e,"src"),f.src?B.call(e,W,f.src):I.call(e,W)),(f.srcset===s||r.srcset||!R.supSrcset||e.srcset)&&(i=D.call(e,"srcset"),f.srcset=i,o=!0),f.sets=[],l&&(f.pic=!0,function(e,t){var s,r,i,n,c=e.getElementsByTagName("source");for(s=0,r=c.length;r>s;s++)(i=c[s])[R.ns]=!0,(n=i.getAttribute("srcset"))&&t.push({srcset:n,media:i.getAttribute("media"),type:i.getAttribute("type"),sizes:i.getAttribute("sizes")})}(t,f.sets)),f.srcset?(c={srcset:f.srcset,sizes:D.call(e,"sizes")},f.sets.push(c),(u=(a||f.src)&&N.test(f.srcset||""))||!f.src||n(f.src,c)||c.has1x||(c.srcset+=", "+f.src,c.cands.push({url:f.src,d:1,set:c}))):f.src&&f.sets.push({srcset:f.src,sizes:null}),f.curCan=null,f.curSrc=s,f.supported=!(l||c&&!R.supSrcset||u&&!R.supSizes),o&&R.supSrcset&&!f.supported&&(i?(B.call(e,Q,i),e.srcset=""):I.call(e,Q)),f.supported&&!f.srcset&&(!f.src&&e.src||e.src!==R.makeUrl(f.src))&&(null===f.src?e.removeAttribute("src"):e.src=f.src),f.parsed=!0},R.fillImg=function(e,t){var s,r,i,n,c,a=t.reselect||t.reevaluate;e[R.ns]||(e[R.ns]={}),s=e[R.ns],(a||s.evaled!==u)&&((!s.parsed||t.reevaluate)&&R.parseSets(e,e.parentNode,t),s.supported?s.evaled=u:(r=e,n=R.getSet(r),c=!1,"pending"!==n&&(c=u,n&&(i=R.setRes(n),R.applySetCandidate(i,r))),r[R.ns].evaled=c))},R.setupRun=function(){(!Z||V||J!==e.devicePixelRatio)&&(V=!1,J=e.devicePixelRatio,_={},K={},R.DPR=J||1,X.width=Math.max(e.innerWidth||0,U.clientWidth),X.height=Math.max(e.innerHeight||0,U.clientHeight),X.vw=X.width/100,X.vh=X.height/100,u=[X.height,X.width,J].join("-"),X.em=R.getEmValue(),X.rem=X.em)},R.supPicture?(le=M,R.fillImg=M):(g=e.attachEvent?/d$|^c/:/d$|^c|^i/,v=function(){var e=t.readyState||"";w=setTimeout(v,"loading"===e?200:999),t.body&&(R.fillImgs(),(f=f||g.test(e))&&clearTimeout(w))},w=setTimeout(v,t.body?9:99),S=U.clientHeight,ce(e,"resize",(d=function(){V=Math.max(e.innerWidth||0,U.clientWidth)!==X.width||U.clientHeight!==S,S=U.clientHeight,V&&R.fillImgs()},p=99,h=function(){var e=new Date-m;p>e?A=setTimeout(h,p-e):(A=null,d())},function(){m=new Date,A||(A=setTimeout(h,p))})),ce(t,"readystatechange",v)),R.picturefill=le,R.fillImgs=le,R.teardownRun=M,le._=R,e.picturefillCFG={pf:R,push:function(e){var t=e.shift();"function"==typeof R[t]?R[t].apply(R,e):(k[t]=e[0],Z&&R.fillImgs({reselect:!0}))}};for(;q&&q.length;)e.picturefillCFG.push(q.shift());e.picturefill=le,"object"==typeof module&&"object"==typeof module.exports?module.exports=le:"function"==typeof define&&define.amd&&define("picturefill",function(){return le}),R.supPicture||($["image/webp"]=(b="image/webp",T="data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",(C=new e.Image).onerror=function(){$[b]=!1,le()},C.onload=function(){$[b]=1===C.width,le()},C.src=T,"pending"))}(window,document);</script>
    </head>
    <?php $page = basename($_SERVER['PHP_SELF'], '.php'); ?>
    <body class="page <?= $page; ?>">
        <?php include_once("includes/analyticstracking.php"); ?>
