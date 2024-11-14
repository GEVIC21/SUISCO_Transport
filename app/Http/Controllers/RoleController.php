<?php

namespace App\Http\Controllers;

use App\Models\PermissionModel;
use App\Models\PermissionRoleModel;
use App\Models\RoleModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function list()
    {
        // $PermissionRole = PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
        // if(empty($PermissionRole))
        // {
        //     abort(404);
        // }

        // $data['PermissionAdd'] = PermissionRoleModel::getPermission('Add Role', Auth::user()->role_id);
        // $data['PermissionEdit'] = PermissionRoleModel::getPermission('Edit Role', Auth::user()->role_id);
        // $data['PermissionDelete'] = PermissionRoleModel::getPermission('Delete Role', Auth::user()->role_id);

        $data['getRecord'] = RoleModel::getRecord();
        return view('panel.role.list',$data);
    }

    public function add(){

        // $PermissionRole = PermissionRoleModel::getPermission('Add Role', Auth::user()->role_id);
        // if(empty($PermissionRole))
        // {
        //     abort(404);
        // }

        $getPermission = PermissionModel::getRecord();
        $data['getPermission'] = $getPermission;
        return view('panel.role.add',$data);
    }

    public function insert(Request $request){

        // $PermissionRole = PermissionRoleModel::getPermission('Add Role', Auth::user()->role_id);
        // if(empty($PermissionRole))
        // {
        //     abort(404);
        // }
        $save = new RoleModel();
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::insertUpdateRecord($request->permission_id, $save->id);

        return redirect()->route('admin.role.list')->with('success','Role added successfully');
    }


    public function edit($id)
{
    // $PermissionRole = PermissionRoleModel::getPermission('Edit Role', Auth::user()->role_id);
    //     if(empty($PermissionRole))
    //     {
    //         abort(404);
    //     }

    $data['getRecord'] = RoleModel::getSingle($id);
    $data['getPermission'] = PermissionModel::getRecord();
    $data['getRolePermission'] = PermissionRoleModel::getRolePermission($id);
    return view('panel.role.edit', $data);
}


    public function update(Request $request, $id){
        // dd($request->all());

        $update = RoleModel::getSingle($id);
        $update->name = $request->name;
        $update->save();
        PermissionRoleModel::insertUpdateRecord($request->permission_id, $update->id);
        return redirect()->route('admin.role.list')->with('success','Role updated successfully');
    }

    public function delete($id){
        // $PermissionRole = PermissionRoleModel::getPermission('Delete Role', Auth::user()->role_id);
        // if(empty($PermissionRole))
        // {
        //     abort(404);
        // }

        // dd($id);
        $delete = RoleModel::find($id);
        $delete->delete();

        return redirect()->route('admin.role.list')->with('success','Role deleted successfully');
    }
}
