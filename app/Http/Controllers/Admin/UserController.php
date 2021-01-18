<?php

namespace App\Http\Controllers\Admin;

use App\Builders\UserBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\DistrictRepository;
use App\Repositories\UserRepository;
use App\Repositories\UserRoleRepository;
use Illuminate\Http\Request;

class UserController extends Controller {

    protected $builder;

    protected $repository;

    protected $role_repository;

    protected $district_repository;


    public function __construct() {
        $this->builder = new UserBuilder();
        $this->repository = new UserRepository();
        $this->role_repository = new UserRoleRepository();
        $this->district_repository = new DistrictRepository();
    }


    public function index() {
        $users = $this->repository->getAllForAdmin();

        return view('admin.user.index', compact('users'));
    }


    public function create() {
        $roles = $this->role_repository->getAllForAdmin();
        $districts = $this->district_repository->getAllForAdmin();

        return view('admin.user.create', compact('roles', 'districts'));
    }


    public function store(CreateUserRequest $request) {
        $this->builder
            ->createEmpty()
            ->setName($request->name)
            ->setPassword($request->password)
            ->setRoleId($request->role_id)
            ->setDistrictId($request->district_id)
            ->save();

        return redirect('/admin/users');
    }


    public function edit(int $id) {
        $user = $this->repository->getByIdForAdmin($id);
        $roles = $this->role_repository->getAllForAdmin();
        $districts = $this->district_repository->getAllForAdmin();

        return view('admin.user.edit', compact('user', 'roles', 'districts'));
    }


    public function update(UpdateUserRequest $request, int $id) {
        if ($user = $this->repository->getByIdForAdmin($id)) {
            $this->builder
                ->loadModel($user)
                ->setName($request->name)
                ->setRoleId($request->role_id)
                ->setDistrictId($request->district_id)
                ->save();
        }

        return redirect('/admin/users');
    }


    public function destroy(int $id) {
        $user = $this->repository->getByIdForAdmin($id);

        $user->delete();

        return redirect('/admin/users');
    }
}
