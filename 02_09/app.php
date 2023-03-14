<?php
$cliente_redis = new Redis();
try {
    $cliente_redis->connect('127.0.0.1', 6379);
    $cliente_redis->auth('123Queso.');

} catch (RedisException $error) {
    echo "Error con Redis: " . $error->getMessage();
}

?>