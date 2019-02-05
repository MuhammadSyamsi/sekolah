    <script src="<?php echo base_url('asset/js/jquery-1.11.3.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/js/jssor.slider-27.5.0.min.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:20020,x:1000}],
              [{b:0,d:1620,x:800}],
              [{b:0,d:1000,x:-767,e:{x:6}},{b:21000,d:1000,x:-807,e:{x:5}}],
              [{b:0,d:520,r:-360}],
              [{b:0,d:520,r:-360}],
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
              [{b:2780,d:520,x:-550,e:{x:6}},{b:4000,d:600,x:550,e:{x:5}}],
              [{b:3300,d:640,y:-145,e:{y:6}},{b:4000,d:600,y:149,e:{y:5}}],
              [{b:2020,d:760,y:-319,e:{y:6}},{b:4000,d:600,x:-320,e:{x:5}}],
              [{b:0,d:2000,x:-320,y:1200}],
              [{b:0,d:3000,x:-320,y:1200}],
              [{b:0,d:4000,x:-320,y:1200}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
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
                $Controls: [{r:0},{r:0},{r:0},{r:0},{r:100},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100},{r:0},{r:0},{r:0}]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1366;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>

    <div class="slider" id="jssor_1" style="position:relative;margin-top:60px; top:0px;left:0px;width:1366px;height:603px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src=<?php echo base_url('asset/img/spin.svg') ?> />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:603px;overflow:hidden;">

            <div data-b="2">
                <div data-ts="preserve-3d" style="position:absolute;top:175px;left:0px;width:1366px;height:603px;">
                    <div data-t="30" style="position:absolute;top:80px;left:-700px;width:500px;height:100px;max-width:500px; background-color:yellow; text-align:left; font-size:56px; padding:17px 0 0 17px; color:black;" ><b>Selamat Datang</b></div>
                    <div data-t="31" style="position:absolute;top:145px;left:-584px;width:500px;height:50px;max-width:500px; text-align:left; font-size:48px; padding:0 0 0 17px; color:white;" ><i>di LPK Multimedia</i></div>
                </div>
                <img data-t="32" style="position:absolute;top:20px;left:1366px;width:518px;height:513px;max-width:518px;" data-src2="<?php echo base_url('asset/img/ft_sd_a.png') ?>" />
            </div>

            <div data-b="2">
                <div data-ts="preserve-3d" style="position:absolute;top:175px;left:0px;width:1366px;height:603px;">
                    <div data-t="30" style="position:absolute;top:80px;left:-700px;width:500px;height:100px;max-width:500px; text-align:left; font-family:ABRASSB; font-size:48px; padding:17px 0 0 17px; color:white;" ><u>Study Tour</u></div>
                    <div data-t="31" style="position:absolute;top:145px;left:-584px;width:500px;height:50px;max-width:500px; text-align:left; font-size:20px; padding:0 0 0 17px; color:white;" >Study Tour ke Malang TV dalam rangka untuk menambah wawasan dan mengenalkan siswa-siswa LPK Multimedia tentang berbagai macam pekerjaan dan tugas masing-masing pekerjaan di bidang broadcasting khususnya pertelivisian.</div>
                </div>
                <img data-t="32" style="position:absolute;top:20px;left:1366px;width:518px;height:513px;max-width:518px;" data-src2="<?php echo base_url('asset/img/ft_sd_c.png') ?>" />
            </div>

            <div data-b="2">
                <div data-ts="preserve-3d" style="position:absolute;top:175px;left:0px;width:1366px;height:603px;">
                    <div data-t="30" style="position:absolute;top:-30px;left:-700px;width:500px;height:100px;max-width:500px; text-align:left; font-size:36px; padding:17px 0 0 17px; color:white;" ><u><b>LPK Multimedia</b></u></div>
                    <div data-t="31" style="position:absolute;top:25px;left:-584px;width:500px;height:50px;max-width:500px; text-align:left; font-size:20px; padding:0 0 0 17px; color:white;" >Tempat paling menyenangkan untuk menuangkan ekspresi di selah-selah riuhnya tugas akademik di skolah SMARIFDA. Di LPK Multimedia tidak hanya menambah keterampilan dalam bidang multimedia, tetapi juga sarana pelepas penat yang sangat berfaedah tentunya.</div>
                </div>
                <img data-t="32" style="position:absolute;top:20px;left:1366px;width:518px;height:513px;max-width:518px;" data-src2="<?php echo base_url('asset/img/ft_sd_b.png') ?>" />
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>