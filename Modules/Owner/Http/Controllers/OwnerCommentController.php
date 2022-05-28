<?php

namespace Modules\Owner\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\NoteService;

class OwnerCommentController extends Controller
{
    /**
     * @var NoteService
     */
    private $noteService;

    public function __construct(
        NoteService $noteService
    )
    {
        $this->noteService = $noteService;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $comment = $this->noteService->create($data);
        return back();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->noteService->delete($id);
        return back();
    }
}
