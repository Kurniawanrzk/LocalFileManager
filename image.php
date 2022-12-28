
<style>
  .card-body{
    display: grid;grid-template-columns:auto auto auto;justify-content:center;gap:5px
  }

  @media only screen and (max-width: 600px) {
    .card-body {
      display: grid;
      justify-content:center;
      gap:5px
    }
  }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Image</h2>
    </div>
    <div class="card-body" style="">
            <?php 
        $files = glob("public/img/*.*");
        for ($i=0; $i<count($files); $i++)
          {
            $image = $files[$i];
            $supported_file = array(
                    'gif',
                    'jpg',
                    'jpeg',
                    'png'
            );

            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
                // echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
                echo '
                <figure>
                  <center> 
                  <img src="'.$image .'" width="130" alt="Random image" />
                  </center>
                  <figcaption>"'.basename($image).'"</figcaption>
                </figure>';
                } else {
                    continue;
                }

                 if($i + 2 > 20) {
                    break;
                 }
              }
      
        ?>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>