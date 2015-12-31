<?php 
    include "marker/koneksi.php"; 
// Select all the rows in the markers table 
    $query = "select * FROM school"; 
    $result = mysql_query($query); 
        if (!$result) { 
            die('Invalid query: ' . mysql_error()); 
        } 
 
header("Content-type:text/xml"); 
 
// Start XML file, echo parent node 
echo '<penanda>';  
// Iterate through the rows, printing XML nodes for each 
while ($row = @mysql_fetch_assoc($result)) { 
  // ADD TO XML DOCUMENT NODE+ 
    echo '<posisi '; 
    echo 'nama="'.$row['nama'] . '" '; 
    echo 'lintang="'.$row['lintang'] . '" '; 
    echo 'bujur="'.$row['bujur'] . '" '; 
    echo 'jenis="'.$row['jenis'] . '" '; 
    echo '/>';
} 
    echo '</penanda>'; 
?>  