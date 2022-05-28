<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;
use Modules\Customer\Entities\DonationService;
use Modules\Media\Http\Service\MediaService;

class CustomerProfileController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var MediaService
     */
    private $mediaService;
    /**
     * @var LevelService
     */
    private $levelService;
    /**
     * @var DonationService
     */
    private $donationService;

    public function __construct(
        UserService $userService,
        MediaService $mediaService,
        LevelService $levelService,
        DonationService $donationService
    )
    {
        $this->userService = $userService;
        $this->mediaService = $mediaService;
        $this->levelService = $levelService;
        $this->donationService = $donationService;
    }

    public function index()
    {
        $active = 6;
        $levels = $this->levelService->getLevelsWithType('customer_level');
        $data['level'] = $this->levelService->getCustomerLevels(auth()->id());
        $this->userService->updateUser($data,auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $customer_donations = $this->donationService->getDonationsOfUser(auth()->id());
        $total_donation = 0 ;
        foreach ($customer_donations as $donation){
            $total_donation += $donation->amount;
        }
        return view('customer.profile',compact('active','user','levels','total_donation'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (isset($request->file)){
            $data['profile_picture'] =$this->mediaService->uploadMedia($request->file);
            unset($data['file']);
        }
        $this->userService->updateUser($data,$id);
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
