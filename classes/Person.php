<?php

class Person
{
	/**
	 * @var Full name of the person.
	 */
	protected $name;
	
	/**
	 * @var Age of the person.
	 */
	protected $age;
	
	/**
	 * @var Is the person male or female
	 */
	protected $isMale;
	
	protected $personalNumber;
	
	protected $friend;
	
	protected $money;
	
	protected $car;
	
	/**
	 * 
	 * @param string $name
	 * @param integer $age
	 * @param string(male or female) $gender
	 */
	public function __construct($name, $personalNumber, $isMale)
	{
		$this->name = $name;
		$this->personalNumber = $personalNumber;
		$this->isMale = $isMale;
	}
	
	
	/**
	 * Display person info
	 */
	public function showPersonInfo()
	{
		return sprintf(
				'Owner name is %s and owner age are %d. ',
				$this->name,
				$this->age
			);
	}
	
	/**
	 * 
	 * @param integer money
	 */
	public function setMoney($money)
	{
		$this->money = $money;
	}
	
	/**
	 * show person money
	 */
	public function getMoney()
	{
		return $this->money;
	}
	
	/**
	 * 
	 * @param objecttype Car - $car
	 * buy a car if you have enogh money
	 */
	public function buyCar($car)
	{
		$carPrice = $car->getPrice();
		
		if ($this->money >= $carPrice){
			$this->car = $car;
			$this->money -= $carPrice;
			return true;
		}
		else {
			echo 'Get more money for this car.';
			return false;
		}
	}
	
	/**
	 * 
	 * @param float $metalPrice
	 */
	public function sellCarForScrap($metalPrice)
	{
		$this->money += $this->car->calculateCarPriceForScrap($metalPrice);
		$car = null;
	}
	
}