<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;
use Modules\Customer\Entities\DonationService;

class CustomerSolutionController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var SolutionService
     */
    private $solutionService;
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var DonationService
     */
    private $donationService;

    public function __construct(
        UserService $userService,
        SolutionService $solutionService,
        CategoryService $categoryService,
        DonationService $donationService
    )
    {
        $this->userService = $userService;
        $this->solutionService = $solutionService;
        $this->categoryService = $categoryService;
        $this->donationService = $donationService;
    }

    public function index()
    {
        $active = 2;
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionService->getSolutionsWithStatus(3);
        $categories = $this->categoryService->getActiveCategories();
        $category_id = 0;
        $sort[0] = "all";
        $sort[1] = "All Solutions";
        return view('customer.solutions',compact('active','user','solutions','categories','category_id','sort'));
    }

    public function show ($id){
        if (auth()->id() == null){
            return redirect("solution/$id/view");
        }
        $user = $this->userService->getUserById(auth()->id());
        $solution = $this->solutionService->getSolutionWithId($id);
        $supporter = 0;
        foreach ($solution->donations as $donation){
            if ($donation->customer->id == auth()->id()){
                $supporter = 1;
            }
        }
        return view('solution',compact('solution','user','supporter'));
    }

    public function customer_donated()
    {
        $active = 3;
        $user = $this->userService->getUserById(auth()->id());
        $donations = $this->donationService->getDonationsOfUser ($user->id);
//        dd($donations);
        return view('customer.donations',compact('active','user','donations'));
    }

    public function category_solutions ($category_id){
        $active = 2;
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionService->getSolutionsOfCategoryWithStatus(3,$category_id);
        $categories = $this->categoryService->getActiveCategories();
        $category = $this->categoryService->getCategoryById($category_id);
        $category_name = $category->title;
        $sort[0] = "category";
        $sort [1] = $category_name;
        return view('customer.solutions',compact('active','user','solutions','categories','category_id','category_name','sort'));
    }

    public function sort_by_date (){
        $active = 2;
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionService->getSolutionWithDateSorting(3);
        $categories = $this->categoryService->getActiveCategories();
        $category_id = 0;
        $sort[0] = "sorting";
        $sort [1] = "date";
        return view('customer.solutions',compact('active','user','solutions','categories','category_id','sort'));
    }

    public function sort_by_support (){
        $active = 2;
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionService->getSolutionWithSupportSorting(3);
        $categories = $this->categoryService->getActiveCategories();
        $category_id = 0;
        $sort[0] = "sorting";
        $sort[1] = "support";
        return view('customer.solutions',compact('active','user','solutions','categories','category_id','sort'));
    }

    public function search_solution (Request $request){
        $data = $request->search;
        $active = 2;
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionService->searchSolution($data,3);
        $categories = $this->categoryService->getActiveCategories();
        $category_id = 0;
        $sort[0] = 'search';
        $sort[1] = $data;
        return view('customer.solutions',compact('active','user','solutions','categories','category_id','sort'));
    }
}
