<?php
$redis = new Redis();

try {
    $redis->connect('127.0.0.1', 6379);
    $redis->auth('123Queso.');  
    $redis->close();     
    echo "El servidor Redis está disponible.";

} catch (RedisException $e) {
    echo "Error al conectarse a Redis " . $e->getMessage();
}
?>