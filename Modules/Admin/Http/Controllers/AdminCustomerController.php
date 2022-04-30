<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCustomerController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        UserService $userService
    )
    {
        $this->userService = $userService;
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
        $solution_provider = $this->userService->createNewUser($data);
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
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
