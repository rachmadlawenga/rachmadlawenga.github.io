<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&apiKey=dba9e82c6ea84102950ef6f2d973c060");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output, true);
?>

<html>
<style>
    body {
      background-color: #e0e0e0 !important;
    }
</style>


    <head>
        <!--bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <br>
        <div class="container body">
            <!--bagian menu-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Portal berita</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!--item-item menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=business">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=entertaniment">Entertaiment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=health">Health</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=science">Science</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=sports">Sport</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=technology">Technology</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
            
            <!--card bootstrap-->

            <?php foreach($data['articles'] as $d){ ?>
                <div class="col-md-4">
                <br>
                    <div class="card">
                        <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $d['title']; ?></h6>
                            <p class="card-text"><?php echo $d['description']; ?></p>
                            <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                        </div>
                    </div>
                    
                </div>
            <?php } ?>

            </div>
        </div>
    </body>
</html>