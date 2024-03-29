<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ExtendBootstrap - Extend Bootstrap with essential plugins and components</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Extend Bootstrap with our Open source project ExtendBootstrap on Github. It includes many important bootstrap plugins like Date Time picker, Color picker, jQuery UI sliders, On / Off switches, Checkbox and radio, Pie charts, Line graph, Bootstrap alert and confirm implementation with Bootbox and Bootstrap intro plugin named Bootstro">
    <meta name="author" content="Sanket Sahu">
    <meta name="keywords" content="bootstrap,extendbootstrap,extend bootstrap,date picker,time picker,date time picker,color picker,knob input,jqueryui slider,checkbox,css,css switches,on off switches,pie chart,line graph,bootbox,bootstro,sahusoft,sanket sahu,sanketsahu">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="lib/extendedBootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/extendedBootstrap/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="lib/extendedBootstrap/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="lib/extendedBootstrap/css/chosen.css" />
    <link rel="stylesheet" href="lib/extendedBootstrap/css/datepicker.css" />
    <link rel="stylesheet" href="lib/extendedBootstrap/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="lib/extendedBootstrap/css/colorpicker.css" />
    <link href="lib/extendedBootstrap/css/refineslide.css" rel="stylesheet" />
    <link href="lib/extendedBootstrap/css/bootstro.css" rel="stylesheet" />



    <link rel="stylesheet" href="lib/extendedBootstrap/css/jquery-slider.css" />
    <link rel="stylesheet" href="lib/extendedBootstrap/css/checkbox-radio-switch.css" />
    <link href="lib/extendedBootstrap/css/extend.css" rel="stylesheet">

  </head>

  <body data-twttr-rendered="true" cz-shortcut-listen="true" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">


  <!-- Navbar ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="../">ExtendBootstrap v0.1</a>
       <div class="nav-collapse collapse" id="main-menu">
        
       </div>
     </div>
   </div>
 </div>

<div class="container" id="top">

<!-- header
================================================== -->
<header>
  <div class="row-fluid double-gap-top">
    <div class="">
      <h1>ExtendBootstrap v0.1<small></small>
        <a href="https://github.com/sahusoftcom/extendbootstrap/archive/master.zip" class="btn btn-large btn-primary">Download v0.1</a>
      </h1>
      <p>Extend Bootstrap with our Open source project ExtendBootstrap on Github. It includes many important bootstrap plugins like Date Time picker, Color picker, jQuery UI sliders, On / Off switches, Checkbox and radio, Pie charts, Line graph, Bootstrap alert and confirm implementation with Bootbox and Bootstrap intro plugin named Bootstro.</p>
    </div>
  </div>
</header>

<!-- Components
================================================== -->
<div style="height: 30px"></div>

<div class="row-fluid">
  <div class="span12">
    <div class="box-wrap">
      <div class="box-heading">
          <h4><i class="icon-calendar"></i> Want to get an app developed?</h4>
      </div>
      <div class="box-inner">
        <big>Looking for app development?</big>&nbsp;
        <a href="http://www.sahusoft.com" class="btn btn-info btn-large">Send your requirements</a>
      </div>
    </div>
  </div>
</div>

<div style="height: 20px"></div>

<div class="row-fluid">

  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
          <h4><i class="icon-calendar"></i> Date and Time Picker</h4>
      </div>
      <div class="box-inner">
        <div class="row-fluid">
          <label for="id-date-picker-1">Date Picker</label>
        </div>

        <div class="control-group">
          <div class="row-fluid input-append date">
            <input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
            <span class="add-on">
              <i class="icon-calendar"></i>
            </span>
          </div>
        </div>    

        <div class="row-fluid">
          <label for="timepicker1">Time Picker</label>
        </div>

        <div class="control-group">
          <div class="input-append bootstrap-timepicker">
            <input id="timepicker1" type="text" class="input-small" />
            <span class="add-on">
              <i class="icon-time"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-tint"></i> Color Picker </h4>
      </div>
      <div class="box-inner">
        <div class="row-fluid">
          <div class="control-group">
            <label for="colorpicker1">Color Picker</label>
            <div id="colorpicker1" class="input-prepend color colorpicker" data-color="#000000" data-color-format="hex" data-colorpicker-guid="1">
              <span class="add-on"><i style="background-color: #000000;"></i></span>
              <input id="background" type="text" class="" value="#000000" name="background">
            </div>
          </div>

          <div class="row-fluid"><label for="colorpicker2">Color Picker</label></div>
          <div class="control-group">          
            <div id="colorpicker2">
              <input id="background" class="colorpicker input-small" type="text" value="#000000" name="background">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-dashboard"></i> Knob Input</h4>
      </div>

      <div class="box-inner">
        <div class="control-group">
          <div class="row-fluid">
            <div class="span4">
              <input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#2091CF"  />
            </div>

            <div class="span4">
              <input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#DF6E1E" data-displayPrevious="true" data-angleArc="250" data-angleOffset="-125" />
            </div>
            <div class="span4">
              <input type="text" class="input-small knob" data-min="0" data-max="10" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#4D3A7D" data-angleOffset="90" data-cursor="true" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="double-border"></div>


