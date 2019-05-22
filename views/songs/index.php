<h1>CANCIONES</h1>
<br>

<div>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="">
            <h2><?php echo $item['Nombre']; ?></h2>
            <h3><?php echo $item['Artista']; ?></h3>            
            <small><?php echo $item['Album']; ?></small>
            <br />
            <p></p>
            <iframe width="560" height="315" src="<?php echo $item['Url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <br>
            <a class="btn btn-default" href="#" target="_blank">VOTAR</a>
            <hr />
        </div>
    <?php endforeach; ?>
</div>