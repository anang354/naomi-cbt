<?php


namespace App\Role;

class SidebarRole
{
    public static function isMasterData(){
       return request()->routeIs(['datatahun.*', 'datamapel.*', 'datasiswa.*', 'datakelas.*', 'dataguru.*']);
    }
}