<div class="row-fluid">
  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-list"></i> jQuery UI Sliders</h4>
      </div>

      <div class="box-inner">
        <div class="row-fluid">
          <div class="span1">
            <div id="slider-range"></div>
          </div>

          <div class="span11">
            <div id="eq">
              <span class="ui-slider-green">77</span>
              <span class="ui-slider-red">55</span>
              <span class="ui-slider-purple">33</span>
              <span class="ui-slider-orange">40</span>
              <span class="ui-slider-dark">88</span>
               <div id="slider-range"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-check"></i> CheckBox and Radio</h4>
      </div>

      <div class="box-inner">
        <div class="row-fluid">
          <div class="span6">
            <div class="control-group">
              <label class="control-label">Checkbox</label>

              <div class="controls">
                <label>
                  <input name="form-field-checkbox" type="checkbox" />
                  <span class="lbl"> choice 1</span>
                </label>

                <label>
                  <input name="form-field-checkbox" type="checkbox" />
                  <span class="lbl"> choice 2</span>
                </label>

                <label>
                  <input name="form-field-checkbox" type="checkbox" />
                  <span class="lbl"> choice 3</span>
                </label>

                <label>
                  <input name="form-field-checkbox" disabled="" type="checkbox" />
                  <span class="lbl"> disabled</span>
                </label>
              </div>
            </div>
          </div>

          <div class="span6">
            <div class="control-group">
              <label class="control-label">Radio</label>

              <div class="controls">
                <label>
                  <input name="form-field-radio" type="radio" />
                  <span class="lbl"> radio option 1</span>
                </label>

                <label>
                  <input name="form-field-radio" type="radio" />
                  <span class="lbl"> radio option 2</span>
                </label>

                <label>
                  <input name="form-field-radio" type="radio" />
                  <span class="lbl"> radio option 3</span>
                </label>

                <label>
                  <input disabled="" name="form-field-radio" type="radio" />
                  <span class="lbl"> disabled</span>
                </label>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-adjust"></i> On/Off Switches</h4>
      </div>
      <div class="box-inner">
        <div class="row-fluid">
          <div class="span4 offset2">
            <div class="onoffswitch">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
              <label class="onoffswitch-label" for="myonoffswitch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
            </div>
          </div>
          <div class="span4 offset1">
            <div class="onoffswitch">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchoff" >
              <label class="onoffswitch-label" for="myonoffswitchoff">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
            </div>
          </div>
        </div>

        <div class="row-fluid">
          <div class="span4 offset2">
            <div class="onoffswitch switch-square">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-square" checked>
              <label class="onoffswitch-label" for="myonoffswitch-square">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
            </div>
          </div>
          <div class="span4 offset1">
            <div class="onoffswitch switch-square">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchoff-square" >
              <label class="onoffswitch-label" for="myonoffswitchoff-square">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
            </div>
          </div>
        </div>

        <div class="row-fluid tp">
          <div class="span4 offset2">
            <div class="onoffswitch tick">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-tick" checked>
              <label class="onoffswitch-label" for="myonoffswitch-tick">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch tickswitch-switch"></span>
              </label>
            </div>
          </div>
          
          <div class="span4 offset1">
            <div class="onoffswitch tick">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-tickoff" >
              <label class="onoffswitch-label" for="myonoffswitch-tickoff">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch tickswitch-switch"></span>
              </label>
            </div>
          </div>
        </div>

        <div class="row-fluid">
          <div class="span4 offset2">
            <div class="onoffswitch switch-square tick">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-tick-square" checked>
              <label class="onoffswitch-label" for="myonoffswitch-tick-square">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch tickswitch-switch"></span>
              </label>
            </div>
          </div>
          
          <div class="span4 offset1">
            <div class="onoffswitch switch-square tick">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-tickoff-square" >
              <label class="onoffswitch-label" for="myonoffswitch-tickoff-square">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch tickswitch-switch"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="double-border"></div>

