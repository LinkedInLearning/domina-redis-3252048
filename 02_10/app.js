import { createClient } from 'redis';

const redis_cliente = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});

await redis_cliente.connect();

await redis_cliente.set('id_34356', '6e12e9e0083decc72f2b2bd37cd9889d', {EX: 10});

process.exit(0);