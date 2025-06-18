<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\RoleResource;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Role\RoleRepositoryInterface;

class RoleController extends BaseController
{
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;

        // Middleware for permission control (uncomment when ready to use)
        // $this->middleware('permission:roleList', ['only' => ['index']]);
        // $this->middleware('permission:roleCreate', ['only' => ['store']]);
        // $this->middleware('permission:roleUpdate', ['only' => ['update']]);
    }

    /**
     * Display a listing of the roles.
     */
    public function index()
    {
        $roles = $this->roleRepository->index();
        $data = RoleResource::collection($roles);

        return $this->success($data, "Roles Retrieved Successfully", 200);
    }

    /**
     * Store a newly created role in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'name' => 'required|string',
            'permissions' => 'required',
        ]);

        if ($validation->fails()) {
            return $this->error('Validation Error', $validation->errors(), 422);
        }

        $role = $this->roleRepository->store([

            'name' => $request->name,
            'permissions' => $request->permissions,
        ]);

        return $this->success(new RoleResource($role), "Role Created Successfully", 200);
    }

    /**
     * Display the specified role.
     */
    public function show(string $id)
    {
        // $role = $this->roleRepository->edit($id);
        // $data = new RoleResource($role);

        // return $this->success($data, "Role Shown Successfully", 200);
    }

    /**
     * Update the specified role in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validation->fails()) {
            return $this->error("Validation Error", $validation->errors(), 422);
        }

        $role = $this->roleRepository->edit($id);
        $role->update($request->all());

        return $this->success(new RoleResource($role), "Role Updated Successfully", 200);
    }

    /**
     * Remove the specified role from storage.
     */
    public function destroy(string $id)
    {
        $role = $this->roleRepository->edit($id);
        $role->delete();

        return $this->success(null, "Role Deleted Successfully", 200);
    }
}
