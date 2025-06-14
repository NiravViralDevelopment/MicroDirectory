<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoleInfo;
use App\Models\Countries;
use App\Models\User;
use App\Models\Log;
use App\Models\Cms;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
class FrontController extends Controller
{
    function frontHome(){
        $roles = DB::table('roles')
            ->join('role_infos', 'roles.id', '=', 'role_infos.role_id')
            ->where('role_infos.is_active', 1)
            ->where('roles.id', '!=',1)
            ->select('roles.*', 'role_infos.*')
            ->get();

            // return $roles;
        $country = Countries::where('is_active',1)->get();
        return view('welcome',compact('roles','country'));
    }
    function directoryList($slug){
        $roleInfo = RoleInfo::where('slug',$slug)->first();
        $role = DB::table('roles')->where('id',$roleInfo->role_id)->first();
        $users = User::role($role->name)->with('video_list')->where('is_featured','0')->get();
        // return $users;
        $feacherdUsers = User::role($role->name)->where('is_featured','1')->get();
        return view('front.directory_list',compact('users','feacherdUsers'));
    }

    function directoryDetails($slug){
        dd('comming soon...');
        $user = User::where('slug',$slug)->first();
        return view('front.directory_details',compact('user'));
    }
    function directoryDirectory(){
        return "comming soon...";
    }


    function about(){
        $cms = Cms::find(2);
        return view('front.cms',compact('cms'));
    }


    function terms(){
        $cms = Cms::find(3);
        return view('front.cms',compact('cms'));
    }


    function privacy(){
        $cms = Cms::find(4);
         return view('front.cms',compact('cms'));
    }

    function registration(){
        $cms = Cms::find(5);
         return view('front.cms',compact('cms'));
    }

     function feedback(){
        $cms = Cms::find(6);
         return view('front.cms',compact('cms'));
    }

    public function add(Request $request)
    {
        $input = $request->all();
        $password="12345678";
        $input['show_password'] = $password;
        $input['password'] = FacadesHash::make($password);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        Mail::to($user->email)->send(new UserCreatedMail($user));
        return redirect()->route('users.index')
                        ->with('message','User created successfully and email sent');
    }

    public function register_form(){

        $rolesDate = Role::orderBy('id','DESC')->get();
        return view('register_form',compact('rolesDate'));
    }
    public function registrtionStore(Request $request)
    {
        try {
            // Validate the incoming request data
            $validated = $request->validate([
                'name' => 'required|string|max:200|min:2|regex:/^[a-zA-Z ]+$/',
                'phone' => 'required|string|max:13|min:10|unique:users,phone',
                'email' => 'required|email|max:200|min:2|unique:users,email',
                'whatsapp' => 'required|string|max:12|min:10',
                'register_as' => 'required|exists:roles,id', // Validate role ID exists
                'tattve_media_id' => 'required', // Validate role ID exists


            ]);

            // Start a database transaction
            DB::beginTransaction();

            // Generate a random password
            // $randomPassword = Str::random(12);
            $randomPassword = '12345678';
            $hashedPassword = Hash::make($randomPassword);

            // Prepare data for storage
            $userData = [
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'whatsup' => $validated['whatsapp'], // Map 'whatsapp' to 'whatsup' column
                'tattve_media_id' => $validated['tattve_media_id'], // Map 'whatsapp' to 'whatsup' column

                'password' => $hashedPassword,
                'show_password' => $randomPassword, // Note: Insecure; consider removing
                'is_active' => true,
                'slug' => Str::slug($validated['name'] . '-' . Str::random(6)),
            ];

            // Store the user in the database
            // Equivalent SQL:
            // INSERT INTO users (name, phone, email, whatsup, password, show_password, is_active, slug, created_at, updated_at)
            // VALUES (:name, :phone, :email, :whatsup, :password, :show_password, 1, :slug, NOW(), NOW())
            $user = User::create($userData);

            // Find the role by ID
            $role = Role::findOrFail($validated['register_as']); // Throws ModelNotFoundException if not found
            $user->assignRole($role->name);

            // Equivalent SQL for role assignment:
            // INSERT INTO model_has_roles (role_id, model_id, model_type)
            // VALUES (:role_id, :user_id, 'App\\Models\\User')

            // Commit the transaction
            DB::commit();
            return redirect(url('/'))
                ->with('success', 'Registration successful! Please check your email for your password.');

            // Redirect with success message
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation failed; Laravel handles redirect with errors automatically
            throw $e;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Role not found
            DB::rollBack();
            Log::error('Role not found for ID: ' . $request->register_as, ['exception' => $e]);
            return redirect()->back()->withErrors(['register_as' => 'Invalid role selected.']);
        } catch (QueryException $e) {
            // Database error (e.g., duplicate slug)
            DB::rollBack();
            Log::error('Database error during user registration: ' . $e->getMessage(), ['request' => $request->all()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while registering. Please try again.']);
        } catch (\Exception $e) {
            // Catch any other unexpected errors
            DB::rollBack();
            Log::error('Unexpected error during user registration: ' . $e->getMessage(), ['request' => $request->all()]);
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please contact support.']);
        }
    }

}
