<?php


namespace App\Role;

class SidebarRole
{
    public static function isMasterData(){
       return request()->routeIs(['datatahun.*', 'datamapel.*', 'datasiswa.*', 'datakelas.*', 'dataguru.*']);
    }
    public static function isDataUjian() {
        return request()->routeIs(['ujianjenis.*', 'ujiansesi.*', 'ujianruang.*', 'ujiansesisiswa.*', 'ujiannomorpeserta.*']);
    }
}
