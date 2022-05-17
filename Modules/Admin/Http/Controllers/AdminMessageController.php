<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\MessageService;
use Modules\Admin\Http\Service\NoteService;

class AdminMessageController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var NoteService
     */
    private $noteService;
    /**
     * @var MessageService
     */
    private $messageService;

    public function __construct(
        UserService $userService,
        NoteService $noteService,
        MessageService $messageService
    )
    {
        $this->userService = $userService;
        $this->noteService = $noteService;
        $this->messageService = $messageService;
    }

    public function index()
    {
        $active = 9;
        $customers = $this->userService->getAllOwner();
        $messages = $this->messageService->getMessagesOfAdmin (auth()->id());
//        dd($messages);
        return view('admin.messages', compact('customers','active','messages'));
    }

    public function create()
    {
        return view('admin::create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $message = $this->messageService->create($data);
        return redirect("admin/messages");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
