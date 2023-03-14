import redis

redis_cliente = redis.Redis(host='localhost', port=6379, db=0, password="123Queso.")

try:
    redis_cliente.ping()
    print('El servidor Redis está disponible.')
except redis.exceptions.ConnectionError:
    print('El servidor Redis no está disponible.')    