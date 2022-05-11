<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

    public function __construct(
        UserService $userService,
        MediaService $mediaService
    )
    {
        $this->userService = $userService;
        $this->mediaService = $mediaService;
    }

    public function index()
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 4;
        return view('owner.profile',compact('active','user'));
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
