<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserImageController extends Controller
{

 public function index(Request $request)
    {
        $query = UserImage::query();

        if ($request->has('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        $userImages = $query->latest()->get();

        return view('user-images.index', compact('userImages'));
    }

    public function create(Request $request)
    {
        $selectedUserId = $request->user_id;
        return view('user-images.create', compact('selectedUserId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',  // max 2MB
            'user_id' => 'required|exists:users,id',
            'status' => 'sometimes|boolean',
        ]);

        $imagePath = $request->file('image')->store('user_images', 'public');

        UserImage::create([
            'user_id' => $request->user_id,
            'image' => $imagePath,
            'status' => $request->has('status') ? $request->status : true,
        ]);

        return redirect()->route('user-images.index', ['user_id' => $request->user_id])
            ->with('success', 'Image added successfully.');
    }

    public function edit(UserImage $userImage)
    {
        return view('user-images.edit', compact('userImage'));
    }

    public function update(Request $request, UserImage $userImage)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'status' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($userImage->image && \Storage::disk('public')->exists($userImage->image)) {
                \Storage::disk('public')->delete($userImage->image);
            }
            $imagePath = $request->file('image')->store('user_images', 'public');
            $userImage->image = $imagePath;
        }

        $userImage->status = $request->has('status') ? $request->status : $userImage->status;
        $userImage->save();

        return redirect()->route('user-images.index', ['user_id' => $userImage->user_id])
            ->with('success', 'Image updated successfully.');
    }

    public function destroy(UserImage $userImage)
    {
        if ($userImage->image && \Storage::disk('public')->exists($userImage->image)) {
            \Storage::disk('public')->delete($userImage->image);
        }

        $userImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
