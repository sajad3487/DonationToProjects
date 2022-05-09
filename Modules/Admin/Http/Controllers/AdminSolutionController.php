<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;

class AdminSolutionController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var SolutionService
     */
    private $solutionService;

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        SolutionService $solutionService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->solutionService = $solutionService;
    }

    public function index()
    {
        $active = 4;
        $owners = $this->userService->getAllOwner();
        $categories = $this->categoryService->getActiveCategories();
        $solutions = $this->solutionService->getSolutionsWithStatus (1);
        return view('admin.solutions', compact('owners','active','categories','solutions'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $solution = $this->solutionService->create($data);
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->solutionService->updateSolution ($data,$id);
        return back();
    }

    public function destroy($id)
    {
        $this->solutionService->deleteSolution ($id);
        return back();
    }
}
