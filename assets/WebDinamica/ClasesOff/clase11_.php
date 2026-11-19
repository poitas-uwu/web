<?php
/*
crear una clase llamada persona con los atributos nombre, edad y dni. crear un contructor que reciba los 3 datos
*/

/*
class Persona
{
    public string $_nombre;
    public int $_edad;
    public string $_dni;

    public function __construct($nombre, $edad, $dni)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
        $this->_dni = $dni;
    }
}

$p1 = new Persona("rocio", 17, "39.482.115");
$p2 = new Persona("ezequiel", 16, "41.007.663");

echo $p1->_nombre . " | " . $p1->_edad . " | " . $p1->_dni . "<br>";
echo $p2->_nombre . " | " . $p2->_edad . " | " . $p2->_dni . "<br>";
*/

/*
crear una clase llamada pedido con los atributo cliente, producto, cantidad y precio unitario, crear un constructor que resiva los 4 datos
crear un metodo "calcular total" que devuelva cantidad por precio unitario
*/


/*
class Pedido
{
    public string $_cliente;
    public string $_producto;
    public int $_cantidad;
    public float $_precio_unitario;

    public function __construct($cliente, $producto, $cantidad, $precio_unitario)
    {
        $this->_cliente = $cliente;
        $this->_producto = $producto;
        $this->_cantidad = $cantidad;
        $this->_precio_unitario = $precio_unitario;
    }

    public function CalcularTotal()
    {
        return $this->_cantidad * $this->_precio_unitario;
    }
}

$pedido1 = new Pedido("pepe", "paraguas", 200, 30);

echo $pedido1->_cliente . " | " . $pedido1->_producto . " | " . $pedido1->_cantidad . " | " . $pedido1->_precio_unitario . "<br>";
echo $pedido1->CalcularTotal();
*/

/*
crear una clase persona con los atributos nombre y edad en private, crear un constructor y los metodos get nombre y get edad para consultarlos desde fuera
*/

/*
class Persona
{
    private String $nombre;
    private int $edad;

    public function __construct($_nombre, $_edad)
    {
        $this->nombre = $_nombre;
        $this->edad = $_edad;
    }

    public function GetNombre()
    {
        return $this->nombre;
    }
    public function GetEdad()
    {
        return $this->edad;
    }
}

$persona1 = new Persona("Sofia", 17);

echo $persona1->GetNombre();
*/

/*
crear una clase cuenta bancaria con el atributo privado saldo agregar los metodos depositar ($monton) y retorar ($monto)
retirar() no debe perminit dejar el saoldo en negativo, agregar getsaldo para consultarlo
*/

class CuentaBancaria
{
    private float $saldo = 0;

    public function Depositar($_monto)
    {
        if ($_monto > 0) {
            $this->saldo += $_monto;
        }
    }
    public function Retirar($_monto)
    {
        if ($this->saldo > $_monto)
            $this->saldo -= $_monto;
    }

    public function GetSaldo()
    {
        return $this->saldo;
    }
}


$cuenta = new CuentaBancaria();
$cuenta->Depositar(1000);
$cuenta->retirar(1500);

echo $cuenta->GetSaldo();
