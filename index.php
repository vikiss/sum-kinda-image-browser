<?php
$files = preg_grep('~\.(jpeg|jpg|png)$~', scandir(getcwd()));
$files = array_values($files);
$file = $files[0];
$i = 0;
if (isset($_GET['i'])) {
  $i = $_GET['i'];
    if (is_numeric($i)) {$file = $files[$i];} 
}
?>

<html>
 <head>
<style>
body, html {
  width: 100%; height: 100%;  
}

#view {
position:fixed !important;
position:absolute;
top:0;
right:0;
bottom:0;
left:0;
}

#im {height: 90%; }

img {
     max-width:100%;
max-height:100%; margin: 0 auto;
}
</style>
</head>
<body><div id="view">
<div><?php if ($i>0) 
{
$j=$i-1;
echo '<a href="?i='.$j.'">[<]</a>';
} ?>
&nbsp;|&nbsp;<?php if ($i<(count($files)-1)) 
{
$j=$i+1;
echo '<a href="?i='.$j.'">[>]</a>';
} ?></div>
<div id="im">
<img src="<?= $file; ?>" />
</div>
</div>
</body>
</html>
