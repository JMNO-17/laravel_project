<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|boolean',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('userImages'), $imageName);
            $validated['image'] = $imageName;
        }

        $this->userRepository->store($validated);
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
        $user = $this->userRepository->edit($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
