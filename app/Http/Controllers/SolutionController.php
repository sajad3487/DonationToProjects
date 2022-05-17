<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Modules\Admin\Http\Service\SolutionService;

class SolutionController extends Controller
{
    /**
     * @var SolutionService
     */
    private $solutionService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        SolutionService $solutionService,
        UserService $userService
    )
    {
        $this->solutionService = $solutionService;
        $this->userService = $userService;
    }

    public function view ($id){
        if (auth()->id() != null){
            $user = $this->userService->getUserById(auth()->id());
            if ($user->user_type == 3){
                return redirect("admin/solutions/$id/view");
            }elseif($user->user_type == 1){
                return redirect("customer/solutions/$id/show");
            }
        }
        $solution  = $this->solutionService->getSolutionWithId($id);
        return view('solution',compact('solution'));
    }

}
