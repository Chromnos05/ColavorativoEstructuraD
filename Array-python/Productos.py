

productos = [
    
    {"nombre":"teclado","precio":25.50,"stock":10},
    {"nombre":"mouse","precio":12.99,"stock":2},
    {"nombre":"Monitor","precio":150.00,"stock":5}
          
]


bajo_stock =   [p["nombre"]for p in productos if p["stock"]< 5]
print (f"Alerta de compra para :{bajo_stock}")