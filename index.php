
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <?php 
        //$_GET["q"] = str_replace(' ', '&shy', $_GET["q"]);
    if (isset($_GET["q"])) { $q=$_GET["q"];
    $q = str_replace(' ', '%20', $q);}
    if (isset($_GET["col"])) { $col=$_GET["col"];}
    $token =
    '1f4e6e751f4e6e751f4e6e75d51f15fbbc11f4e1f4e6e7547b13a0cbef55a1ed042f109';
    $query = 
    file_get_contents("https://api.vk.com/method/newsfeed.search?q=".$q."&count=".$col."&extended=1&filters=post&access_token=".$token."&v=5.63");
    $result = json_decode($query,true); ?>  
    <div class="wrapper">
        <div class="header">
            <h1>Search engine VK</h1>
        </div>
        <div class="content">
            <div class='inform'>
                <form action="/"> 
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" >Поиск !!!</button>
                        </span>
                        <input type="text" class="form-control" name="q">
                    </div>    
                    <select name="col" class="form-control">
                        <option>1</option>
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                    </select>
                </form>
                <?php 
                    foreach($result['response']['items'] as $value){ 
                    //print_r($value);
                ?>
                
                
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="post-foto">
                            <svg>
                            <img src="<?php echo $value['attachments'][0]['photo']['photo_130']?>">
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="post-user">
                            Тест
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post-text">
                            <div class="box">
                                <div class="box__in">
                                    <a class="cc" href="https://vk.com/wall<?php echo $value['owner_id'] ?>_<?php echo $value['id']?>">
                            <?php echo $value['text'] ?>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--
                <div class="col-md-12">
                    <div class="row">
                        <div class="foto col-md-4">
                            <img src="<?php/* echo $value['photo']?>">
                        </div>
                        <div class="name col-md-3">
                            <?php     
                           
                            ?>
                        </div>
                        <div class="text col-md-5">
                            <div class="box">
                                <div class="box__in">
                                    <a class="cc" href="https://vk.com/wall<?php echo $value['owner_id'] ?>_<?php echo $value['id']?>">
                                        <p>
                                            <?php echo $value['text'] */?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>    
-->
                <?php
                };
                ?>
                

            </div>
        </div>
        <div class="footer">
        </div>
    </div>
</body>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>