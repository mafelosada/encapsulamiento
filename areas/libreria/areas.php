
<?php
class Areas{
    private $lado;
    private $baseTriangulo;
    private $alturaTriangulo;
    private $baseRectangulo;
    private $alturaRectangulo;
    public $areaCuadrado;
    public $areaTriangulo;
    public $areaRectangulo;

    public function __construct(Numero $lado, Numero $baseTriangulo, Numero $alturaTriangulo, Numero $baseRectangulo, Numero $alturaRectangulo){
        $this->lado = $lado;
        $this->baseTriangulo = $baseTriangulo;
        $this->alturaTriangulo = $alturaTriangulo;
        $this->baseRectangulo = $baseRectangulo;
        $this->alturaRectangulo = $alturaRectangulo;
    }

    public function calcularAreaCuadrado(){
        $this->areaCuadrado = $this->lado->getValor() * $this->lado->getValor();
        return $this->areaCuadrado;
    }

    public function calcularAreaTriangulo(){
        $this->areaTriangulo = ($this->baseTriangulo->getValor() * $this->alturaTriangulo->getValor()) / 2;
        return $this->areaTriangulo;
    }

    public function calcularAreaRectangulo(){
        $this->areaRectangulo = $this->baseRectangulo->getValor() * $this->alturaRectangulo->getValor();
        return $this->areaRectangulo;
    }
}

$areaCuadrado = $areaTriangulo = $areaRectangulo = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado = new Numero($_POST['lado']);
    $baseTriangulo = new Numero($_POST['baseTriangulo']);
    $alturaTriangulo = new Numero($_POST['alturaTriangulo']);
    $baseRectangulo = new Numero($_POST['baseRectangulo']);
    $alturaRectangulo = new Numero($_POST['alturaRectangulo']);

    $areas = new Areas($lado, $baseTriangulo, $alturaTriangulo, $baseRectangulo, $alturaRectangulo);

    $areaCuadrado = $areas->calcularAreaCuadrado();
    $areaTriangulo = $areas->calcularAreaTriangulo();
    $areaRectangulo = $areas->calcularAreaRectangulo();
}

?>


