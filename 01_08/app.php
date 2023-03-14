<?php
$redis = new Redis();
try {
} catch (RedisException $e) {
    echo "Error al conectarse a Redis " . $e->getMessage();
}
?>