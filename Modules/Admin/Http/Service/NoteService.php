<?php


namespace Modules\Admin\Http\Service;


use Modules\Admin\Repository\NoteRepository;

class NoteService
{
    /**
     * @var NoteRepository
     */
    private $noteRepo;

    public function __construct(
        NoteRepository $noteRepository
    )
    {
        $this->noteRepo = $noteRepository;
    }

    public function create ($data){
        return $this->noteRepo->create($data);
    }

    public function delete ($id){
        return $this->noteRepo->delete($id);
    }

    public function update ($data,$id){
        return $this->noteRepo->update($data,$id);
    }

}
