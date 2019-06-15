<html>
	<head>
<meta charset="UTF-8">
<title>Reproducción archivos m3u8</title>
<script src="http://jwpsrv.com/library/ejuoyqCsEeK4ayIACpYGxA.js"></script>
<style type="text/css">
#reproductor_aspect{display: none;}
#reproductor_jwpsrv{position: absolute; top: 0px; z-index: 10;}
#reproductor_wrapper{position: relative; display: block; width: 100%; height: auto;}
</style>
<script>// <![CDATA[
//La Key que debes conseguir en la web de JWPlayer en Hexadecimal
jwplayer.key="6RfMdMqZkkH88h026pcTaaEtxNCWrhiF6ACoxKXjjiI=";
// ]]></script>
</head>
 
<body>
 
 
<div id="reproductor_wrapper">
  <object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/8/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="reproductor" name="reproductor" tabindex="0">
    <param name="allowfullscreen" value="true">
    <param name="allowscriptaccess" value="always">
    <param name="seamlesstabbing" value="true">
    <param name="wmode" value="opaque">
  </object>
  <div id="reproductor_aspect"></div>
  <div id="reproductor_jwpsrv"></div>
</div>
<script>// <![CDATA[

jwplayer('reproductor').setup({
    //URL m3u8 que queremos reproducir
    file: "http://compuyorktv.dyndns.tv:8081/compuziptv/tucanaltv/playlist.m3u8",
    'width': '100%',
    skin: "five",
    height: "90%",
    title: 'xsoundtv.com',
    image: "",
    logo: {
    file: "",
    position: 'top-right',
    margin: '0',
    link: ""
    },
    stretching: "fill",
    autostart: "true",
    abouttext: '',
    aboutlink: '',
  });
// ]]></script>
<span>Se está reproduciéndo la URL:</span>
<p>
<textarea placeholder="http://a3live-lh.akamaihd.net/i/a3shds/geoa3series_1@122775/index_2_av-b.m3u8" cols="95" rows="3" readonly></textarea>
</p>
</body>
</html>