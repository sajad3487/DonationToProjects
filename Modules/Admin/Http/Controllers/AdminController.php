<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Http\Requests\AdminRequest;
use Modules\Category\Http\Services\CategoryService;
use Modules\Media\Http\Service\MediaService;
use Modules\Order\Http\Services\InvoiceService;
use Modules\Order\Http\Services\OrderService;
use Modules\Project\Http\Service\ProjectService;

class AdminController extends Controller
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
        $active = 1;
        return view('admin.dashboard', compact('active'));
    }

    public function profile(){
        $active = 10;
        $user = $this->userService->getUserById(auth()->id());
        return view('admin.profile',compact('active','user'));
    }

    public function update_profile (Request $request,$id){
        $data = $request->all();
        if (isset($request->file)){
            $data['profile_picture'] =$this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $this->userService->updateUser($data,$id);
        return back();
    }
}
