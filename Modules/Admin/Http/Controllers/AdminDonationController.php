<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Entities\DonationService;

class AdminDonationController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var DonationService
     */
    private $donationService;

    public function __construct(
        UserService $userService,
        DonationService $donationService
    )
    {
        $this->userService = $userService;
        $this->donationService = $donationService;
    }

    public function index()
    {
        $active = 7;
        $user = $this->userService->getUserById(auth()->id());
        $donations = $this->donationService->getDonations();
        return view('admin.donation',compact('active','user','donations'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
