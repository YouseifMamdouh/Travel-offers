<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function index()
    {
        $data = User::where('is_admin', 1)->get();
        return view('dashboard.admins.index', compact('data'));
    }


    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function store(UserCreateRequest $request)
    {
//        return  $request;
        try {
            DB::beginTransaction();
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => true,
            ]);

            DB::commit();
            return redirect()->route('admins.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = User::find($id);
        if ($data) {
            return view('dashboard.admins.edit', compact('data'));

        } else {
            return redirect()->route('admins.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(UserUpdateRequest $request, $id)
    {
        try {
//            return $request;
            $user = User::find($id);
            if (!$user)
                return redirect()->route('admins.index')->with(['error' => __('messages.error_general')]);

            DB::beginTransaction();


            // Status Update

            if ($request->email !== $user->email) {
                $check = User::where('email', $request->email)->where('id', '!=', $user->id)->first();
                if ($check) {
                    return redirect()->route('admins.edit', $user->id)->with(['error' => 'The Email is Already Used']);
                }
            }

            if ($request->password !== null) {
                $user->password = Hash::make($request->password);
            }
            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            DB::commit();
            return redirect()->route('admins.index')->with(['success' => __('messages.success_updated')]);


        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = User::find($id);
        if ($data) {

            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('admins.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
