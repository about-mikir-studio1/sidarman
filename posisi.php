<html>
<head>
<script 
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUmX6Xyoy4amBcTF6qDlx3PF9qOJofVPs">
</script>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <script src="http://maps.google.com/maps/api/js?sensor=false"
          type="text/javascript"></script>
</head>
<body>
    <div id="posisiPeta" style="width:950px;height:568px;"></div>

  <script type="text/javascript">

    var posisi = [
      ['Rumah Saya<hr><br>Heri Purnama</br><hr>125410101<marquee> Mranggisari, Solodiran, Manisrenggo, Klaten</marquee>  ', -7.7147713,110.4985977, 1],
          ];

    var petaKu = new google.maps.Map(document.getElementById('posisiPeta'), {
      zoom: 13,
      center: new google.maps.LatLng( -7.7147713,110.4985977),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var jendela= new google.maps.InfoWindow();
    var tondo, i;

    for (i = 0; i < posisi.length; i++) {
     tondo = new google.maps.Marker({
        position: new google.maps.LatLng(posisi[i][1], posisi[i][2]),
        map: petaKu
      });

      google.maps.event.addListener(tondo, 'click', (function(tondo, i) {
        return function() {
          jendela.setContent(posisi[i][0]);
          jendela.open(petaKu, tondo);
        }
      })(tondo, i));
    }//end for
  </script>
</body>
</html>