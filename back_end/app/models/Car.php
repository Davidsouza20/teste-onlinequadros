<?php 
 
class Car extends Eloquent
{
    protected $fillable = ['id_marca', 'modelo', 'year'];
   
    public function marca() {
        return $this->belongsTo('app\Marca', 'id');
    }


    public static function allCars(){
        return self::all();

    }

    public static function saveCar(){
        $input = Input::all();
       
        $car = new Car();
        $car->fill($input);
        $car->id_marca = $input['id_marca'];
        $car->modelo = $input['modelo'];
        $car->year = $input['year'];
        $car->save();
        return $car;
        
        //dd($car);  

        /*$car = new Car();
        $car->fill($input);
        $car->id_marca = $input['id_marca'];
        $car->modelo = $input['modelo'];
        $car->year = $input['year'];
        $car->save();
        dd($car);    */         
    }

    public static function updateCar(){
    	return self::all();
    }
}



