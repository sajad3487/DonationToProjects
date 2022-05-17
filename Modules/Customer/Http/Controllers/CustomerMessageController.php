<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\MessageService;

class CustomerMessageController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var MessageService
     */
    private $messageService;

    public function __construct(
        UserService $userService,
        MessageService $messageService
    )
    {
        $this->userService = $userService;
        $this->messageService = $messageService;
    }

    public function index()
    {
        $active = 5;
        $user = $this->userService->getUserById(auth()->id());
        $messages = $this->messageService->getMessagesOfCustomer (auth()->id());
        return view('customer.message',compact('active','user','messages'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $message = $this->messageService->create($data);
        return redirect("customer/messages");
    }

    public function create ($user_id){
        $target = $this->userService->getUserById($user_id);
        $user = $this->userService->getUserById(auth()->id());
        $active = 5;
        return view('customer.new_message',compact('active','user','target'));
    }

}
