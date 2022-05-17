<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;
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

    public function __construct(
        UserService $userService,
        MediaService $mediaService,
        LevelService $levelService
    )
    {
        $this->userService = $userService;
        $this->mediaService = $mediaService;
        $this->levelService = $levelService;
    }

    public function index()
    {
        $data['level'] = $this->levelService->getOwnerLevels(auth()->id());
        $this->userService->updateUser($data,auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $active = 4;
        $levels = $this->levelService->getLevelsWithType('owner_level');
        return view('owner.profile',compact('active','user','levels'));
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
