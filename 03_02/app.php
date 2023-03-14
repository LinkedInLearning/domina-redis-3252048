<?php
$cliente_redis = new Redis();
$cliente_redis->connect('127.0.0.1', 6379);
$cliente_redis->auth('123Queso.');

$clave = 'persona';
$valor_json = '{"nombre": "Ronny", "apellido": "Delgado", "email": "ronny.delgado@test.com"}';

$cliente_redis->set($clave, $valor_json);

$objeto_json = $cliente_redis->get($clave);

print_r(json_decode($objeto_json));

$cliente_redis->close();

?>