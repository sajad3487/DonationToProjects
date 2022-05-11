<?php


namespace Modules\Admin\Repository;


use App\DesignPatterns\Repository;
use Modules\Admin\Entities\Message;

class MessageRepository extends Repository
{
    public $model;

    public function __construct()
    {
        $this->model = new Message();
    }

    public function getMessagesOfOwnerById ($user_id){
        return Message::where('destination_id',$user_id)
            ->where('parent_id',0)
            ->where('type','message')
            ->with('texts')
            ->with('sender')
            ->with('receiver')
            ->get();
    }

}