<div class="row-fluid">
  <ul class="nav nav-pills pull-right transition-option transition-btn-wrap">
    <li class="dropdown active">
      <a class="dropdown-toggle transition-btn" data-toggle="dropdown" href="#">Change Transition <b class="caret white"></b></a>
      <ul class="translist group dropdown-menu pull-right">
        <li><a href="#_cubeH" class="bobble-css active">Cube horizontal</a></li>
        <li><a href="#_cubeV" class="bobble-css">Cube vertical</a></li>
        <li><a href="#_scale" class="bobble-css">Scale</a></li>
        <li><a href="#_blockScale" class="bobble-css">Block scale</a></li>
        <li><a href="#_fade" class="bobble-css">Fade</a></li>
        <li><a href="#_random" class="bobble-css">Random</a></li>
        <li><a href="#_sliceH" class="bobble-css">Slice horizontal</a></li>
        <li><a href="#_sliceV" class="bobble-css">Slice vertical</a></li>
        <li><a href="#_slideH" class="bobble-css">Slide horizontal</a></li>
        <li><a href="#_slideV" class="bobble-css">Slide vertical</a></li>                    
        <li><a href="#_fan" class="bobble-css">Fan</a></li>                    
        <li><a href="#_kaleidoscope" class="bobble-css">Kaleidoscope</a></li>
        <li><a href="#_blindH" class="bobble-css">Blind horizontal</a></li>
        <li><a href="#_blindV" class="bobble-css">Blind Vertical</a></li>                    
      </ul> 
    </li>
  </ul>
</div>

<div class="row-fluid">
  <div class="section-silder group">
    <ul id="images" class="rs-slider no-margin">
      <li class="group active"><img src="img/banner-1.jpg" alt="Slider1" /></li>
      <li class="group"><img src="img/banner-2.jpg" alt="Slider2" /></li>
      <li class="group"><img src="img/banner-3.jpg" alt="Slider3" /></li>
    </ul>    
  </div>
</div>

<div class="double-border"></div>

<div class="row-fluid">
  <div class="span6">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-signal"></i> Colors</h4>
      </div>
      <div class="box-inner">
        <div class="row-fluid">
          <div class="widget-main">
            <div id="piechart-placeholder"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="span6">
    <div class="box-wrap">
      <div class="box-heading">
        <h4><i class="icon-signal"></i> Color Details</h4>
      </div>
      <div class="box-inner">
        <div id="sales-charts"></div>
      </div>
    </div>
  </div>
</div>

<div class="double-border"></div>

<div class="box-wrap">
  <div class="box-heading">
    <h4><i class="icon-exclamation-sign"></i> BootBox</h4>
  </div>
  <div class="box-inner">
    <div class="bb-alert alert alert-info" style="display:none;">
        <span>The examples populate this alert with dummy content</span>
    </div>

    <div class="row-fluid">
      <a href="#" data-bb="alert_callback" class="btn">Alert</a> 
      <a href="#" data-bb="confirm" class="btn">Confirm</a>
      <a href="#" data-bb="prompt" class="btn">Prompt</a>
      <a href="#" data-bb="dialog" class="btn">Dialog</a>
    </div>
  </div>
</div>

<div class="double-border"></div>
 
<div class="box-wrap">
  <div class="box-heading">
    <h4><i class="icon-tag"></i> Bootstro</h4>
  </div>
  <div class="box-inner">
    <div class="row-fluid">
        <h3 class="bootstro" data-bootstro-title="Hello, I am a normal BOOTSTRAP popover" data-bootstro-content="Because bootstrap rocks. Life before bootstrap was sooo miserable" data-bootstro-width="400px" data-bootstro-placement="bottom" data-bootstro-step="0" data-original-title="">Bootstro.js </h3>  
    </div>

    <div class="row-fluid">
      <a class="btn" href="javascript:void(0)" id="demo">Click me!</a> 
    </div>

    <div class="row-fluid double-gap-top">
      <h4>Bootstro features </h4>
      <div class="row-fluid">
        <div class="span4 bootstro bootstro-highlight" data-bootstro-title="I am simple" data-bootstro-content="Call bootstro.start('.bootstro') or just &lt;b&gt;bootstro.start()&lt;/b&gt;" data-bootstro-step="1" data-original-title="">
          <p><i class="icon-ok"></i> <b>Any element anywhere </b> on the page can be intro'ed: popovers are automatically scrolled to so they always get focused</p>
        </div>
        <div class="span4">
          <p class="bootstro" data-bootstro-step="2" data-bootstro-content="I work with Esc, → ↓, ← ↑ keyboard shortcuts too">
          <i class="icon-ok"></i> <b>Keyboard shortcuts</b>: Works with Esc, → ↓, ← ↑ shortcuts too</p>
        </div>
        <div class="span4">
          <p class="bootstro" data-bootstro-step="3" data-bootstro-content="Slideshow can be loaded via ajax">
          <i class="icon-ok"></i> <b>Show can be alternativly loaded via ajax</b>: This way the page HTML can be kept clean, 
          and server also can decide which elements to show more easily,or translate the show more easily.</p>      
        </div>
      </div>
    </div>
  </div>
