<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\MessageService;
use Modules\Category\Http\Service\CategoryService;

class OwnerMessageController extends Controller
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
     * @var MessageService
     */
    private $messageService;

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        MessageService $messageService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->messageService = $messageService;
    }

    public function index()
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 3;
        $categories = $this->categoryService->getAllCategory();
        $messages = $this->messageService->getMessagesOfOwner (auth()->id());
        return view('owner.messages',compact('active','user','categories','messages'));
    }

    public function store (Request $request){
        $data = $request->all();
        $message = $this->messageService->create($data);
        return back();
    }

}
