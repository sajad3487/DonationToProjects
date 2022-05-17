<?php


namespace Modules\Customer\Repository;


use App\DesignPatterns\Repository;
use Modules\Customer\Entities\Donation;

class DonationRepository extends Repository
{
    /**
     * @var Donation
     */
    public $model;

    public function __construct()
    {
        $this->model = new Donation();
    }

    public function getAllDonationOfUser ($user_id){
        return Donation::where('customer_id',$user_id)
            ->with('customer')
            ->with('solution')
            ->with('solution_provider')
            ->get();
    }

    public function getAllDonation (){
        return Donation::with('customer')
            ->with('solution')
            ->with('solution_provider')
            ->get();
    }

}
