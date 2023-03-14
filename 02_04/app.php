<?php
$cliente_redis = new Redis();
try {
    $cliente_redis->connect('127.0.0.1', 6379);
    $cliente_redis->auth('123Queso.');

    $claves = $cliente_redis->keys('*');    
    print_r($claves);    

} catch (RedisException $error) {
    echo "Error al conectarse a Redis: " . $error->getMessage();
}

?>