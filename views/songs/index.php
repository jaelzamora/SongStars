<head>
    <link rel="stylesheet" href="StarRating.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

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
            <x-star-rating value="3" number="5"></x-star-rating>
            <a class="btn btn-default" id="votarBoton" href="#">VOTAR</a>
            <div style="display:none;" id="tickVerde">
                <img src="https://img.icons8.com/cotton/64/000000/checkmark.png">
            </div>

            <hr />
        </div>
    <?php endforeach; ?>
</div>

<!-- Estrellas -->
<script src="<?php echo ROOT_PATH; ?>assets/js/estrellas.js"></script>
<script>
    $("#votarBoton").click(function mostrarTick() {
        $("#tickVerde").show("inline-block");
    });
</script>

<style>
    x-star-rating {
        font-family: 'Ionicons';
        font-size: 48px;
        display: inline-flex;
        cursor: pointer;
    }

    x-star-rating>.star::after {
        content: '\f3ae';
        color: #777;
    }

    x-star-rating>.star.full::after {
        content: '\f2fc';
        color: #fd0;
    }
</style>