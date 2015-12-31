<html>
<head> 
    <meta name="viewport" content="initial-scale=1.0, 
user-scalable=no" />     
    <meta http-equiv="content-type" content="text/html; 
charset=UTF-8"/> 
    <title> </title> 
    <script type="text/javascript" 
src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script> 
    <script type="text/javascript"> 
    //<![CDATA[ 
 
    var ikonPilih = { 
      sekolah_ku: { 
        ikonEndi: 'icon/map-marker.png' 
      }, 
    }; 
 
 
    function initialize() { 
      var petaKu = new 
google.maps.Map(document.getElementById("kanvas"), { 
        center: new google.maps.LatLng(-7.7411502,110.4942987), 
        zoom: 14, 
        mapTypeId: 'roadmap' 
      }); 
      var infoWindow = new google.maps.InfoWindow; 
 
      // Change this depending on the name of your PHP file 
      downloadUrl("pembangkit_xml_marker.php", function(data) 
{ 
        var xml = data.responseXML; 
        var posisi2 = 
xml.documentElement.getElementsByTagName("posisi"); 
        for (var i = 0; i < posisi2.length; i++) { 
          var nama = posisi2[i].getAttribute("nama"); 
          var titik = new google.maps.LatLng( 
              parseFloat(posisi2[i].getAttribute("lintang")), 
              parseFloat(posisi2[i].getAttribute("bujur"))); 
 
 var jenis = posisi2[i].getAttribute("jenis"); 
 
          var teks = "<b>" + nama + "</b>";           var ikon = ikonPilih[jenis] || {}; 
          var tondo = new google.maps.Marker({ 
            map:petaKu, 
            position: titik, 
            icon: ikon.ikonEndi 
          }); 
 
 
   tampilInfoWindow(tondo, petaKu, infoWindow, teks); 
        } 
       }); 
    } 
 
    function tampilInfoWindow(tondo, petaKu, infoWindow, 
teks) { 
      google.maps.event.addListener(tondo, 'click', 
function() { 
        infoWindow.setContent(teks); 
        infoWindow.open(petaKu, tondo); 
      }); 
    } 
 
    function downloadUrl(url, callback) { 
      var jaluk = window.ActiveXObject ? 
          new ActiveXObject('Microsoft.XMLHTTP') : 
          new XMLHttpRequest; 
 
      jaluk .onreadystatechange = function() { 
        if (jaluk .readyState == 4) { 
          jaluk .onreadystatechange = doNothing; 
          callback(jaluk, jaluk.status); 
        } 
      }; 
 
      jaluk .open('GET', url, true); 
      jaluk .send(null); 
    } 
 
    function doNothing() {} 
 
    //]]> 
 
  </script> 
 
  </head> 
 
  <body onload="initialize()">     <div id="kanvas" style="width: 800px; height: 
600px"></div> 
  </body> 
 
</html>