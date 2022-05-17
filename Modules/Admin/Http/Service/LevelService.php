<?php


namespace Modules\Admin\Http\Service;


use Modules\Admin\Repository\LevelRepository;
use Modules\Admin\Repository\SolutionRepository;
use Modules\Customer\Entities\DonationService;

class LevelService
{
    private $levelRepo;
    /**
     * @var SolutionService
     */
    private $solutionRepo;
    /**
     * @var DonationService
     */
    private $donationService;

    public function __construct(
        LevelRepository $levelRepository,
        SolutionService $solutionService,
        DonationService $donationService
    )
    {
        $this->levelRepo = $levelRepository;
        $this->solutionRepo = $solutionService;
        $this->donationService = $donationService;
    }

    public function create($data)
    {
        return $this->levelRepo->create($data);
    }

    public function checkMinFirstRequirement($first_requirement, $type)
    {
        $last_level = $this->levelRepo->getAllLevelsWithTypeForFirst($type);
        if ($last_level != null) {
            if ($first_requirement <= $last_level->first_requirement) {
                return "fail";
            }
        }
        return "ok";
    }

    public function checkMinSecondRequirement($second_requirement, $type)
    {
        $last_level = $this->levelRepo->getAllLevelsWithTypeForSecond($type);
        if ($last_level != null) {
            if ($second_requirement <= $last_level->second_requirement) {
                return "fail";
            }
        }

        return "ok";
    }

    public function getLevelsWithType($type)
    {
        return $this->levelRepo->getAllLevelsWithType($type);
    }

    public function delete ($id){
        return $this->levelRepo->delete($id);
    }

    public function getOwnerLevels ($owner_id){
        $owner_levels = $this->levelRepo->getAllLevelsWithType ('owner_level');
        $owner_solution = $this->solutionRepo->getSolutionsOfUser($owner_id);
        $owner_solution_number = $owner_solution->count();
        $owner_taken_donation = 0;
        foreach ($owner_solution as $solution){
            foreach ($solution->donations as $donation){
                $owner_taken_donation += $donation->amount;
            }
        }
        foreach ($owner_levels as $level){
            if($owner_solution_number >= $level->first_requirement && $owner_taken_donation >= $level->second_requirement){
                return $level->name;
            }
        }
        return "No Level";
    }

    public function getCustomerLevels ($customer_id){
        $customer_levels = $this->levelRepo->getAllLevelsWithType ('customer_level');
        $customer_donations = $this->donationService->getDonationsOfUser($customer_id);
        $total_donation_amount = 0 ;
        foreach ($customer_donations as $donation){
            $total_donation_amount += $donation->amount;
        }
        foreach ($customer_levels as $customer_level){
            if ($total_donation_amount >= $customer_level->first_requirement){
                return $customer_level->name;
            }
        }

        return 'No Level';
    }
}
