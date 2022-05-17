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

    public function getMessagesOfOwner ($owner_id){
        return $this->messageRepo->getMessagesOfOwnerById ($owner_id);
    }

    public function getMessagesOfCustomer ($customer_id){
        return $this->messageRepo->getMessagesOfCustomerById ($customer_id);
    }

    public function getMessagesOfAdmin ($admin_id){
        return $this->messageRepo->getMessageOfAdminById ($admin_id);
    }

}
