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
      ['Posisi Daerah Prambanan<hr><br>Kecamatan Prambanan</br><hr>Yogyakarta<marquee> Prambanan, </marquee>  ', -7.7147713,110.4985977, 1],
          ];

    var petaKu = new google.maps.Map(document.getElementById('posisiPeta'), {
      zoom: 11,
      center: new google.maps.LatLng(-7.75166,110.4995491),
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