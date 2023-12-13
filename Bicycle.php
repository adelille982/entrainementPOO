<?php
class Bicycle
{
    private int $taillePneu = 29;
    private int $tailleCadre = 17;
    public string $couleurCadre = 'bleu';
    public int $prix = 1900;
    public int $prixOriginal;
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;

    public function __construct()
    {
        $this->prixOriginal = $this->prix;
        $this->currentSpeed = 0;
    }

    
    public function getAfficherTaillePneu(): int
    {
        return $this->taillePneu;
    }

    public function getAfficherTailleCadre(): int
    {
        return $this->tailleCadre;
    }

    public function Promotion20pourcent()
    {
        $this->prix *= 0.8;
    }

    public function Promotion50pourcent()
    {
        $this->prix *= 0.5;
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

$Head = new Bicycle;
$Lapierre = new Bicycle;
$Trek = new Bicycle;
$Focus = new Bicycle;
$Ridley = new Bicycle;
// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';

$Lapierre->Promotion20pourcent();
$Head->Promotion50pourcent();
