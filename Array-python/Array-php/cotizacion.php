<?php 


$items = [

[
     'decripcion'    =>  'Desarrollo de modulo de usuario' ,
     'cantidad'      =>   1,
     'precio_unit'   =>   500000
 
] ,


[
      'descripcion'     =>  'configuracion de base de datos' ,
      'cantidad'        =>  2,
      'precios_unit'    =>  150000
 
 
],
[
      'descripcion'   => 'soporte tecnico especializado' ,
      'cantidad'      => 3,
      'precio_unit'   => 80000


             

]


$subtotal_acumulado   =  0;
$iva_porcentaje       = 19;


foreach ($items as $key  => $item) {
    $linea_subtotal = $item['cantidad'] * $item['precio_unit'];
    $items[$Key]['subtotal'] = $linea_subtotal;
    $subtotal_acumulado += $linea_subtotal;

}



$iva_valor = $subtotal_acumulado * ($iva_porcentaje/100);
$total_general = $subtotal_acumulado + $iva_valor;


$cotizacion = [
       'cliente' => 'juan perez' ,
       'fecha'   =>    data('d-m-y'),
       'items'   =>  $items,
       'resumen_financiero'  =>  [
   
           'subtotal'   =>  $subtotal_acumulado ,
           'iva_porcentaje'  => $iva_porcentaje .'%' ,
           'valor_iva'       =>$iva_valor,
           'total_pagar'     => $total_general

       ]


];

echo "resumen de cotiza para :" . $cotizacion['cliente'] . "\n";
echo "___________________________________\n";
forech($cotizacion[items] as $it){
    echo "- " . $it['descripcion'] . "(x" . $it['cantidad']. "): $" .number_format($it['subtotal']) . "\n";

}

echo "                       \n";
echo "SUBTOTAL: $".number_format($cotizacion['resumen_financiero'])['subtotal'] . "\n"
echo "IVA(" . $iva_porcentaje ."%): $" .number_format($cotizacion['resumen_financiero']['valor_iva']) . "\n";
echo "TOTAL A PAGAR : $ " .number_format($cotizacion['resumen_financiero']['total_pagar']) . "\n";

































]