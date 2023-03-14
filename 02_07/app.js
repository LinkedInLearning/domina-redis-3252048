import { createClient } from 'redis';

const cliente_redis = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});

await cliente_redis.connect();
