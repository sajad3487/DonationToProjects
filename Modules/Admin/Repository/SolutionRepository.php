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

    public function getAllSolutionsWithStatus ($status){
        return Solution::where('status',$status)
            ->with('owner')
            ->with('medias')
            ->with('category')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->with('donations')
            ->with('donations.solution_provider')
            ->with('donations.customer')
            ->get();
    }

    public function getSolutionById ($id){
        return Solution::where('id',$id)
            ->with('medias')
            ->with('category')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->with('donations')
            ->with('donations.solution_provider')
            ->with('donations.customer')
            ->first();
    }

    public function getAllSolutionsOfUser ($user_id){
        return Solution::where('user_id',$user_id)
            ->with('medias')
            ->with('category')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->with('donations')
            ->with('donations.solution_provider')
            ->with('donations.customer')
            ->get();
    }

    public function getAllSolutionsOfCategoryWithStatus  ($status,$category_id){
        return Solution::where('status',$status)
            ->where('category_id',$category_id)
            ->with('owner')
            ->with('medias')
            ->with('category')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->with('donations')
            ->with('donations.solution_provider')
            ->with('donations.customer')
            ->get();
    }

    public function getSolutions (){
        return Solution::with('owner')
            ->with('medias')
            ->with('category')
            ->with('main_image')
            ->with('images')
            ->with('comments')
            ->with('comments.user')
            ->with('reports')
            ->with('reports.media_report')
            ->with('donations')
            ->with('donations.solution_provider')
            ->with('donations.customer')
            ->get();
    }


}
