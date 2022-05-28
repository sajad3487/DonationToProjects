<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Media\Http\Service\MediaService;

class AdminCustomerController extends Controller
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
        $active = 3;
        $customers = $this->userService->getUserByType (1);
        $user = $this->userService->getUserById(auth()->id());
        return view('admin.customers', compact('customers','active'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        if (isset($request->file)){
            $data['profile_picture'] =$this->mediaService->uploadMedia($request->file);
        }

        $customer = $this->userService->createNewUser($data);
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = $this->userService->updateUser($data, $id);
        return back();
    }


    public function destroy($id)
    {
        $this->userService->deleteUser($id);
        return back();
    }

    public function update_profile_picture(Request $request, $id)
    {
        $data['profile_picture'] = $this->userService->uploadMedia($request->file);
        $this->userService->updateUser($data, $id);
        return back();
    }

}
