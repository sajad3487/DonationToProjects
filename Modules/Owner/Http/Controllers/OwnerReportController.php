<?php

namespace Modules\Owner\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\NoteService;
use Modules\Media\Http\Service\MediaService;

class OwnerReportController extends Controller
{
    /**
     * @var NoteService
     */
    private $noteService;
    /**
     * @var MediaService
     */
    private $mediaService;

    public function __construct(
        NoteService $noteService,
        MediaService $mediaService
    )
    {
        $this->noteService = $noteService;
        $this->mediaService = $mediaService;
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['body'] = $request->body;
        $data['type'] = $request->type;
        $data['owner_id'] = $request->owner_id;
        $data['user_id'] = auth()->id();
        $report = $this->noteService->create($data);

        if (isset($request->file)){
            $media_data['media_path'] =$this->mediaService->uploadMedia($request->file);
            $media_data['type'] = $request->media_of_report;
            $media_data['owner_id'] = $report->id;
            if (isset($request->media_type)){
                $media_data['media_type'] = $request->media_type;
            }else{
                $media_data['media_type'] = "image";
            }
            $media = $this->mediaService->createMedia($media_data);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        dd($request->all(),$id);
    }

    public function destroy($id)
    {
        $this->noteService->delete($id);
        return back();
    }
}