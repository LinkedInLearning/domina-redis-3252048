import { createClient } from 'redis';

const cliente_redis = createClient({
    host: 'localhost',
    port: 6379,
    password: '123Queso.'
});

cliente_redis.on('error', function (error) {
    console.log('Error ' + error);
});