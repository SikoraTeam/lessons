<?php
/**
 * Created by PhpStorm.
 * User: phpmasterblaster
 * Date: 30.09.18
 * Time: 16:05
 */

class Animal
{

    const AREAL = 'default';

    protected $color = 'red';

    protected $size;

    protected $age;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setSize($w, $h)
    {
        $this->size = [
            'w' => $w,
            'h' => $h,
        ];
    }
}

class Dog extends Animal
{

    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function command($command)
    {
        if ($command == 'sit') {
            echo 'sit';
        } elseif ($command == 'voice') {
            echo 'gav-gav';
        } else {
            echo 'do nothing';
        }
    }
}

$dog = new Dog();
$dog->setName('Sharik');

$dog->setColor('black');
$dog->setSize(2, 1);

$dog->command('voice');

interface Figure
{

    public function calculateSquare();

    public function calculatePerimeter();
}

class GeoFigure implements Figure
{

    protected $w = 0;
    protected $h = 0;

    public function __construct($w, $h)
    {
        $this->w = $w;
        $this->h = $h;
    }

    public function calculatePerimeter()
    {

    }

    public function calculateSquare()
    {

    }

}

$g = new GeoFigure(1, 2);