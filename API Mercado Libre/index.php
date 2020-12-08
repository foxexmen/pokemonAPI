<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

        <?php
        //api mercado libre
        $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'),true);
        ?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Usuario: <?php echo $data ['nickname'];?></li>
    <li class="breadcrumb-item active" aria-current="page">Usuario: <?php echo $data ['address']['city'];?></li>
  </ol>
</nav>




        <?php
        //api Jsonplaceholder
        $data = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments/'),true);
        


        foreach ($data as $i){

        ?>

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">

                    <h5 class="mb-1"><?php echo "Comentario no." . $i['id'];?></h5>

                    <small><?php echo "<b>Usuario</b>". $i['name'];?></small>
                    </div>
                    <p class="mb-1"><?php echo $i['body'];?></p>

                    <small><?php echo $i['email'];?></small>
                </a>
            </div>
        
        <?php
        }
        ?>
        







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>