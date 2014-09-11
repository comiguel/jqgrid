<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Mgallegos\LaravelJqgrid\Encoders\RequestedDataInterface;
use Example\ExampleRepository;

class AppController extends BaseController {

    protected $GridEncoder;

    public function __construct(RequestedDataInterface $GridEncoder)
    {
        $this->GridEncoder = $GridEncoder;
    }

    public function getIndex()
    {
        return View::make('inicio');
    }

    public function postGridData()
    {
        $this->GridEncoder->encodeRequestedData(new ExampleRepository(), Input::all());
    }

    public function operar(){
        $operacion = Input::get('oper');

        switch ($operacion) {
            case 'add':
                    $user = new User;
                    $user->name = Input::get('name');
                    $user->lastname = Input::get('lastname');
                    $user->email = Input::get('email');
                    $user->save();
                break;

            case 'edit':
                    $user = User::find(Input::get('id'));
                    $user->name = Input::get('name');
                    $user->lastname = Input::get('lastname');
                    $user->email = Input::get('email');
                    $user->save();
                break;

            case 'del':
                    $user = User::find(Input::get('id'));
                    $user->delete();
                break;
        }
    }

}