import redis

redis_cliente = redis.Redis(host='localhost', port=6379, db=0, password="123Queso.")

diccionario = redis_cliente.hgetall('clave_persona')

for clave, valor in diccionario.items():
    print(f"{clave.decode('utf-8')}: {valor.decode('utf-8')}")    