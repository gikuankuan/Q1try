
<marquee scrolldelay="120" direction="left" style="position:absolute; width:99%; height:40px;">
<?php 
$Ad = new DB("ad");
$rows =  $Ad->all(['sh'=>1]);
foreach ($rows as $row){
    echo $row['text'];
    echo "&nbsp;&nbsp;&nbsp;";
}

?>
</marquee>