<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Http\Service\CategoryService;

class OwnerProfileController extends Controller
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

        $user = $this->userService->getUserById(auth()->id());
        $active = 4;
        return view('owner.profile',compact('active','user'));
    }
}
