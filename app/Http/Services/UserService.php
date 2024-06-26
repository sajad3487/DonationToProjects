<?php


namespace App\Http\Services;


use App\Repository\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepo;

    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepo =$userRepository;
    }

    public function getCustomer(){
        return $this->userRepo->getAllCustomer();
    }

    public function getUserById($id){
        return $this->userRepo->getById($id);
    }

    public function updateUser ($data,$id){
        return $this->userRepo->update($data,$id);
    }

    public function getAdminUsers (){
        return $this->userRepo->getAdmins();
    }

    public function deleteAdmin ($id){
        return $this->userRepo->delete($id);
    }

    public function countAllUser (){
        return $this->userRepo->countUser();
    }

    public function getAllOwner (){
        return $this->userRepo->getCustomers ();
    }

    public function getUserByType ($type){
        return $this->userRepo->getAllUserByType ($type);
    }

    public function createNewUser ($data){
        return $this->userRepo->create($data);
    }

    public function deleteUser ($id){
        return $this->userRepo->delete($id);
    }

    public function uploadMedia ($file) {
        $destination = base_path() . '/public_html/media/NIS/';
        $filename = rand(1111111, 99999999);
        $newFileName = $filename . time().".".$file->extension();
        $file->move($destination, $newFileName);
        return '/media/NIS/' . $newFileName;
    }

}
