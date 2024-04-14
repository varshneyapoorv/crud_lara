<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Create a new user
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'photo' => 'nullable|string',
        ]);

        // Create the user with default values for coin balance and membership
        $user = User::create([
            'name' => $validatedData['name'],
            'phone_number' => $validatedData['phone_number'],
            'photo' => $validatedData['photo'],
            'coin_balance' => $request->coin_balance ?? '1000', // Initial balance of 1000 coins
            'membership' => $request->membership ?? 'normal', // Default membership type
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    // Get all users
    public function index()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }

    // Get a single user by ID
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]);
    }

    // Update a user
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'string',
            'phone_number' => 'string',
            'photo' => 'nullable|string',
            'coin_balance' => 'integer',
            'membership' => 'string|in:gold,silver,bronze,normal', // Ensure membership type is one of the allowed options
        ]);

        // Find the user by ID
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Update the user with validated data
        $user->update($validatedData);

        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    // Delete a user
    public function destroy($id)
    {
        // dd($id);
        // Find the user by ID
        $user = User::find($id);
        

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Delete the user
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
