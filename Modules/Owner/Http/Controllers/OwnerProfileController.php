<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Category\Http\Service\CategoryService;
use Modules\Media\Http\Service\MediaService;

class OwnerProfileController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var MediaService
     */
    private $mediaService;
    /**
     * @var LevelService
     */
    private $levelService;
    /**
     * @var SolutionService
     */
    private $solutionService;

    public function __construct(
        UserService $userService,
        MediaService $mediaService,
        LevelService $levelService,
        SolutionService $solutionService
    )
    {
        $this->userService = $userService;
        $this->mediaService = $mediaService;
        $this->levelService = $levelService;
        $this->solutionService = $solutionService;
    }

    public function index()
    {
        $data['level'] = $this->levelService->getOwnerLevels(auth()->id());
        $this->userService->updateUser($data,auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $active = 4;
        $levels = $this->levelService->getLevelsWithType('owner_level');
        $owner_solution = $this->solutionService->getSolutionsOfUser(auth()->id());
        $solution_number = $owner_solution->count();
        $total_donation = 0;
        foreach ($owner_solution as $solution){
            foreach ($solution->donations as $donation){
                $total_donation += $donation->amount;
            }
        }
        return view('owner.profile',compact('active','user','levels','solution_number','total_donation'));
    }

    public function update (Request $request,$id){
        $data = $request->all();
        if (isset($request->file)){
            $data['profile_picture'] =$this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $this->userService->updateUser($data,$id);
        return back();
    }
}
