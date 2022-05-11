<?php


namespace Modules\Admin\Http\Service;


use Modules\Admin\Repository\MessageRepository;

class MessageService
{
    /**
     * @var MessageRepository
     */
    private $messageRepo;

    public function __construct(
        MessageRepository $messageRepository
    )
    {
        $this->messageRepo = $messageRepository;
    }

    public function create ($data){
        return $this->messageRepo->create($data);
    }

    public function getMessagesOfOwner ($user_id){
        return $this->messageRepo->getMessagesOfOwnerById ($user_id);
    }

}
