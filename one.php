<html><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style><style type="text/css">.pac-container{background-color:#fff;position:absolute!important;z-index:1000;border-radius:2px;border-top:1px solid #d9d9d9;font-family:Arial,sans-serif;box-shadow:0 2px 6px rgba(0,0,0,0.3);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden}.pac-logo:after{content:"";padding:1px 1px 1px 0;height:16px;text-align:right;display:block;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);background-position:right;background-repeat:no-repeat;background-size:120px 14px}.hdpi.pac-logo:after{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)}.pac-item{cursor:default;padding:0 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;line-height:30px;text-align:left;border-top:1px solid #e6e6e6;font-size:11px;color:#999}.pac-item:hover{background-color:#fafafa}.pac-item-selected,.pac-item-selected:hover{background-color:#ebf2fe}.pac-matched{font-weight:700}.pac-item-query{font-size:13px;padding-right:3px;color:#000}.pac-icon{width:15px;height:20px;margin-right:7px;margin-top:6px;display:inline-block;vertical-align:top;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);background-size:34px}.hdpi .pac-icon{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)}.pac-icon-search{background-position:-1px -1px}.pac-item-selected .pac-icon-search{background-position:-18px -1px}.pac-icon-marker{background-position:-1px -161px}.pac-item-selected .pac-icon-marker{background-position:-18px -161px}.pac-placeholder{color:gray}</style>
    <meta content="initial-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
    <title>Places Searchbox</title>
    <style>
      #target {
        width: 345px;
      }
    </style>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/common.js" style=""></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/places_impl.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/23/1/marker.js"></script></head>
  <body>
    
    <div id="map" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;" class="gm-style"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 885px 35px 0px;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: 700px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 444px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 956px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 188px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1212px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -68px; top: -43px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1468px; top: -43px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 700px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 444px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 956px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 188px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1212px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -68px; top: -43px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1468px; top: -43px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: 700px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts0.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3768!3i2457!4i256!2m3!1e0!2sm!3i330290701!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: 444px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts1.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3767!3i2457!4i256!2m3!1e0!2sm!3i330305094!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: 956px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts1.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3769!3i2457!4i256!2m3!1e0!2sm!3i330290701!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: 188px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts0.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3766!3i2457!4i256!2m3!1e0!2sm!3i330305094!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: 1212px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts0.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3770!3i2457!4i256!2m3!1e0!2sm!3i330067133!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: -68px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts1.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3765!3i2457!4i256!2m3!1e0!2sm!3i330305094!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div><div style="position: absolute; left: 1468px; top: -43px; transition: opacity 200ms ease-out 0s;"><img style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://mts1.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3771!3i2457!4i256!2m3!1e0!2sm!3i330067133!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt=""></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 885px 35px 0px;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 112px; position: absolute; left: 650px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data &copy;2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data &copy;2015 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data &copy;2015 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><input type="text" placeholder="Search Box" class="controls" id="pac-input" autocomplete="off" style="z-index: 0; position: absolute; left: 0px; top: 0px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@-33.8315907,151.2063679,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div><div class="gmnoprint" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 14px; right: 0px; display: none;" draggable="false" controlwidth="0" controlheight="0"><div class="gmnoprint" style="display: none; position: absolute;"><div draggable="false" style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255);"><div title="Zoom in" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230);"></div><div title="Zoom out" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div></div></div><div style="box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; background-color: rgb(255, 255, 255); position: absolute; left: 0px; top: 0px; display: none;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;" title="Rotate map 90 degrees"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);" class="gm-tilt"><img style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px; display: none;"><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 20px; font-weight: 500;" draggable="false" title="Show street map">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-left: 0px none; min-width: 37px;" draggable="false" title="Show satellite imagery">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=-33.831591,151.206368&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false"></div></a></div></div></div>
    <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
}


    </script>
    <script defer="" async="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPux3-95cmoc8XkC99ve68S9OPRHygNqg&amp;libraries=places&amp;callback=initAutocomplete"></script>
  

<div class="pac-container pac-logo" style="display: none; width: 298px; position: absolute; left: 125px; top: 42px;"></div></body></html>
<!--
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
    <title>Places Searchbox</title>
    <style>
      #target {
        width: 345px;
      }
    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPux3-95cmoc8XkC99ve68S9OPRHygNqg&libraries=places&callback=initAutocomplete"
         async defer></script>
  </body>
</html>
-->
<?php /*
echo $address = "Jatra Bari, Dhaka, Dhaka Division, Bangladesh";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,'https://maps.googleapis.com/maps/api/geocode/json?address='. urlencode($address));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
echo $json = curl_exec($curl);
curl_close($curl);
*/
?>
