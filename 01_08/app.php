<?php
$redis = new Redis();
try {
    $redis->connect('127.0.0.1', 6379);
    $redis->auth('123Queso.');

    $redis->set('id_php', 'caa53176-9a63-43d1-8ac9-e11b12969c32');
    $valor = $redis->get('id_php');

    echo $valor;
    $redis->close();
} catch (RedisException $e) {
    echo "Error al conectarse a Redis " . $e->getMessage();
}
?>