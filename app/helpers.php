<?php
use App\Models\RoleInfo;
if (!function_exists('get_role_info')) {
    function get_role_info($id)
    {
        $role_info = RoleInfo::where('role_id',$id)->first();
        return $role_info;
    }
}
