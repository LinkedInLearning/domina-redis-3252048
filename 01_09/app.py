import redis

redis_cliente = redis.Redis(host='localhost', port=6379, db=0, password='123Queso.')

try:

except redis.exceptions.RedisError as e:
  print("Ocurrió un error con Redis: ", e)