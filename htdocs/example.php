<html>
<head>
  <title>Example</title>
</head>
<body>
<?php
function puts($str){
  echo $str."<br/>";
}

echo "a", "b", "c", "<br/>";
print "abc<br/>";

puts("roland");
puts("Maple"."Story"."M");

$game = "himawari";
puts("大好きなのは${game}");

#ポインタ渡し的な？
$mother = "幸子";
$father =& $mother;
$father = "幸男";

puts($mother);

#定数
define("MAX", 10);
puts(MAX);

$language = "ja";
if(strcmp($language, "ja") == 0){
  puts("日本");
}

for($i=0;$i<10;$i++){
  puts($i);
}

$array = array('inu', 'neko', 'hebi');

foreach ($array as $item){
  puts($item);
}

?>
</body>
</html>
