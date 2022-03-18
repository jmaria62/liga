<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $competition = new Competition();
        // $competition->name ="Liga 2020-21";
        // $competition->year = 2020;
        // $competition->save();

        $equipo = new Team();
        $equipo->name="Futbol Club Barcelona";
        $equipo->siglas="FCB";
        $equipo->save();

        $equipo = new Team();
        $equipo->name="Real Madrid Club Futbol";
        $equipo->siglas="RMA";
        $equipo->save();

        $equipo = new Team();
        $equipo->name="Valencia Futbol Club";
        $equipo->siglas="VCF";
        $equipo->save();

        $equipo = new Team();
        $equipo->name="Unio Esportiva Lleida";
        $equipo->siglas="UEL";
        $equipo->save();

        $equipo = new Team();
        $equipo->name="Murcia Club Futbol";
        $equipo->siglas="MUR";
        $equipo->save();






    }
}
