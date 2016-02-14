<?php


class Car 
{
	private $model;
	
	private $maxSpeed;
	
	private $currentSpeed;
	
	private $color;
	
	private $currentGear;
	
	private $isSportCar;
	
	private $price;
	
	private $owner;
	
	/*public function __construct($model, $isSportCar,$color)
	{
		$this->setModel($model);
		$this->isSportCar($isSportCar);
		$this->setColor($color);
	}*/
	
	public function __construct($model, $isSportCar, $color, $price, $maxSpeed)
	{
		$this->setModel($model);
		$this->isSportCar = $isSportCar;
		$this->setColor($color);
		$this->setPrice($price);
		$this->setMaxSpeed($maxSpeed);
	}
	
	public function setModel($model)
	{
		$this->model = $model;
	}
	
	public function setMaxSpeed($maxSpeed)
	{
		$this->maxSpeed = $maxSpeed;
	}
	
	public function setCurrentSpeed($currentSpeed)
	{
		$this->currentSpeed = $currentSpeed;
	}
	
	public function setIsSportCar($isSportCar)
	{
		$this->isSportCar = $isSportCar;
	}
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function setCurrentGear($currentGear)
	{
		if($currentGear >= 1 && $currentGear <=5)
		{
			$this->currentGear = $currentGear;
		}
		
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function getModel()
	{
		return $this->model;
	}
	
	public function getMaxSpeed()
	{
		return $this->maxSpeed;
	}
	
	public function getCurrentSpeed()
	{
		return $this->currentSpeed;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function getCurrentGear()
	{
		return $this->currentGear;
	}
	
	public function getIsSportCar()
	{
		return $this->isSportCar;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	public function getOwner()
	{
		if($this->owner == null)
		{
			echo "There is no owner";
		}
		else {
			return $this->owner->getName();
		}
	}
	
	public function accelerate()
	{
		if($this->currentSpeed + 10 < $this->maxSpeed)
		{
			$this->currentSpeed += 10;
		}
		else 
		{
			echo 'You cannot accelerate'; 
		}
		
	}
	
	public function changeGearUp()
	{
		if($this->currentGear < 5)
		{
			$this->currentGear++;
		}
		else 
		{
			echo 'You cannot change gear up!';
		}
		
	}
	
	public function changeGearDown()
	{
		if($this->currentGear > 1)
		{
			$this->currentGear--;
		}
		else 
		{
			echo 'You cannot change gear down!';
		}
	}
	
	public function changeGear($nextGear)
	{
		if($nextGear > $this->currentGear && $nextGear <= 5)
		{
			$this->currentGear = $nextGear;
		}
		else 
		{
			echo 'You cannot change gear!';
		}
		
	}
	
	public function changeColor($newColor)
	{
		$this->color = $newColor;
	}
	
	public function isMoreExpensive($car)
	{
		if($this->getPrice() >= $car->getPrice())
		{
			echo "It`s not more expensive!";
		}
		
		else
		{
			return "It`s more expensive!";
		}
	}
	
	public function calculateCarPriceForScrap($metalPrice)
	{
		$coef = 0.2;
		if(($this->getColor == "white") || ($this->getColor == "black") || ($this->getIsSportsCar())) 
		{
			$coef += 0.05;
		}
		return $metalPrice * $coef;
	}
	
	public function changeOwner($newOwner)
	{
		$this->owner = $newOwner; 
	}
}