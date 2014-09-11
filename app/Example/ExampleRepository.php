<?php namespace Example;

use User;
use Illuminate\Database\Eloquent\Model;
use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class ExampleRepository extends EloquentRepositoryAbstract {

    public function __construct()
    {
        $this->Database = new User;

        $this->visibleColumns = array('id','name','lastname','email');

        $this->orderBy = array(array('id', 'asc'), array('name','desc'));
    }

}