<?php

namespace Modules\Owner\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Service\SolutionService;

class OwnerLocationController extends Controller
{
    /**
     * @var SolutionService
     */
    private $solutionService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        SolutionService $solutionService,
        UserService $userService
    )
    {
        $this->solutionService = $solutionService;
        $this->userService = $userService;
    }

    public function store(Request $request)
    {
        $data['e_location'] = $request->e_location;
        $data['w_location'] = $request->w_location;
        $this->solutionService->updateSolution($data,$request->solution_id);
        return back();
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById(auth()->id());
        $active = 2;
        $solution = $this->solutionService->getSolutionWithId ($id);
        return view('owner.edit_location', compact('active', 'user','solution'));
    }

    public function update(Request $request, $id)
    {
        $data['e_location'] = $request->e_location;
        $data['w_location'] = $request->w_location;
        $this->solutionService->updateSolution($data,$id);
        return redirect("owner/solutions/$id/edit");
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
