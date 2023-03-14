import redis

redis_cliente = redis.Redis(host='localhost', port=6379, db=0, password="123Queso.")

persona = {
  "nombre": "Isabel",
  "apellido": "Rojas",
  "fecha_nacimiento": 1965
}

redis_cliente.hset("clave_persona", mapping=persona)