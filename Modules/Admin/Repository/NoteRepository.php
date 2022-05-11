<?php


namespace Modules\Admin\Repository;


use App\DesignPatterns\Repository;
use Modules\Admin\Entities\Note;

class NoteRepository extends Repository
{
    public $model;

    public function __construct()
    {
        $this->model = new Note();
    }

}
