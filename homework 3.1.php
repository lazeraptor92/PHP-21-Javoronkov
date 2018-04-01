<?php 
    echo '<h3>Машина</h3>';

    class CarClass
    {
        public $brand;
        public $model;
        public $color;
        
        public function giveCarProperty($Brand, $Model, $Color)
        {
            $this->brand = $Brand;
            $this->model = $Model;
            $this->color = $Color;
        }

        public function getCarProperty()
        {
            echo "Марка машины:" . " " .$this->brand . "<br/>" ;
            echo "Модель:" . " " .$this->model. "<br/>";
            echo "Цвет:" . " " .$this->color. "<br/>" . "<br/>";
        }
    }

    $car1 = new CarClass;
        echo $car1->giveCarProperty("BMW", "M5", "Металлик");
        echo $car1->getCarProperty();
    $car2 = new CarClass;
        echo $car2->giveCarProperty("Mercedes", "SLS", "Серебристый");
        echo $car2->getCarProperty();

    echo "<hr/>";	
    echo "</br>";
    echo "<h3>Телевизор</h3>";    
    
    class TvClass
    {
        public $brand;
        public $quality;
        public $size;

        public function giveTvProperty($Brand, $Quality, $Size)
        {
            $this->brand = $Brand;
            $this->quality = $Quality;
            $this->size = $Size;
        }

        public function getTvProperty()
        {
            echo "Модель:" . " " .$this->brand . "<br/>";
            echo "Качество:" . " " .$this->quality . "<br/>";
            echo "Размер:" . " "  .$this->size . " Дюйма" . "<br/>" . "<br/>";
        }
    }

    $tv1 = new TvClass;
        echo $tv1->giveTvProperty("Samsung", "FullHD", "52" );
        echo $tv1->getTvProperty();
    $tv2 = new TvClass;
        echo $tv2->giveTvProperty("Sony", "FullHD", "74");
        echo $tv2->getTvProperty();

    echo "<hr/>";
    echo "</br>";
    echo "<h3>Шариковая ручка</h3>";    

    class ClassPen
    {
        public $inkColor;
        public $penColor;

        public function givePenProperty($InkColor, $PenColor)
        {
            $this->inkColor = $InkColor;
            $this->penColor = $PenColor;
        }

        public function getPenProperty()
        {
            echo "Цвет чернил:" . " " .$this->inkColor. "<br/>";
            echo "Цвет ручки:" . " " .$this->penColor. "<br/>" . "<br/>";
        }
    }

    $pen1 = new ClassPen;
        echo $pen1->givePenProperty("Красный", "Синий");
        echo $pen1->getPenProperty();
    $pen2 = new ClassPen;
        echo $pen2->givePenProperty("Синий", "Желтый");
        echo $pen2->getPenProperty();

    echo "<hr/>";
    echo "</br>";
    echo "<h3>Утка</h3>";    

    class ClassDuck
    {
        public $kindDuck;
        public $genericDuck;

        public function giveDuckProperty($Kind, $Generic){
            $this->kindDuck = $Kind;
            $this->genericDuck = $Generic;
      }

        public function getDuckProperty()
        {
            echo "Вид утки:" . " " . $this->kindDuck . "<br/>";
            echo "Род утки:" . " " . $this->genericDuck . "<br/>" . "<br/>";
        }
    }

    $duck1 = new ClassDuck;
        echo $duck1->giveDuckProperty("Кряква", "Селезень");
        echo $duck1->getDuckProperty();
    $duck2 = new ClassDuck;
        echo $duck2->giveDuckProperty("Чурок", "Утка");
        echo $duck2->getDuckProperty();
    $duck3 = new ClassDuck;
        echo $duck3->giveDuckProperty("Чирок-свистунок", "Гей");
        echo $duck3->getDuckProperty();

    echo "<hr/>";
    echo "</br>";
    echo "<h3>Товар</h3>";    
    
    class ClasGoods
    {
        public $nameGoods;
        public $massaGoods;
        public $priceGoods;

        public function giveGoodsProperty($Name, $Massa, $Price)
        {
            $this->nameGoods = $Name;
            $this->massaGoods = $Massa;
            $this->priceGoods = $Price;
        }

        public function getGoodsProperty()
        {
            echo "Название :" . " " . $this->nameGoods . "<br/>";
            echo "Вес :" . " " . $this->massaGoods . " " . "гр" . "<br/>";
            echo "Цена :" . " " . $this->priceGoods . " " . "руб" . "<br/>"  . "<br/>";
        }
    }

    $goods1 = new ClasGoods;
        echo $goods1->giveGoodsProperty("Греча", "900" ,"39,90");
        echo $goods1->getGoodsProperty();
    $goods2 = new ClasGoods;
        echo $goods2->giveGoodsProperty("Яйца", "300" , "39,99");
        echo $goods2->getGoodsProperty();

    echo "<hr/>";
    echo "<a href=http://university.netology.ru/u/javoronkov/me/lesson%203.1/ustnoe-zadanie.html><h3>Устное задание</h3></a>" ;
?>
