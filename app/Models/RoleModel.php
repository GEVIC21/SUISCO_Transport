<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{

    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];

    public static function getRecord()
    {
        return RoleModel::get();
    }

    public static function getSingle($id)
    {
        return RoleModel::where('id', $id)->first();
    }
}
