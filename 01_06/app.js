import { createClient } from 'redis';

const redis_cliente = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});

await redis_cliente.connect();
console.log('El servidor Redis está disponible.');

process.exit(0);