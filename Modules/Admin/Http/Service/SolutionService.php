<?php


namespace Modules\Admin\Http\Service;


use Modules\Admin\Repository\SolutionRepository;
use phpDocumentor\Reflection\Type;

class SolutionService
{
    /**
     * @var SolutionRepository
     */
    private $solutionRepo;

    public function __construct(
        SolutionRepository $solutionRepository
    )
    {
        $this->solutionRepo = $solutionRepository;
    }

    public function create ($data){
        return $this->solutionRepo->create($data);
    }

    public function getSolutionsWithStatus ($status){
        return $this->solutionRepo->getAllSolutionsWithStatus ($status);
    }

    public function deleteSolution ($id){
        return $this->solutionRepo->delete($id);
    }

    public function updateSolution ($data,$id){
        return $this->solutionRepo->update($data,$id);
    }

    public function getSolutionWithId ($id){
        return $this->solutionRepo->getSolutionById ($id);
    }

    public function getSolutionsOfUser ($user_id){
        return $this->solutionRepo->getAllSolutionsOfUser ($user_id);
    }

    public function getSolutionsOfCategoryWithStatus ($status,$category_id){
        return $this->solutionRepo->getAllSolutionsOfCategoryWithStatus ($status,$category_id);
    }

    public function getAllSolutions (){
        return $this->solutionRepo->getSolutions();
    }

    public function calculate_progress ($goal_amount, $achieved_amount){
        return round(($achieved_amount/$goal_amount)*100);
    }

    public function getSolutionWithDateSorting ($status){
        return $this->solutionRepo->getAllSolutionWithDateSorting ($status);
    }

    public function getSolutionWithSupportSorting ($status){
        return $this->solutionRepo->getAllSolutionWithSupportSorting ($status);
    }

    public function searchSolution ($data,$status){
        return $this->solutionRepo->searchSolutionWithStatus ($data,$status);
    }

}
