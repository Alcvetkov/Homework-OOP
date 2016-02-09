<?php

class CarShop
{
	protected $arrayCars = [];
	
	
	/**
	 * 
	 * @param Car $car1
	 * @param Car $car2
	 * @param Car $car3
	 */
	public function __construct($car1, $car2, $car3)
	{
		$this->arrayCars[] = $car1;
		$this->arrayCars[] = $car2;
		$this->arrayCars[] = $car3;
	}
	
	
	/**
	 * 
	 * @param Car object $car
	 * Add car in the shop.
	 */
	public function addCar($car)
	{
		$this->arrayCars[] = $car;
	}
	
	
	/**
	 * Show info of the next car in the shop.
	 */
	public function getnextCar()
	{
		return $this->arrayCars[0]->showCarInfo();
	}
	
	
	/**
	 * 
	 * @param Person object $buyer
	 * Sell the next car in the shop to the buyer.
	 */
	public function sellNextCar($buyer)
	{
		$nextCar = $this->arrayCars[0];
		if ($buyer->buyCar($nextCar)) {
			$this->removeCar($nextCar);
			echo 'The next car is buyed.' . PHP_EOL;
		}
		else {
			echo 'The next car is not buyed.' . PHP_EOL;
		}
	}
	
	
	/**
	 * 
	 * @param Car object $car
	 * Remove the car from the shop.
	 */
	public function removeCar($car)
	{
		array_shift($this->arrayCars);
	}
	
	
	/**
	 * Show info for all cars in the shop 
	 */
	public function showAllCarsInTheShop()
	{
		foreach ($this->arrayCars as $car) {
			echo $car->showCarInfo() . PHP_EOL;
		}
	}
	
}