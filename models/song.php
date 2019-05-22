<?php
class SongsModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM songs');
        $rows = $this->resultSet();
        return $rows;
    }
}

/**
 * A ver, te explico, un sec
 * Para que me entiendas, cada vez que cargas la clase SongModel y la función index (que se hace así:)
 * $todasLasCanciones = new SongsModel->Index;
 * var_dump($todas¿LasCanciones)
 * 
 * esta varialbe tiene un array con TODAS las canciones de tu base de datos
 * osea, que puedes crea una página que sea la que quieras, y dentro de ellan hace esos
 * * $todasLasCanciones = new SongsModel->Index;
 * y esa variable tiene todas las canciones
 * y con un bucle se pintan?
 * yep
 * la variable $todasLasCanciones contiene el return de la consulta de index
 * * $todasLasCanciones = new SongsModel->Index;
 * * $todasLasCanciones = new SongsModel->Index;
 * * $todasLasCanciones = new SongsModel->Index;
 * * $todasLasCanciones = new SongsModel->Index;
 * * $todasLasCanciones = new SongsModel->Index;
 * 
 */
