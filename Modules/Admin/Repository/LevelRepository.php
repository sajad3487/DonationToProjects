<?php


namespace Modules\Admin\Repository;


use App\DesignPatterns\Repository;
use Modules\Admin\Entities\Level;

class LevelRepository extends Repository
{
    public $model;

    public function __construct()
    {
        $this->model = new Level();
    }

    public function getAllLevelsWithTypeForFirst ($type){
        return Level::where('type',$type)
            ->orderBy('first_requirement','DESC')
            ->first();
    }

    public function getAllLevelsWithTypeForSecond ($type){
        return Level::where('type',$type)
            ->orderBy('second_requirement','DESC')
            ->first();
    }

    public function getAllLevelsWithType ($type) {
        return Level::where('type',$type)
            ->get();
    }

}
