<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\LevelService;

class AdminLevelController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var LevelService
     */
    private $levelService;

    public function __construct(
        UserService $userService,
        LevelService $levelService
    )
    {
        $this->userService = $userService;
        $this->levelService = $levelService;
    }

    public function index()
    {
        $active = 6;
        $user = $this->userService->getUserById(auth()->id());
        $customer_levels = $this->levelService->getLevelsWithType('customer_level');
        $owner_levels = $this->levelService->getLevelsWithType('owner_level');
        return view('admin.levels', compact( 'active','customer_levels','owner_levels','user'));
    }

    public function store_owner_level(Request $request)
    {
        $solutions_level_status = $this->levelService->checkMinFirstRequirement($request->min_solutions, $request->type);
        $donations_level_status = $this->levelService->checkMinSecondRequirement($request->min_donations, $request->type);
        if ($solutions_level_status == 'ok' && $donations_level_status == 'ok') {
            $data['first_requirement'] = $request->min_solutions;
            $data['second_requirement'] = $request->min_donations;
            $data['name'] = $request->name;
            $data['type'] = $request->type;
            $level = $this->levelService->create($data);
            return back();
        }
        return back()->withErrors(['msg' => 'You minimums are out of the range']);
    }

    public function store_customer_level(Request $request)
    {
        $solutions_level_status = $this->levelService->checkMinFirstRequirement($request->min_donation, $request->type);
        if ($solutions_level_status == 'ok') {
            $data['first_requirement'] = $request->min_donation;
            $data['name'] = $request->name;
            $data['type'] = $request->type;
            $level = $this->levelService->create($data);
            return back();
        }
        return back()->withErrors(['msg' => 'You minimums are out of the range']);
    }

    public function destroy($id)
    {
        $this->levelService->delete($id);
        return back();
    }
}
