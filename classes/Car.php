<?php

class Car
{
	protected $model;
	
	protected $maxSpeed;
	
	protected $currentSpeed = 0;
	
	protected $color;
	
	protected $currentGear = 1;
	
	protected $owner;
	
	protected $isSportCar;
	
	protected $price;
	
	
	/**
	 * 
	 * @param string $model
	 * @param boolean $isSportCar
	 * @param string $color
	 * @param integer $price
	 * @param integer $maxSpeed
	 */
	public function __construct($model, $isSportCar, $color, $price, $maxSpeed)
	{
		$this->model = $model;
		$this->isSportCar = $isSportCar;
		$this->color = $color;
		$this->price = $price;
		
		if (($maxSpeed < 200) || ($isSportCar && $maxSpeed >= 200)){
			$this->maxSpeed =$maxSpeed;
		}
		else {
			$this->maxSpeed = 200;
		}
	}
	
	
	/**
	 * 
	 * @param float $currentSpeed
	 * Enter the current speed of the car.
	 */
	public function setCurrentSpeed($currentSpeed)
	{
		$this->currentSpeed = $currentSpeed;
	}
	
	
	/**
	 * Get the price of the car
	 */
	public function getPrice()
	{
		return $this->price;
	}
	
	
	/**
	 * Show the current info of the car.
	 */
	public function showCarInfo()
	{
		return sprintf(
					'The car model is %s, with %s color and max speed - %d. The current speed is %d and current gear is %d.' ,
					$this->model,
					$this->color,
					$this->maxSpeed,
					$this->currentSpeed,
					$this->currentGear
					);
	}
	
	
	/**
	 * Accelerate the car.
	 */
	public function accelerate()
	{
		$this->currentSpeed += 100;
		if ($this->currentSpeed > $this->maxSpeed){
			$this->currentSpeed = $this->maxSpeed;
			echo 'Cannot accelerate more.' . PHP_EOL;
		}
	}
	
	
	/**
	 * If possible change gear up.
	 */
	protected function changeGearUp()
	{
		if ($this->currentGear >= 5){
			echo 'Already on the max gear.';
		}
		else {
			$this->currentGear++;
		}
	}
	
	
	/**
	 * If possible change gear down.
	 */
	protected function changeGearDown()
	{
	if ($this->currentGear <= 1){
			echo 'Already on the minimum gear.';
		}
		else {
			$this->currentGear--;
		}
	}
	
	
	/**
	 * 
	 * @param integer(1-5) $nextGear
	 */
	public function changeGear($nextGear)
	{
		if ($nextGear < $this->currentGear){
			$this->changeGearDown();
		}
		else if ($nextGear > $this->currentGear){
			$this->changeGearUp();
		}
	}
	
	
	/**
	 * 
	 * @param string $newColor
	 * Enter new color of the car.
	 */
	public function changeColor($newColor)
	{
		$this->color = $newColor;
	}
	
	
	/**
	 * 
	 * @param Object $car
	 * @return boolean
	 * Check is the car more expensive than another car
	 */
	public function isMoreExpensive($car)
	{
		$anotherCarPrice = $car->getPrice();
		
		if ($this->price > $anotherCarPrice) {
			return true;
		}
		else {
			return false;
		}
	}
	
	
	/**
	 * 
	 * @param float $metalPrice
	 * Calculate the car price for scrap.
	 */
	public function calculateCarPriceForScrap($metalPrice)
	{
		$couef = 0.2;
		
		if (($this->color == 'white') || ($this->color == 'black')) {
			$couef += 0.05;
		}
		if ($this->isSportCar) {
			$couef += 0.05;
		}
		
		return $metalPrice * $couef;
	}
	
	/**
	 * 
	 * @param Obect $newOwner
	 * Change the owner of the car.
	 */
	public function changeOwner($newOwner)
	{
		$this->owner = $newOwner;
	}
	
}