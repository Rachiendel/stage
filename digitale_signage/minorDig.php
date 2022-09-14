<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="minorDig.css">
</head>
<body>

<script>
let plaatjes = []

</script>
<?php

$dir = "../digitale signage/media";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if(is_array(getimagesize($dir."/" . $file))){
     // echo "<img src = '".$dir."/" . $file . "'/> <br>";
     ?>
     <script>
       plaatjes.push('<?php echo $file; ?>');
     </script>
     <?php
    }
    
  }
    closedir($dh);
    
}
}  

?> 


<script>
  var volgorde =0
function rotateimages(){
    document.getElementById("slideshow").setAttribute("src", "media/"+plaatjes[volgorde])
    
    volgorde=[Math.floor(Math.random()*plaatjes.length)]
    
 
}
 
window.onload=function(){
    setInterval("rotateimages()", 1000)
}
</script>
<div style="text-align:center width:2000px" >
<img id="slideshow" src="" />
</div>

</body>