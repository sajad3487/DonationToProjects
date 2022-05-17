<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerFinancialController extends Controller
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
        $active = 4;
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.financial',compact('active','user'));
    }

}