</div>

<div class="double-border"></div>



<div class="row-fluid">
  <div class="span4">
    <div class="box-wrap">
      <div class="box-inner">
        <h3>Try new Bootstrap themes and templates on <a href="http://strapui.com">StrapUI.com</a></h3>
        <div class="row-fluid">
          <div class="span12" style="margin-top:20px">
            <div class="well well-small">              
              <h4  style="margin-bottom:15px"><a href="http://strapui.com/theme/cleanstrap">CleanStrap theme</a></h4>
              <a href="http://strapui.com/theme/cleanstrap"><img src="/img/cleanstrap.jpg" width="100%"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="span4">
    <div class="box-wrap">
      <div class="box-inner">
        <h3  style="margin-bottom:15px">Free Angularjs Themes <a href="http://startangular.com">StartAngular.com</a></h3>
        <div class="row-fluid">
          <div class="span12">
              <a href="http://startangular.com/product/sb-admin-angular-theme/"><img src="/img/sb-admin.jpg" width="100%;"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="span4">
    <div class="box-wrap">
      <div class="box-inner">
        <h3  style="margin-bottom:15px">Free Laravel Themes <a href="http://startlaravel.com">StartLaravel.com</a></h3>
        <div class="row-fluid">
          <div class="span12">
              <a href="http://startlaravel.com/themes/sb-admin-laravel/"><img src="/img/laravel-theme.jpg" width="100%;"></a>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<div class="double-border"></div>

<!-- <div class="row-fluid">
  <div class="span6">
    <div class="box-wrap">
      <div class="box-inner">
        <a href="http://startlaravel.com/"><img src="/img/startlaravel.jpg" width="100%;"></a>
      </div>
    </div>
  </div>
</div>

<div class="double-border"></div> -->

<!-- Footer
================================================== -->


  <footer id="footer">
    <p class="pull-right"><a href="#top">Back to top</a></p>
    <div class="links">
      <!-- <a href="http://news.bootswatch.com">Blog</a>
      <a href="http://feeds.feedburner.com/bootswatch">RSS</a>
      <a href="https://twitter.com/thomashpark">Twitter</a> -->
    </div>
  </footer>

</div><!-- /container -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42861651-1', 'extendbootstrap.com');
  ga('send', 'pageview');

</script>


<!-- javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="lib/extendedBootstrap/js/bootstrap.min.js"></script>
<script src="lib/extendedBootstrap/js/jquery-ui-1.10.3.custom.min.js"></script>

<script src="lib/extendedBootstrap/js/flot/jquery.flot.min.js"></script>
<script src="lib/extendedBootstrap/js/flot/jquery.flot.pie.min.js"></script>
<script src="lib/extendedBootstrap/js/flot/jquery.flot.resize.min.js"></script>

<script src="lib/extendedBootstrap/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="lib/extendedBootstrap/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="lib/extendedBootstrap/js/bootstrap-colorpicker.min.js"></script>

<script src="lib/extendedBootstrap/js/jquery.knob.min.js"></script>
<script src="lib/extendedBootstrap/js/jquery.autosize-min.js"></script>
<script src="lib/extendedBootstrap/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="lib/extendedBootstrap/js/jquery.maskedinput.min.js"></script>
<script src="lib/extendedBootstrap/js/jquery.refineslide.js"></script>
<script src="lib/extendedBootstrap/js/bootbox.js"></script>
<script src="lib/extendedBootstrap/js/bootstro.min.js"></script>




