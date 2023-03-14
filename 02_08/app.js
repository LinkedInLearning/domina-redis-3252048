import { createClient } from 'redis';

const cliente_redis = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});
cliente_redis.on('error', function (error) {
    console.log('Error ' + error);
});

await cliente_redis.connect();

await cliente_redis.set('persona', 'Sofia');

let valor = await cliente_redis.get('persona');

console.log("valor:", valor);

const persona = {
  nombre: 'Sofia',
  apellido: 'Mendoza',
  edad: 38
};

await cliente_redis.set('persona', JSON.stringify(persona));

valor = await cliente_redis.get('persona');

console.log("Valor:", JSON.parse(valor));

process.exit(0);