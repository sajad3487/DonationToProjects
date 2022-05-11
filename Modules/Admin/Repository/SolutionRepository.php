<?php


namespace Modules\Admin\Repository;


use App\DesignPatterns\Repository;
use Modules\Admin\Entities\Solution;

class SolutionRepository extends Repository
{
    /**
     * @var Solution
     */
    public $model;

    public function __construct()
    {
        $this->model = new Solution();
    }

    public function getAllSolutions ($status){
        return Solution::where('status',$status)
            ->with('owner')
            ->get();
    }

    public function getSolutionById ($id){
        return Solution::where('id',$id)
            ->with('medias')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->first();
    }

    public function getAllSolutionsOfUser ($user_id){
        return Solution::where('user_id',$user_id)
            ->with('medias')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->get();
    }


}
