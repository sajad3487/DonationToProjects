<?php


namespace Modules\Customer\Entities;


use Modules\Customer\Repository\DonationRepository;

class DonationService
{
    /**
     * @var DonationRepository
     */
    private $donationRepo;

    public function __construct(
        DonationRepository $donationRepository
    )
    {
        $this->donationRepo = $donationRepository;
    }

    public function create ($data){
        return $this->donationRepo->create($data);
    }

    public function getDonationsOfUser ($user_id){
        return $this->donationRepo->getAllDonationOfUser($user_id);
    }

    public function getDonations (){
        return $this->donationRepo->getAllDonation ();
    }

}
