<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRoleModel extends Model
{
    protected $table = 'permission_role';

    public static function insertUpdateRecord($permission_ids, $role_id)
    {
        if(!empty($role_id)) {
            self::where('role_id', '=', $role_id)->delete();

            if(!empty($permission_ids)) {
                foreach($permission_ids as $permission_id) {
                    $save = new self;
                    $save->role_id = $role_id;
                    $save->permission_id = $permission_id;
                    $save->save();
                }
            }
        }
    }

    public static function getRolePermission($role_id)
    {
        return self::where('role_id', '=', $role_id)
                   ->pluck('permission_id')
                   ->toArray();
    }

    // public static function getPermission($role_id , $slug)
    // {
    //     return self::select("permission_role.id")
    //     ->join('permissions','permissions.id','=','permission_role.permission_id')
    //     ->where('permission_role.role_id', '=', $role_id)
    //     ->where('permissions.slug', '=', $slug)
    //     ->count();



    // }

    public static function getPermission($slug, $role_id)
{
    return self::select("permission_role.id")
        ->join('permissions', 'permissions.id', '=', 'permission_role.permission_id')
        ->where('permission_role.role_id', '=', $role_id)
        ->where('permissions.slug', '=', $slug)  // Changé de slug à group_by si c'est comme ça dans votre DB
        ->exists();  // Utilisez exists() au lieu de count()
}


}
