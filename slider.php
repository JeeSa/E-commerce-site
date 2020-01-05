<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
    <script src="js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:20,d:20000,x:1000}],
              [{b:20,d:1600,x:800}],
              [{b:0,d:1000,x:-767,e:{x:6}},{b:21000,d:1000,x:-807,e:{x:5}}],
              [{b:20,d:500,r:-360}],
              [{b:20,d:500,r:-360}],
              [{b:-1,d:1,o:-0.35}],
              [{b:100,d:100,o:-1,e:{o:32}},{b:2300,d:100,o:1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:100,d:100,o:1,e:{o:32}},{b:200,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:200,d:100,o:1,e:{o:32}},{b:300,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:300,d:100,o:1,e:{o:32}},{b:400,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:400,d:100,o:1,e:{o:32}},{b:500,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:500,d:100,o:1,e:{o:32}},{b:600,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:600,d:100,o:1,e:{o:32}},{b:700,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:700,d:100,o:1,e:{o:32}},{b:800,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:800,d:100,o:1,e:{o:32}},{b:900,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:900,d:100,o:1,e:{o:32}},{b:1000,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1000,d:100,o:1,e:{o:32}},{b:1100,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1100,d:100,o:1,e:{o:32}},{b:1200,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1200,d:100,o:1,e:{o:32}},{b:1300,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1300,d:100,o:1,e:{o:32}},{b:1400,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1400,d:100,o:1,e:{o:32}},{b:1500,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1500,d:100,o:1,e:{o:32}},{b:1600,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1600,d:100,o:1,e:{o:32}},{b:1700,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1700,d:100,o:1,e:{o:32}},{b:1800,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1800,d:100,o:1,e:{o:32}},{b:1900,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:1900,d:100,o:1,e:{o:32}},{b:2000,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:2000,d:100,o:1,e:{o:32}},{b:2100,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:2100,d:100,o:1,e:{o:32}},{b:2200,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:2200,d:100,o:1,e:{o:32}},{b:2300,d:100,o:-1,e:{o:32}}],
              [{b:-1,d:1,o:-1},{b:100,d:600,o:0.2},{b:700,d:4300,o:0.2}],
              [{b:0,d:1160,x:783,e:{x:6}}],
              [{b:1160,d:840,x:667,y:34,e:{x:12,y:3}}],
              [{b:2780,d:520,x:-272,e:{x:6}},{b:4000,d:600,x:276,e:{x:5}}],
              [{b:3300,d:640,y:-145,e:{y:6}},{b:4000,d:600,y:149,e:{y:5}}],
              [{b:2020,d:760,y:-319,e:{y:6}},{b:4000,d:600,x:-320,e:{x:5}}],
              [{b:0,d:2000,x:-320,y:1200}],
              [{b:0,d:3000,x:-320,y:1200}],
              [{b:0,d:4000,x:-320,y:1200}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:21000}],
                  [{d:10000,b:5000}],
                  [{d:2000,b:4000}],
                  [{d:5000,b:5000}]
                ],
                $Controls: [{r:20},{r:20},{r:20},{r:20},{r:100},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100},{r:0},{r:0},{r:0}]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        .jssora03l.jssora03ldn      (disabled)
        .jssora03r.jssora03rdn      (disabled)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
        .jssora03l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora03r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

			
			<!--For E-Commerce-->
			
            <div data-b="1">
                <img data-u="image" data-src2="img/2-bg1.jpg" />
                <div style="position:absolute;top:75px;left:0px;width:778px;height:131px;z-index:0;">
                    <img data-u="caption" data-t="30" style="position:absolute;top:0px;left:-783px;width:778px;height:131px;z-index:0;" data-src2="img/1-021.png" />
                    <img data-u="caption" data-t="31" style="position:absolute;top:-12px;left:-285px;width:270px;height:70px;z-index:0;" data-src2="img/1-031.png" />
                </div>
                <img data-u="caption" data-t="32" style="position:absolute;top:182px;left:984px;width:175px;height:165px;z-index:0;" data-src2="img/1-051.png" />
                <a href="http://www.jssor.com" data-u="caption" data-t="33" style="display:block; position:absolute;top:391px;left:446px;width:151px;height:41px;z-index:0;">
                    <img style="width:100%;height:100%;" border="0" data-src2="img/1-06.png" />
                </a>
                <img data-u="caption" data-t="34" style="position:absolute;top:434px;left:90px;width:220px;height:243px;z-index:0;" data-src2="img/2-2.png" />
            </div>
			
			<!--For E-Commerce-->

			
            <a data-u="any" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
            <div data-b="2">
                <img data-u="image" data-src2="img/2-bg1.jpg" />
                <div style="position:absolute;top:75px;left:0px;width:778px;height:131px;z-index:0;">
                    <img data-u="caption" data-t="30" style="position:absolute;top:0px;left:-783px;width:778px;height:131px;z-index:0;" data-src2="img/1-021.png" />
                    <img data-u="caption" data-t="31" style="position:absolute;top:-12px;left:-285px;width:270px;height:70px;z-index:0;" data-src2="img/1-031.png" />
                </div>
                <img data-u="caption" data-t="32" style="position:absolute;top:182px;left:984px;width:175px;height:165px;z-index:0;" data-src2="img/1-051.png" />
                <a href="http://www.jssor.com" data-u="caption" data-t="33" style="display:block; position:absolute;top:391px;left:446px;width:151px;height:41px;z-index:0;">
                    <img style="width:100%;height:100%;" border="0" data-src2="img/1-06.png" />
                </a>
                <img data-u="caption" data-t="34" style="position:absolute;top:434px;left:90px;width:220px;height:243px;z-index:0;" data-src2="img/taylor.jpg" />
            </div>

            <!--For E-Commerce-->


            <a data-u="any" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
            <div data-b="3">
                <img data-u="image" data-src2="img/2-bg1.jpg" />
                <div style="position:absolute;top:75px;left:0px;width:778px;height:131px;z-index:0;">
                    <img data-u="caption" data-t="30" style="position:absolute;top:0px;left:-783px;width:778px;height:131px;z-index:0;" data-src2="img/1-021.png" />
                    <img data-u="caption" data-t="31" style="position:absolute;top:-12px;left:-285px;width:270px;height:70px;z-index:0;" data-src2="img/1-031.png" />
                </div>
                <img data-u="caption" data-t="32" style="position:absolute;top:182px;left:984px;width:175px;height:165px;z-index:0;" data-src2="img/1-051.png" />
                <a href="http://www.jssor.com" data-u="caption" data-t="33" style="display:block; position:absolute;top:391px;left:446px;width:151px;height:41px;z-index:0;">
                    <img style="width:100%;height:100%;" border="0" data-src2="img/1-06.png" />
                </a>
                <img data-u="caption" data-t="34" style="position:absolute;top:434px;left:90px;width:220px;height:243px;z-index:0;" data-src2="img/watch.jpg" />
            </div>

            <!--For E-Commerce-->


            <a data-u="any" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
