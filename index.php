<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <?php
 $token =
'ee61f01c22063654702253187733e60145f9b4d5ae986c727112a1ff093aeccd3e76b00f42612f6554793';
$query = 
file_get_contents("https://api.vk.com/method/newsfeed.search?q=Ребята,120000&count=2&access_token=".$token);
$result = json_decode($query,true);
    print_r($result);
/*foreach($result['response'] as $value){
    echo $value['text'];
}*/
    ?>
    
 
</body>
</html>