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
        if (isset($request->video_link) && $request->video_link != null){
            $media_data['media_path'] = $request->video_link;
            $media_data['type'] = $request->media_of_report;
            $media_data['owner_id'] = $report->id;
            $media_data['media_type'] = $request->media_type;
            $media = $this->mediaService->createMedia($media_data);
        }elseif (isset($request->file)){
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
        $data = $request->all();
        unset($data['media_type']);
        unset($data['video_link']);
        $this->noteService->update ($data,$id);
        if (isset($request->video_link) && $request->video_link != null) {
            $media_data['media_path'] =$request->video_link;
            $media_data['type'] = $request->media_of_report;
            $media_data['owner_id'] = $id;
            $media_data['media_type'] = $request->media_type;
            $media = $this->mediaService->createMedia($media_data);

        }elseif (isset($request->file)){
            $media_data['media_path'] =$this->mediaService->uploadMedia($request->file);
            $media_data['type'] = $request->media_of_report;
            $media_data['owner_id'] = $id;
            if (isset($request->media_type)){
                $media_data['media_type'] = $request->media_type;
            }else{
                $media_data['media_type'] = "image";
            }
            $media = $this->mediaService->createMedia($media_data);
        }
        return back();
    }

    public function destroy($id)
    {
        $this->noteService->delete($id);
        return back();
    }
}
