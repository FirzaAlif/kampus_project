<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    // permission: tambah-user, tambah-tulisan, edit-tulisan
    // role: superadmin, admin/teknisi, mahasiswa

    // superadmin: tambah-user
    // admin/teknisi: tambah-tulisan, edit-penulis
    // mahasiswa: edit-tugas, absensi
    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'tambah-user']);
        Permission::create(['name'=>'tambah-tugas']);
        Permission::create(['name'=>'tambah-absensi']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'edit-tugas']);
        Permission::create(['name'=>'edit-absensidosenkaryawan']);
        permission::create(['name'=>'edit-absensimahasiswa']);
        Permission::create(['name'=>'lihat-user']);
        Permission::create(['name'=>'lihat-tugas']);
        Permission::create(['name'=>'lihat-absensi']);
        Permission::create(['name'=>'history-tugas']);

        Role::create(['name'=>'superadmin']);
        Role::create(['name'=>'dosenkaryawan']);
        Role::create(['name'=>'mahasiswa']);

        $rolesuperadmin = role::findByName('superadmin');
        $rolesuperadmin->givePermissionTo('tambah-user');
        $rolesuperadmin->givePermissionTo('tambah-tugas');
        $rolesuperadmin->givePermissionTo('tambah-absensi');
        $rolesuperadmin->givePermissionTo('edit-user');
        $rolesuperadmin->givePermissionTo('edit-tugas');
        $rolesuperadmin->givePermissionTo('edit-absensidosenkaryawan');
        $rolesuperadmin->givePermissionTo('edit-absensimahasiswa');
        $rolesuperadmin->givePermissionTo('lihat-user');
        $rolesuperadmin->givePermissionTo('lihat-tugas');
        $rolesuperadmin->givePermissionTo('lihat-absensi');
        $rolesuperadmin->givePermissionTo('history-tugas');


        $roledosenkaryawan = role::findByName('dosenkaryawan');
        $roledosenkaryawan->givePermissionTo('tambah-tugas');
        $roledosenkaryawan->givePermissionTo('tambah-absensi');
        $roledosenkaryawan->givePermissionTo('edit-tugas');
        $roledosenkaryawan->givePermissionTo('edit-absensimahasiswa');
        $roledosenkaryawan->givePermissionTo('lihat-tugas');
        $roledosenkaryawan->givePermissionTo('lihat-absensi');
        $roledosenkaryawan->givePermissionTo('history-tugas');


        $rolemahasiswa = role::findByName('mahasiswa');
        $rolemahasiswa->givePermissionTo('tambah-absensi');
        $rolemahasiswa->givePermissionTo('lihat-absensi');   
        $rolemahasiswa->givePermissionTo('lihat-tugas');   
        $rolemahasiswa->givePermissionTo('lihat-absen');   
        $rolemahasiswa->givePermissionTo('history-tugas');   

    }
}
