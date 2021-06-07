<?php 
   
   require_once 'includes/connect.php'; 
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=css/style.css>

</head>
<body>
    <p id="js-hello">Привет!</p>
    <form action="includes/filter.php" method="GET">
        <label for="">Название продукта</label>
        <input type="text" name="name">

        <label for="">Категория продукта</label>
        <select name="category" id="">
            <option value="Soft furniture">Soft furniture</option>
            <option value="Kids toys">Kids toys</option>
            <option value="Office furniture">Office furniture</option>
        </select>

        <button name="submit">Send</button>

    </form>

    <form action="add.php" method="get" class="add">

        <button name="add">Add</button>

    </form>
   <?php 

$check_soft = mysqli_query($connect, "SELECT * FROM `card` WHERE `category` = 'Soft furniture'");
;

$softNum = mysqli_num_rows( $check_soft );


   ?>
   <div class="cards__container">
       <div class="cards" id="soft">
    <?php 
    
    for( $i = 0, $id = 0; $i < $softNum; $i++ ) {
    
    $soft_all = mysqli_fetch_assoc($check_soft);
    
    ?>
        <figure>
            <div class="card__image">
                <img src="<?= $soft_all['img']?>" alt="">
            </div>
            <div class="content_text">
                <h1 class="title"><?= $soft_all['title']?></h1>
                <p class="subtitle"><?= $soft_all['subtitle']?></p>
            </div>
        </figure>
    <?php } ?>
       </div>
       <div class="cards" id="kids">
           
        
       
       </div>
       <div class="cards" id="office"></div>
   </div>
    


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>