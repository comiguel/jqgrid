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

}