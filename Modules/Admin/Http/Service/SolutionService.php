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
        return $this->solutionRepo->getAllSolutions ($status);
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

}