<script type="text/javascript">
      $(function() {  
        var data = [
        { label: "Green",  data: 30.7, color: "#48CA3B"},
        { label: "Blue",  data: 24.5, color: "#00BCE1"},
        { label: "Purple",  data: 10.2, color: "#4D3A7D"},
        { label: "Red",  data: 18.6, color: "#AD1D28"},
        { label: "Yellow",  data: 16, color: "#DEBB27"}
        ];
      
        var placeholder = $('#piechart-placeholder').css({'width':'70%' , 'min-height':'150px'});
        $.plot(placeholder, data, {
        
        series: {
              pie: {
                  show: true,
            tilt:0.8,
            highlight: {
              opacity: 0.25
            },
            stroke: {
              color: '#fff',
              width: 2
            },
            startAngle: 2
            
              }
          },
          legend: {
              show: true,
          position: "ne", 
            labelBoxBorderColor: null,
          margin:[-30,15]
          }
        ,
        grid: {
          hoverable: true,
          clickable: true
        },
        tooltip: true, //activate tooltip
        tooltipOpts: {
          content: "%s : %y.1",
          shifts: {
            x: -30,
            y: -50
          }
        }
        
       });
      
       
        var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
        placeholder.data('tooltip', $tooltip);
        var previousPoint = null;
      
        placeholder.on('plothover', function (event, pos, item) {
        if(item) {
          if (previousPoint != item.seriesIndex) {
            previousPoint = item.seriesIndex;
            var tip = item.series['label'] + " : " + item.series['percent']+'%';
            $(this).data('tooltip').show().children(0).text(tip);
          }
          $(this).data('tooltip').css({top:pos.pageY + 10, left:pos.pageX + 10});
        } else {
          $(this).data('tooltip').hide();
          previousPoint = null;
        }
        
       });
      
      
        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
          d1.push([i, Math.sin(i)]);
        }
      
        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
          d2.push([i, Math.cos(i)]);
        }
      
        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
          d3.push([i, Math.tan(i)]);
        }
        
      
        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
          { label: "Yellow", data: d1 },
          { label: "Blue", data: d2 },
          { label: "Red", data: d3 }
        ], {
          hoverable: true,
          shadowSize: 0,
          series: {
            lines: { show: true },
            points: { show: true }
          },
          xaxis: {
            tickLength: 0
          },
          yaxis: {
            ticks: 10,
            min: -2,
            max: 2,
            tickDecimals: 3
          },
          grid: {
            backgroundColor: { colors: [ "#fff", "#fff" ] },
            borderWidth: 1,
            borderColor:'#555'
          }
        });

        $( "#input-size-slider" ).css('width','200px').slider({
          value:1,
          range: "min",
          min: 1,
          max: 6,
          step: 1,
          slide: function( event, ui ) {
            var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
            var val = parseInt(ui.value);
            $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
          }
        });
      
        $( "#input-span-slider" ).slider({
          value:1,
          range: "min",
          min: 1,
          max: 11,
          step: 1,
          slide: function( event, ui ) {
            var val = parseInt(ui.value);
            $('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
          }
        });
        
        
        var $tooltip = $("<div class='tooltip right in' style='display:none;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>").appendTo('body');
        $( "#slider-range" ).css('height','200px').slider({
          orientation: "vertical",
          range: true,
          min: 0,
          max: 100,
          values: [ 17, 67 ],
          slide: function( event, ui ) {
            var val = ui.values[$(ui.handle).index()-1]+"";
            
            var pos = $(ui.handle).offset();
            $tooltip.show().children().eq(1).text(val);   
            $tooltip.css({top:pos.top - 10 , left:pos.left + 18});
            
            //$(this).find('a').eq(which).attr('data-original-title' , val).tooltip('show');
          }
        });
        $('#slider-range a').tooltip({placement:'right', trigger:'manual', animation:false}).blur(function(){
          $tooltip.hide();
          //$(this).tooltip('hide');
        });
        //$('#slider-range a').tooltip({placement:'right', animation:false});
        
        $( "#slider-range-max" ).slider({
          range: "max",
          min: 1,
          max: 10,
          value: 2,
          //slide: function( event, ui ) {
          //  $( "#amount" ).val( ui.value );
          //}
        });
        //$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
        
        $( "#eq > span" ).css({width:'90%', float:'left', margin:'15px'}).each(function() {
          // read initial values from markup and remove that
          var value = parseInt( $( this ).text(), 10 );
          $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true
            
          });
        });
      
        
      })
    </script>


    <script type="text/javascript">
      $(document).ready(function() {   

        $('.date-picker').datepicker();
        $('#timepicker1').timepicker({
          minuteStep: 1,
          showSeconds: true,
          showMeridian: false
        });
                
        $('.colorpicker').colorpicker();
        $('.colorpicker input').click(function() {
          $(this).parents('.colorpicker').colorpicker('show');
        })


        $('.knob').knob();

        var $upper = $('#upper');

        $('#images').refineSlide({
            transition : 'random',
            onInit : function () {
                var slider = this.slider,
                   $triggers = $('.translist').find('> li > a');

                $triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

                $triggers.on('click', function (e) {
                   e.preventDefault();

                    if (!$(this).find('.unsupported').length) {
                        $triggers.removeClass('active');
                        $(this).addClass('active');
                        slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                    }
                });

                function support(result, bobble) {
                    var phrase = '';

                    if (!result) {
                        phrase = ' not';
                        $upper.find('div.bobble-'+ bobble).addClass('unsupported');
                        $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                    }
                }

                support(this.slider.cssTransforms3d, '3d');
                support(this.slider.cssTransitions, 'css');
            }
        });

      });
    </script>

    <script>
      var Example = (function() {
        "use strict";

        var elem,
            hideHandler,
            that = {};

        that.init = function(options) {
            elem = $(options.selector);
        };

        that.show = function(text) {
            clearTimeout(hideHandler);

            elem.find("span").html(text);
            elem.fadeIn();

            hideHandler = setTimeout(function() {
                that.hide();
            }, 4000);
        };

        that.hide = function() {
            elem.fadeOut();
        };

        return that;

        }());

        $(function() {
          
        Example.init({
            "selector": ".bb-alert"
        });

      });
    </script>

    <script type="text/javascript">

      $(function() {

        var demos = {};

        $(document).on("click", "a[data-bb]", function(e) {
            e.preventDefault();
            var type = $(this).data("bb");

            if (typeof demos[type] === 'function') {
                demos[type]();
            }
        });

        // let's namespace the demo methods; it makes them easier
        // to invoke
        demos.alert = function() {
            bootbox.alert("Hello world!");
        };

        demos.alert_callback = function() {
            bootbox.alert("Hello world!");
        };

        demos.confirm = function() {
            bootbox.confirm("Are you sure?", function(result) {
                Example.show("Confirm result: "+result);
            });
        };

        demos.prompt = function() {
            bootbox.prompt("What is your name?", function(result) {
                if (result === null) {
                    Example.show("Prompt dismissed");
                } else {
                    Example.show("Hi <b>"+result+"</b>");
                }
            });
        };

        demos.dialog = function() {
            bootbox.dialog("I am a custom dialog", [{
                "label" : "Success!",
                "class" : "btn-success",
                "callback": function() {
                    Example.show("great success");
                }
            }, {
                "label" : "Danger!",
                "class" : "btn-danger",
                "callback": function() {
                    Example.show("uh oh, look out!");
                }
            }, {
                "label" : "Click ME!",
                "class" : "btn-primary",
                "callback": function() {
                    Example.show("Primary button");
                }
            }, {
                "label" : "Just a button..."
            }]);
        };

        
    })
  </script>

  <script type="text/javascript">
    // $(document).ready(function(){
    //   bootstro.start(selector, options);
    // });
  </script>

  <script type="text/javascript">

    $(document).ready(function(){
        $("#demo").click(function(){
            bootstro.start(".bootstro", {
                onComplete : function(params)
                {
                    alert("Reached end of introduction with total " + (params.idx + 1)+ " slides");
                },
                onExit : function(params)
                {
                    alert("Introduction stopped at slide #" + (params.idx + 1));
                },
            });    
        });
        $(".demo_stopOn").click(function(){
            alert('Clicking on the backdrop or Esc will NOT stop the show')
            bootstro.start('.bootstro', {stopOnBackdropClick : false, stopOnEsc:false});    
        });
        $(".demo_size1").click(function(){
            bootstro.start('.bootstro_size1');    
        });
        $(".demo_nonav").click(function(){
            bootstro.start('.bootstro', {
                nextButton : '',
                prevButton : '',
                finishButton : ''
            });    
        });
        $(".demo_ajax").click(function(){
            bootstro.start('', {
                url : './bootstro.json',
            });    
        });
    });
  
  </script>

  <a href="https://github.com/sahusoftcom/extendbootstrap"><img style="position: fixed; top: 0; right: 0; border: 0; z-index:9999" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>

  </body>
</html>
