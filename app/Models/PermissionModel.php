<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PermissionModel extends Model
{
    protected $table = 'permissions';


    public static function getSingle($id)
    {
        return RoleModel::where('id', $id)->first();
    }

    // public static function getRecord()
    // {
    //     $getPermission = PermissionModel::groupBy('group_by')->get();
    //     return $getPermission;
    // }
    public static function getRecord()
    {
        $getPermission = PermissionModel::select([
            'group_by',
            DB::raw('MAX(id) as id'),  // On groupe par group_by, mais on ne fait que wrapper le minimal
            DB::raw('MAX(name) as name'),
            DB::raw('MAX(slug) as slug'),
        ])
        ->groupBy('group_by')
        ->get();

        $result = [];

        foreach ($getPermission as $value) {
            $permissions = PermissionModel::getPermissionGroup($value->group_by);
            $data = [];
            $data['id'] = $value->id;
            $data['name'] = $value->name;

            $group = [];
            foreach ($permissions as $permission) {
                $dataG = [];
                $dataG['id'] = $permission->id;  // Utilisation des valeurs permises
                $dataG['name'] = $permission->name;
                $dataG['slug'] = $permission->slug;
                $group[] = $dataG;
            }

            $data['group'] = $group;
            $result[] = $data;
        }

        return $result;
    }


public static function getPermissionGroup($group_by)
{
    return PermissionModel::where('group_by', $group_by)->get();

}

}
