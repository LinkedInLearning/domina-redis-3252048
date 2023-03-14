import redis
import pandas as pd

cliente_redis = redis.Redis(host="localhost", port=6379, db=0, password="123Queso.")

df = pd.DataFrame({
    'A': [1, 2, 3],
    'B': [4, 5, 6],
    'C': [7, 8, 9]
})