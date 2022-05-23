<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;
use Modules\Media\Http\Service\MediaService;

class OwnerSolutionController extends Controller
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
        $user = $this->userService->getUserById(auth()->id());
        $active = 2;
        $categories = $this->categoryService->getAllCategory();
        $solutions = $this->solutionService->getSolutionsOfUser (auth()->id());
//        dd($solutions);
        return view('owner.solutions', compact('active', 'user', 'categories','solutions'));
    }

    public function create()
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 2;
        $categories = $this->categoryService->getActiveCategories();
        return view('owner.new_solution', compact('active', 'user', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $solution = $this->solutionService->create($data);
        return redirect("owner/solutions/$solution->id/edit");
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 2;
        $categories = $this->categoryService->getAllCategory();
        $solution = $this->solutionService->getSolutionWithId ($id);
        return view('owner.edit_solution', compact('active', 'user', 'categories','solution'));
    }

    public function update (Request $request,$id){
        $data = $request->all();
        $this->solutionService->updateSolution($data,$id);
        return back();
    }

    public function upload_media (Request $request){
//        dd($request->file->extension());
        $data = $request->all();
        if (isset($request->video_link) && $request->video_link != null){
            $data['media_path'] = $request->video_link;
            unset($data['video_link']);
        }elseif (isset($request->file)){
            $data['media_path'] =$this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $media = $this->mediaService->createMedia($data);
        return back();
    }

    public function destroy_media ($id){
        $this->mediaService->deleteMedia($id);
        return back();
    }

    public function update_media (Request $request,$id){
        $data = $request->all();
        if (isset($request->file)){
            $data['media_path'] =$this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $this->mediaService->updateMedia ($data,$id);
        return back();
    }

    public function publish ($id){
        $data['status'] = 2;
        $this->solutionService->updateSolution($data,$id);
        return back();
    }

    public function get_location (){
        return view('test');
    }

}
