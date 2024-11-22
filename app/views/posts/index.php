<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $data['title'] ?></h1>
    <?php foreach($data['posts'] as $post) { ?>
        <!-- ici on affiche avec la syntaxe des objets en PHP car dans la requete on spécifie PDO::FETCH_OBJ -->
        <h3><?= $post->title ?></h3>
        <p><?= $post->content ?></p>
        <!-- redirection à faire sur la structure du router : controlerName/methodName/params -->
      <a href="<?= URLROOT ?>/posts/details/<?= $post->id?>">Voir details</a>
       
    <?php } ?> 
    
</body>
</html>