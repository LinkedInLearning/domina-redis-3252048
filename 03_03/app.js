import { createClient } from 'redis';

const redis_cliente = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});

await redis_cliente.connect();
redis_cliente.set('id_3344', 'f26bfc2dda4eeb2aefc9de2da8b9003b');
process.exit(0);