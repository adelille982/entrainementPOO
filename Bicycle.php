<?php
class Bicycle
{
    private int $tireSize = 29;
    private int $frameSize = 17;
    public string $colorFrame = 'bleu';
    public int $price = 1900;
    public int $priceOriginal;
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;

    public function __construct()
    {
        $this->priceOriginal = $this->price;
        $this->currentSpeed = 0;
    }


    public function getTireSize(): int
    {
        return $this->tireSize;
    }

    public function getframeSize(): int
    {
        return $this->frameSize;
    }

    public function apply20PercentDiscount()
    {
        $this->price *= 0.8;
    }

    public function apply50PercentDiscount()
    {
        $this->price *= 0.5;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }
}

$head = new Bicycle;
$lapierre = new Bicycle;
$trek = new Bicycle;
$rockrider = new Bicycle();
$rockrider->color = 'yellow';
$tornado = new Bicycle();
$tornado->color = 'black';

$lapierre->apply20PercentDiscount();
$head->apply50PercentDiscount();
