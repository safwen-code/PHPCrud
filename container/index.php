<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('../container/data.php')?>
    <?php include('../layout/Navbar.php') ?>
    <div class="container mt-3">
      <h1>hello</h1>
      <div class="row ">
        
          <?php foreach ($data as $value ) :?>
            <div class="col col-sm-12 col-md-6 col-lg-4 mt-4 xl-3">
                 <div class="card" style="width: 18rem;">
                    <img src=<?= $value['image']?> class="card-img-top" alt=<?= $value['titre'] ?>>
                    <div class="card-body">
                    <h5 class="card-title"><?= $value['titre']; ?></h5>
                    <p class="card-text"><?= $value['description']?></p>
                    <div class="">
                      <span><?= $value['rating']?> in <?=$value["newReviews"] ?>Reviews</span>
                    </div>
                    <span class="">price :<?= $value['price'] ?></span>
                    </div>
                    <a href="./recipeDetail.php/id=<?=$value["product_id"] ?>">
                    <button class="btn btn-success d-flex justify-content-center mb-2 ">more detail</button>
                   </a>
                  </div>
            </div>
            
          
          <?php
          endforeach;
          ?>
        
      </div>
      
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>