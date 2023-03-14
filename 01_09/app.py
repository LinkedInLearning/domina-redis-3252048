import redis

redis_cliente = redis.Redis(host='localhost', port=6379, db=0, password='123Queso.')

try:
  redis_cliente.set('id_py', '1c85f9d9-444b-422b-93ea-8946d971df6b ')
  valor = redis_cliente.get('id_py')  
  print(valor.decode('utf-8'))  
except redis.exceptions.RedisError as e:
  print("Ocurrió un error con Redis: ", e)