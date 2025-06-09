<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;
    protected $userService;

    public function __construct(UserRepositoryInterface $userRepository, UserService $userService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->userRepository->index();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('userImages'), $imageName);
            // $validated['image'] = $imageName;
            $validated = array_merge($validated, ['image' => $imageName]);
        }

        $this->userRepository->store([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'gender' =>  $validated['gender'],
            'address' => $validated['address'],
            'status' => $validated['status'],
            'image' => $validated['image'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = $this->userRepository->edit($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request)
    {
        $user = $this->userRepository->edit($request->id);



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('userImages'), $imageName);
            $request->image = $imageName;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'status' => $request->status,
            'image' => $request->image,

        ]);



        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        // dd($id);


        $user = $this->userRepository->edit($id);
        //  dd($user);
        $user->delete();

        return redirect()->route('users.index');
    }

    public function userStatus($id)
    {
        // $user = User::find();
        $this->userService->status($id);
        // $user->status = $user->status === 1 ? 0 : 1;
        // $user->save();
        return redirect()->route('users.index');
    }
}
