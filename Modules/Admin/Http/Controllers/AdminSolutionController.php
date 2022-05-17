<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;
use Modules\Media\Http\Service\MediaService;

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
    /**
     * @var MediaService
     */
    private $mediaService;

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        SolutionService $solutionService,
        MediaService $mediaService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->solutionService = $solutionService;
        $this->mediaService = $mediaService;
    }

    public function index()
    {
        $active = 4;
        $owners = $this->userService->getAllOwner();
        $categories = $this->categoryService->getActiveCategories();
        $solutions = $this->solutionService->getAllSolutions();
        return view('admin.solutions', compact('owners', 'active', 'categories', 'solutions'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $solution = $this->solutionService->create($data);
        return back();
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 4;
        $categories = $this->categoryService->getAllCategory();
        $solution = $this->solutionService->getSolutionWithId($id);
        return view('admin.edit_solution', compact('active', 'user', 'categories', 'solution'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->solutionService->updateSolution($data, $id);
        return back();
    }

    public function destroy($id)
    {
        $this->solutionService->deleteSolution($id);
        return back();
    }

    public function publish_solution($id)
    {
        $data['status'] = 3;
        $this->solutionService->updateSolution($data, $id);
        return back();
    }

    public function confirm_solution($id)
    {
        $data['status'] = 3;
        $this->solutionService->updateSolution($data, $id);
        return back();
    }

    public function upload_media(Request $request)
    {
        $data = $request->all();
        if (isset($request->file)) {
            $data['media_path'] = $this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $media = $this->mediaService->createMedia($data);
        return back();
    }


    public function update_media(Request $request, $id)
    {
        $data = $request->all();
        if (isset($request->file)) {
            $data['media_path'] = $this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $this->mediaService->updateMedia($data, $id);
        return back();
    }


    public function destroy_media($id)
    {
        $this->mediaService->deleteMedia($id);
        return back();
    }

    public function view($id)
    {
        if (auth()->id() == null){
            return redirect("solution/$id/view");
        }
        $user = $this->userService->getUserById(auth()->id());
        $solution = $this->solutionService->getSolutionWithId($id);
        return view('solution', compact('solution', 'user'));
    }

}
