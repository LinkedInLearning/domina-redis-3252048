import redis

cliente_redis = redis.Redis(host='localhost', port=6379, db=0, password='123Queso.')

try:
  cliente_redis.flushdb()  
except redis.exceptions.RedisError as error:
  print("Ocurrió un error con Redis: ", error)