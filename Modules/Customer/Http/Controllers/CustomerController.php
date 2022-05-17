<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;
use Modules\Category\Http\Service\CategoryService;
use Modules\Customer\Entities\Donation;
use Modules\Customer\Entities\DonationService;

class CustomerController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var CategoryService
     */
    private $categoryService;
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
        CategoryService $categoryService,
        LevelService $levelService,
        DonationService $donationService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->levelService = $levelService;
        $this->donationService = $donationService;
    }

    public function index()
    {
        $data['level'] = $this->levelService->getCustomerLevels(auth()->id());
        $this->userService->updateUser($data,auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $active = 1;
        $categories = $this->categoryService->getAllCategory();
        $donations = $this->donationService->getDonationsOfUser($user->id);
        return view('customer.index',compact('active','user','categories','donations'));
    }

    public function edit($id)
    {
        return view('customer::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
