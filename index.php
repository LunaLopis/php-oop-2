<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/PetFood.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';

$products = [
    new PetFood("Royal Canin Mini Adult", "https://arcaplanet.vtexassets.com/arquivos/ids/288255-1200-1200/_0006_mini-adult.jpg?v=1775129544&quality=1&width=1200&height=1200", 58.90, "Cane", 10, "pollo e riso"),
    new PetFood("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", 43.99, "Cane", 20, "tonno e riso"),
    new PetFood("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", 23.99, "Gatto", 10, "branzino salmone e carote"),
    new PetFood("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", 45.50, "Pesci", 5, "alghe"),
    new Accessory("Voliera Wilma in Legno", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", 59.99, "Uccelli", 40, "legno"),
    new Accessory("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", 30.50, "Pesci", 20, "plastica"),
    new Toy("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", 55.99, "Cane", 50, "legno"),
    new Toy("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", 10.99, "Gatto", 20, "plastica"),
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>        
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card " >
                           <img class="card-img-top"   src="<?php echo $product->image; ?>">
                               <div class="card-body" style="height: 20em ;">
                                <h4 class="card-title"> <?php echo $product->name ?></h4>  
                                        
                                <p class="card-text"> <?php echo $product->category; ?>
                                <?php if($product->category === "Cane"){ ?>
                                    <span class=""><i class="fa-solid fa-dog"></i></span>
                                <?php } ?> 

                                <?php if($product->category === "Gatto"){ ?>
                                    <span><i class="fa-solid fa-cat"></i></span>
                                <?php } ?>  

                                <?php if($product->category === "Pesci"){ ?>
                                    <span><i class="fa-solid fa-fish"></i></span>
                                <?php } ?> 

                                <?php if($product->category === "Uccelli"){ ?>
                                    <span><i class="fa-solid fa-crow"></i></span>
                                <?php } ?> 
                                                           
                                

                               
                                <p class="card-text"> <?php echo $product->price;?>$</p>
                                <?php if(get_class($product) === 'PetFood'){ ?>
                                    <p class="card-text"> <?php echo $product->weight; ?> kg</p>
                                    <p class="card-text"> <?php echo $product->ingredients; ?></p>
                                <?php } ?>
                                <?php if(get_class($product) === 'Accessory'){ ?>
                                    <p class="card-text"> <?php echo $product->materials; ?></p>
                                    <p class="card-text"> <?php echo $product->size; ?></p>
                                <?php } ?>
                                <?php if(get_class($product) === 'Toy'){ ?>
                                    <p class="card-text"> <?php echo $product->features; ?> </p>
                                    <p class="card-text"><?php echo $product->size; ?></p>
                                <?php } ?>                                     
                         </div>                                                              
                    </div>
                    </div>
            <?php endforeach; ?>   
    </div> 
        
</body>
</html>

<style>
  .card-img-top {
    height: 300px;
    object-fit: contain;
  }
</style>