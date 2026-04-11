inventario = [
    
    {"id": 1,  "nombre":"teclado mecanico" , "cantidad" : 15 , "precio":45.00},
    {"id": 2,  "nombre":"mouse gamer","cantidad": 3 , "precio": 25.50 },
    {"id": 3,  "nombre": "Monitor 24 '","cantidad": 8, "precio":120.00}
]

def alerta_stock(lista):
    print("Producto con bajos venta en stock")
    for producto  in lista:      
        if producto ["cantidad"] < 5 :
           print(f"!alerta!{producto['nombre']}solo tiene{producto['cantidad']} unidades.")
                    
                    
alerta_stock(inventario)
                    