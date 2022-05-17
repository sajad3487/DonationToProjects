<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;
use Modules\Customer\Entities\DonationService;

class CustomerDonationController extends Controller
{
    /**
     * @var DonationService
     */
    private $donationService;
    /**
     * @var SolutionService
     */
    private $solutionService;

    public function __construct(
        DonationService $donationService,
        SolutionService $solutionService
    )
    {
        $this->donationService = $donationService;
        $this->solutionService = $solutionService;
    }

    public function index()
    {
        return view('customer::index');
    }

    public function create()
    {
        return view('customer::create');
    }

    public function store(Request $request)
    {
        $solution = $this->solutionService->getSolutionWithId($request->solution_id);
        $achieved_goal = $solution->achieved_amount + $request->amount;
        $solution_data['progress'] = $this->solutionService->calculate_progress ($solution->goal_amount,$achieved_goal);
        $solution_data['achieved_amount'] = $achieved_goal;
        $this->solutionService->updateSolution($solution_data,$solution->id);
        $data = $request->all();
        $data['customer_id'] = auth()->id();
        $data['transaction_token'] = 'adfasdfasdfasfasfaf2w32';
        $donation = $this->donationService->create($data);
        return redirect("customer/solutions/your_donations");
    }


}
