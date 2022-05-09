<?php


namespace Modules\Admin\Http\Service;


use Modules\Admin\Repository\LevelRepository;
use Modules\Admin\Repository\SolutionRepository;

class LevelService
{
    private $levelRepo;

    public function __construct(
        LevelRepository $levelRepository
    )
    {
        $this->levelRepo = $levelRepository;
    }

    public function create($data)
    {
        return $this->levelRepo->create($data);
    }

    public function checkMinFirstRequirement($first_requirement, $type)
    {
        $last_level = $this->levelRepo->getAllLevelsWithTypeForFirst($type);
        if ($last_level != null) {
            if ($first_requirement <= $last_level->first_requirement) {
                return "fail";
            }
        }
        return "ok";
    }

    public function checkMinSecondRequirement($second_requirement, $type)
    {
        $last_level = $this->levelRepo->getAllLevelsWithTypeForSecond($type);
        if ($last_level != null) {
            if ($second_requirement <= $last_level->second_requirement) {
                return "fail";
            }
        }

        return "ok";
    }

    public function getLevelsWithType($type)
    {
        return $this->levelRepo->getAllLevelsWithType($type);
    }

    public function delete ($id){
        return $this->levelRepo->delete($id);
    }
}
