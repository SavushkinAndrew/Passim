
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

 <?php 
   $_GET["q"] = str_replace(' ', '&shy;', $_GET["q"]);
    if (isset($_GET["q"])) {
        
        $search=$_GET["q"];
    };
  ?>
  <form action="/"> 
  <input type="text" name="q">
  <input type="submit">
  </form>
  
   
    <?php
 $token =
'ee61f01c22063654702253187733e60145f9b4d5ae986c727112a1ff093aeccd3e76b00f42612f6554793';
$query = 
file_get_contents("https://api.vk.com/method/newsfeed.search?q=".$search."&count=3&access_token=".$token);
$result = json_decode($query,true);
    
foreach($result['response'] as $value){
    echo $value['text'];
}
    ?>
    
 
</body>
</html>