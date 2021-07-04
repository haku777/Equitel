<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperHeroes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="img/1.jpg">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php 
    if(!empty($_GET)){
        $id = $_GET['id'];
    }
    ?>
    <header>
        <div>
            <img src="<?= 'img/'.$id.'.jpg'; ?>" alt="">
            <h2>Hero</h2>
        </div>
        <a href="index.html">Back</a>
    </header>

    <main>
        <section>
            <div class="hero page">
                <img src="<?= 'img/'.$id.'.jpg'; ?>" alt="">

                <div class="info datos">
                    <h2>powerstats</h2>
                    <h2>Biography</h2>
                    <h2>Appearance</h2>
                    <h2>Work</h2>
                    <h2>Connections</h2>
                    
                    <h3>Name</h3>
                    <h3>gender: <b>Male</b></h3>
                    <h3>race: <b>Human</b></h3>
                    <h3>heignt: <b>"5'6","203 cm"</b></h3>
                    <h3>weight: <b>"125 lb","80 kg"</b></h3>
                    <h3>eye-color: <b>Blue</b></h3>
                    <h3>hair-color: <b>No hair</b></h3>
                    <div class="voto">
                            <div class="likes">
                                <img src="../../../img/svg/like.svg" alt="">
                            </div>
                            <div class="dislikes">
                                <img src="../../../img/svg/dislike.svg" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>