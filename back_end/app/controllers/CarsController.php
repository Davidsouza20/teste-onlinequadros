<?php



class CarsController extends \BaseController {
	
	
	public function getAllCars() {
		return json_encode(Car::allCars());
	}
	public function saveCar() {
		return Car::saveCar();
	}

	public function getCar($id) {
		echo "Get a car" . $id;
	}

	public function updateCar($id) {
		echo "Update a car" . $id;
	}

	public function deleteCar($id) {
		echo "Delete a car" . $id;
	}


}

