<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FootballClubSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('football_clubs')->insert([
            [
                "name" => "KF Tirana",
                "slug" => "kf-tirana",
                "notice" => null,
                "old_names" => null,
                "founded" => 1920,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-tirana.png"
            ],
            [
                "name" => "FK Dinamo Tirana",
                "slug" => "fk-dinamo-tirana",
                "notice" => null,
                "old_names" => null,
                "founded" => 1950,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fk-dinamo-tirana.png"
            ],
            [
                "name" => "FK Partizani Tirana",
                "slug" => "fk-partizani-tirana",
                "notice" => null,
                "old_names" => null,
                "founded" => 1946,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fk-partizani-tirana.png"
            ],
            [
                "name" => "KF Vllaznia Shkodër",
                "slug" => "kf-vllaznia-shkoder",
                "notice" => null,
                "old_names" => null,
                "founded" => 1919,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-vllaznia-shkoder.png"
            ],
            [
                "name" => "KF Skënderbeu Korçë",
                "slug" => "kf-skenderbeu-korce",
                "notice" => null,
                "old_names" => null,
                "founded" => 1909,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-skenderbeu-korce.png"
            ],
            [
                "name" => "KF Elbasani",
                "slug" => "kf-elbasani",
                "notice" => null,
                "old_names" => null,
                "founded" => 1912,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-elbasani.png"
            ],
            [
                "name" => "Flamurtari FC",
                "slug" => "flamurtari-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1923,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/flamurtari-fc.png"
            ],
            [
                "name" => "KF Teuta Durrës",
                "slug" => "kf-teuta-durres",
                "notice" => null,
                "old_names" => null,
                "founded" => 1920,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-teuta-durres.png"
            ],
            [
                "name" => "FK Kukësi",
                "slug" => "fk-kukesi",
                "notice" => null,
                "old_names" => null,
                "founded" => 1930,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fk-kukesi.png"
            ],
            [
                "name" => "KF Besa Kavajë",
                "slug" => "kf-besa-kavaje",
                "notice" => null,
                "old_names" => null,
                "founded" => 1925,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-besa-kavaje.png"
            ],
            [
                "name" => "KF Tomori",
                "slug" => "kf-tomori",
                "notice" => null,
                "old_names" => null,
                "founded" => 1923,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-tomori.png"
            ],
            [
                "name" => "KF Lushnja",
                "slug" => "kf-lushnja",
                "notice" => null,
                "old_names" => null,
                "founded" => 1927,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-lushnja.png"
            ],
            [
                "name" => "KF Albpetrol Patos",
                "slug" => "kf-albpetrol-patos",
                "notice" => null,
                "old_names" => null,
                "founded" => 1947,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-albpetrol-patos.png"
            ],
            [
                "name" => "FK Apolonia Fier",
                "slug" => "fk-apolonia-fier",
                "notice" => null,
                "old_names" => null,
                "founded" => 1925,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fk-apolonia-fier.png"
            ],
            [
                "name" => "KF Laçi",
                "slug" => "kf-laci",
                "notice" => null,
                "old_names" => null,
                "founded" => 1960,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-laci.png"
            ],
            [
                "name" => "KF Bylis",
                "slug" => "kf-bylis",
                "notice" => null,
                "old_names" => null,
                "founded" => 1972,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kf-bylis.png"
            ],
            [
                "name" => "FC Santa Coloma",
                "slug" => "fc-santa-coloma",
                "notice" => null,
                "old_names" => null,
                "founded" => 1986,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-santa-coloma.png"
            ],
            [
                "name" => "CE Principat",
                "slug" => "ce-principat",
                "notice" => "Club Esportiu Principat was an Andorran football club created in 1989, based in the city of Andorra la Vella. Was one of the most successful football clubs in Andorra along with FC Santa Coloma and UE Sant Julià, having won three times the Andorran Premier League and five times the Andorran Cup. The club was dissolved in 2015.",
                "old_names" => "Club Esportiu, Penya Madridista",
                "founded" => 1989,
                "destroyed" => 2015,
                "image" => "/uploads/football-clubs/ce-principat.png"
            ],
            [
                "name" => "UE Sant Julià",
                "slug" => "ue-sant-julia",
                "notice" => null,
                "old_names" => null,
                "founded" => 1982,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/ue-sant-julia.png"
            ],
            [
                "name" => "FC Encamp",
                "slug" => "fc-encamp",
                "notice" => null,
                "old_names" => null,
                "founded" => 1950,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-encamp.png"
            ],
            [
                "name" => "Constel·lació Esportiva",
                "slug" => "constel-lacio-esportiva",
                "notice" => null,
                "old_names" => null,
                "founded" => 1998,
                "destroyed" => 2000,
                "image" => "/uploads/football-clubs/constellacio-esportiva.png"
            ],
            [
                "name" => "FC Rànger's",
                "slug" => "fc-ranger-s",
                "notice" => null,
                "old_names" => null,
                "founded" => 1981,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-rangers.png"
            ],
            [
                "name" => "FC Lusitanos",
                "slug" => "fc-lusitanos",
                "notice" => null,
                "old_names" => null,
                "founded" => 1999,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-lusitanos.png"
            ],
            [
                "name" => "Inter Club d'Escaldes",
                "slug" => "inter-club-d-escaldes",
                "notice" => null,
                "old_names" => null,
                "founded" => 1991,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/inter-club-descaldes.jpeg"
            ],
            [
                "name" => "UE Santa Coloma",
                "slug" => "ue-santa-coloma",
                "notice" => null,
                "old_names" => null,
                "founded" => 1986,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/ue-santa-coloma.png"
            ],
            [
                "name" => "UE Engordany",
                "slug" => "ue-engordany",
                "notice" => null,
                "old_names" => null,
                "founded" => 1980,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/ue-engordany.png"
            ],
            [
                "name" => "Shirak SC",
                "slug" => "shirak-sc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1958,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/shirak-sc.png"
            ],
            [
                "name" => "FC Pyunik",
                "slug" => "fc-pyunik",
                "notice" => null,
                "old_names" => null,
                "founded" => 1992,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-pyunik.png"
            ],
            [
                "name" => "FC Ararat Yerevan",
                "slug" => "fc-ararat-yerevan",
                "notice" => null,
                "old_names" => null,
                "founded" => 1935,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-ararat-yerevan.png"
            ],
            [
                "name" => "FC Yerevan",
                "slug" => "fc-yerevan",
                "notice" => null,
                "old_names" => null,
                "founded" => 1995,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-yerevan.png"
            ],
            [
                "name" => "Araks Ararat FC",
                "slug" => "araks-ararat-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1960,
                "destroyed" => 2005,
                "image" => "/uploads/football-clubs/araks-ararat-fc.png"
            ],
            [
                "name" => "Ulisses FC",
                "slug" => "ulisses-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 2000,
                "destroyed" => 2016,
                "image" => "/uploads/football-clubs/ulisses-fc.png"
            ],
            [
                "name" => "FC Urartu",
                "slug" => "fc-urartu",
                "notice" => null,
                "old_names" => null,
                "founded" => 1992,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-urartu.png"
            ],
            [
                "name" => "FC Alashkert",
                "slug" => "fc-alashkert",
                "notice" => null,
                "old_names" => null,
                "founded" => 1990,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-alashkert.png"
            ],
            [
                "name" => "FC Ararat-Armenia",
                "slug" => "fc-ararat-armenia",
                "notice" => null,
                "old_names" => null,
                "founded" => 2017,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-ararat-armenia.png"
            ],
            [
                "name" => "FC Kotayk",
                "slug" => "fc-kotayk",
                "notice" => null,
                "old_names" => null,
                "founded" => 1955,
                "destroyed" => 2005,
                "image" => "/uploads/football-clubs/fc-kotayk.jpeg"
            ],
            [
                "name" => "FC Mika",
                "slug" => "fc-mika",
                "notice" => null,
                "old_names" => null,
                "founded" => 1999,
                "destroyed" => 2016,
                "image" => "/uploads/football-clubs/fc-mika.png"
            ],
            [
                "name" => "Zvartnots-AAL FC",
                "slug" => "zvartnots-aal-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1997,
                "destroyed" => 2003,
                "image" => "/uploads/football-clubs/zvartnots-aal-fc.png"
            ],
            [
                "name" => "Kilikia FC",
                "slug" => "kilikia-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1992,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/kilikia-fc.png"
            ],
            [
                "name" => "Impuls FC",
                "slug" => "impuls-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1985,
                "destroyed" => 2013,
                "image" => "/uploads/football-clubs/impuls-fc.png"
            ],
            [
                "name" => "FC Gandzasar Kapan",
                "slug" => "fc-gandzasar-kapan",
                "notice" => null,
                "old_names" => null,
                "founded" => 2004,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-gandzasar-kapan.png"
            ],
            [
                "name" => "Lori FC",
                "slug" => "lori-fc",
                "notice" => null,
                "old_names" => null,
                "founded" => 1936,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/lori-fc.png"
            ],
            [
                "name" => "FC Noah",
                "slug" => "fc-noah",
                "notice" => null,
                "old_names" => null,
                "founded" => 2017,
                "destroyed" => null,
                "image" => "/uploads/football-clubs/fc-noah.png"
            ]
        ]);
    }
}
