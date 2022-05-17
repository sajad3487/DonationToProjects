<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;

class OwnerController extends Controller
{
    private $userService;
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var LevelService
     */
    private $levelService;
    /**
     * @var SolutionService
     */
    private $solutionsService;

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        LevelService $levelService,
        SolutionService $solutionService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->levelService = $levelService;
        $this->solutionsService = $solutionService;
    }

    public function index()
    {
        $active = 1;
        $categories = $this->categoryService->getAllCategory();
        $data['level'] = $this->levelService->getOwnerLevels(auth()->id());
        $this->userService->updateUser($data,auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $solutions = $this->solutionsService->getSolutionsOfUser($user->id);
        return view('owner.index',compact('active','user','categories','solutions'));
    }

}
