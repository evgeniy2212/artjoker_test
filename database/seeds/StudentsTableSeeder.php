<?php

use Illuminate\Database\Seeder;
use App\Models\Student as Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $students = [
                [
                    "surname"     => "Dare",
                    "name"   => "Koby",
                    "nationality" => "UK",
                    "email"       => "Astrid@salma.com",
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Dicki",
                    "name"   => "Kelli",
                    "nationality" => "UK",
                    "email"       => "Ivory@ashtyn.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Carter",
                    "name"   => "Golden",
                    "nationality" => "UK",
                    "email"       => "Ari@flo.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Koch",
                    "name"   => "Emory",
                    "nationality" => "UK",
                    "email"       => "Gene_Hilpert@laurie.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kilback",
                    "name"   => "Marjorie",
                    "nationality" => "Dominican Republic",
                    "email"       => "Antonia.Hauck@giuseppe.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hoeger",
                    "name"   => "Ernest",
                    "nationality" => "Panama",
                    "email"       => "Maritza_Mann@abelardo.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hudson",
                    "name"   => "Rebecca",
                    "nationality" => "Chile",
                    "email"       => "Reynold_Ferry@bennett.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hirthe",
                    "name"   => "Josefina",
                    "nationality" => "Kyrgyzstan",
                    "email"       => "Augustine@cassie.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Ebert",
                    "name"   => "Wanda",
                    "nationality" => "Palau",
                    "email"       => "Amina.Farrell@charlie.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Denesik",
                    "name"   => "Burnice",
                    "nationality" => "Kuwait",
                    "email"       => "Tyrese@don.ca"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Moen",
                    "name"   => "Harold",
                    "nationality" => "Vatican City",
                    "email"       => "Neil@merlin.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Spencer",
                    "name"   => "Brennon",
                    "nationality" => "Cambodia",
                    "email"       => "Alexandria@eva.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Ziemann",
                    "name"   => "Stanley",
                    "nationality" => "Azerbaijan",
                    "email"       => "Micaela@millie.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Rempel",
                    "name"   => "Forest",
                    "nationality" => "Seychelles",
                    "email"       => "Chyna_Nolan@elody.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Zboncak",
                    "name"   => "Gregory",
                    "nationality" => "Kazakhstan",
                    "email"       => "Annamae_Runte@soledad.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Weimann",
                    "name"   => "Valentine",
                    "nationality" => "Turks and Caicos Islands",
                    "email"       => "Jeromy_Blick@katrine.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Waelchi",
                    "name"   => "Alexandria",
                    "nationality" => "People's Democratic Republic of Yemen",
                    "email"       => "Everette_Torphy@halle.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Altenwerth",
                    "name"   => "Florian",
                    "nationality" => "Wake Island",
                    "email"       => "Adelbert.Ryan@francisca.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Zieme",
                    "name"   => "Faye",
                    "nationality" => "Guatemala",
                    "email"       => "Joannie.Brown@sigurd.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Beatty",
                    "name"   => "Raleigh",
                    "nationality" => "British Antarctic Territory",
                    "email"       => "Alessandra_Hayes@jamal.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kuhic",
                    "name"   => "Dolly",
                    "nationality" => "Paraguay",
                    "email"       => "Sonny@golda.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Koepp",
                    "name"   => "Mikel",
                    "nationality" => "Liberia",
                    "email"       => "Rosella@cruz.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Pfannerstill",
                    "name"   => "May",
                    "nationality" => "Puerto Rico",
                    "email"       => "Dave@carlee.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Douglas",
                    "name"   => "Otho",
                    "nationality" => "Denmark",
                    "email"       => "Walter@karley.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Conroy",
                    "name"   => "Napoleon",
                    "nationality" => "Afghanistan",
                    "email"       => "Charley.Orn@frances.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Doyle",
                    "name"   => "Elza",
                    "nationality" => "Liechtenstein",
                    "email"       => "Isobel@simone.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Schulist",
                    "name"   => "Maci",
                    "nationality" => "United States",
                    "email"       => "Reginald.Klein@keshawn.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hansen",
                    "name"   => "Kyler",
                    "nationality" => "Canada",
                    "email"       => "Lorine@rebeka.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Conn",
                    "name"   => "Jean",
                    "nationality" => "Kiribati",
                    "email"       => "Zackary.Dickinson@gonzalo.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Yost",
                    "name"   => "Reilly",
                    "nationality" => "South Africa",
                    "email"       => "Herman@avis.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Quigley",
                    "name"   => "Shad",
                    "nationality" => "Bhutan",
                    "email"       => "Roy@judah.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Quitzon",
                    "name"   => "Beatrice",
                    "nationality" => "Timor-Leste",
                    "email"       => "Jana@herta.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Langworth",
                    "name"   => "Lonny",
                    "nationality" => "New Zealand",
                    "email"       => "Sophia.Paucek@jamir.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kiehn",
                    "name"   => "Rosalinda",
                    "nationality" => "Dominican Republic",
                    "email"       => "Gia@nestor.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Parker",
                    "name"   => "Rebekah",
                    "nationality" => "Kyrgyzstan",
                    "email"       => "Faustino@shane.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kuhlman",
                    "name"   => "Rhoda",
                    "nationality" => "Gibraltar",
                    "email"       => "Roel@kianna.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Cruickshank",
                    "name"   => "Judd",
                    "nationality" => "Macau SAR China",
                    "email"       => "Bell@buddy.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Yundt",
                    "name"   => "Sarah",
                    "nationality" => "Papua New Guinea",
                    "email"       => "Marcia@noe.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Pacocha",
                    "name"   => "Russ",
                    "nationality" => "Greenland",
                    "email"       => "Shakira_Kessler@moriah.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Purdy",
                    "name"   => "Kali",
                    "nationality" => "Mauritania",
                    "email"       => "Ignatius@madison.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Block",
                    "name"   => "Janick",
                    "nationality" => "Belarus",
                    "email"       => "Lamont@david.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Waelchi",
                    "name"   => "Ford",
                    "nationality" => "Paraguay",
                    "email"       => "Marta.Grimes@malinda.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Batz",
                    "name"   => "Francesca",
                    "nationality" => "Netherlands Antilles",
                    "email"       => "Janie.Klocko@dallin.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Rogahn",
                    "name"   => "Lukas",
                    "nationality" => "Cape Verde",
                    "email"       => "Gage.Willms@ruben.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Funk",
                    "name"   => "Wilhelmine",
                    "nationality" => "Zimbabwe",
                    "email"       => "Daphne@darryl.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Nader",
                    "name"   => "Jude",
                    "nationality" => "Panama Canal Zone",
                    "email"       => "Payton@rupert.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Stroman",
                    "name"   => "Frankie",
                    "nationality" => "Saint Martin",
                    "email"       => "Saul@gia.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Jaskolski",
                    "name"   => "Mina",
                    "nationality" => "Bermuda",
                    "email"       => "Amos_Effertz@jennie.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Zieme",
                    "name"   => "Mack",
                    "nationality" => "Uzbekistan",
                    "email"       => "Martin@isabelle.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Tromp",
                    "name"   => "Celestine",
                    "nationality" => "Peru",
                    "email"       => "Loy@evalyn.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Nitzsche",
                    "name"   => "Zella",
                    "nationality" => "New Zealand",
                    "email"       => "Bridgette@gordon.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kuphal",
                    "name"   => "Ila",
                    "nationality" => "Maldives",
                    "email"       => "Terrance.Rowe@mario.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Cruickshank",
                    "name"   => "Eda",
                    "nationality" => "Jamaica",
                    "email"       => "Abelardo@elza.ca"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Koepp",
                    "name"   => "Jaylen",
                    "nationality" => "Monaco",
                    "email"       => "Norbert@kristian.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kohler",
                    "name"   => "Kristina",
                    "nationality" => "Russia",
                    "email"       => "Aidan@nona.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Ondricka",
                    "name"   => "Sean",
                    "nationality" => "Turks and Caicos Islands",
                    "email"       => "Kristin.Rolfson@madelyn.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Leuschke",
                    "name"   => "Estelle",
                    "nationality" => "Niue",
                    "email"       => "Chauncey.Hoeger@jeramie.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Funk",
                    "name"   => "Roselyn",
                    "nationality" => "Djibouti",
                    "email"       => "Korbin@hallie.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "name"   => "Kariane",
                    "nationality" => "Djibouti",
                    "email"       => "Jocelyn_Fadel@lauryn.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Nitzsche",
                    "name"   => "Adrian",
                    "nationality" => "Guernsey",
                    "email"       => "Markus.Gulgowski@nicolas.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Windler",
                    "name"   => "Maggie",
                    "nationality" => "Guernsey",
                    "email"       => "Shayna.Lesch@donny.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Blanda",
                    "name"   => "Ken",
                    "nationality" => "French Southern Territories",
                    "email"       => "Modesta_Aufderhar@belle.co.uk"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Reilly",
                    "name"   => "Antone",
                    "nationality" => "Yemen",
                    "email"       => "Ford@garfield.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Cassin",
                    "name"   => "Yadira",
                    "nationality" => "Mayotte",
                    "email"       => "Anastacio@murray.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Macejkovic",
                    "name"   => "Marge",
                    "nationality" => "Slovakia",
                    "email"       => "Retha@griffin.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Feest",
                    "name"   => "Rogers",
                    "nationality" => "Monaco",
                    "email"       => "Keshawn_Kuvalis@orlando.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Fadel",
                    "name"   => "Candelario",
                    "nationality" => "Belarus",
                    "email"       => "Kailee_Casper@reina.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Shields",
                    "name"   => "Eldridge",
                    "nationality" => "Neutral Zone",
                    "email"       => "Rachel_Block@olin.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "name"   => "Lavina",
                    "nationality" => "Canton and Enderbury Islands",
                    "email"       => "Cathrine@virgie.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hessel",
                    "name"   => "Matt",
                    "nationality" => "Czech Republic",
                    "email"       => "Skyla@gonzalo.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Donnelly",
                    "name"   => "Barrett",
                    "nationality" => "South Korea",
                    "email"       => "Sheila.Abshire@david.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Hagenes",
                    "name"   => "Betty",
                    "nationality" => "Samoa",
                    "email"       => "Linda@monte.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Schmeler",
                    "name"   => "Alphonso",
                    "nationality" => "Palau",
                    "email"       => "Raphael_Senger@vernon.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Shields",
                    "name"   => "Selmer",
                    "nationality" => "Samoa",
                    "email"       => "Michelle.Rice@pat.me"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kemmer",
                    "name"   => "Earl",
                    "nationality" => "Niger",
                    "email"       => "Terry.Rau@brennan.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kunde",
                    "name"   => "Sharon",
                    "nationality" => "French Guiana",
                    "email"       => "Julius@isabell.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Jacobs",
                    "name"   => "Jeffry",
                    "nationality" => "Albania",
                    "email"       => "Juliana.Stanton@magnolia.ca"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Ritchie",
                    "name"   => "Eliane",
                    "nationality" => "Chad",
                    "email"       => "Kaleigh.Durgan@verner.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Erdman",
                    "name"   => "Howard",
                    "nationality" => "Puerto Rico",
                    "email"       => "Arthur_Stroman@quinn.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Schimmel",
                    "name"   => "Lance",
                    "nationality" => "Serbia",
                    "email"       => "Dovie.Williamson@alycia.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Tillman",
                    "name"   => "Elliott",
                    "nationality" => "Botswana",
                    "email"       => "Bethel@jess.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Boyle",
                    "name"   => "Emanuel",
                    "nationality" => "Tokelau",
                    "email"       => "Claude@brent.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Feest",
                    "name"   => "Norma",
                    "nationality" => "Georgia",
                    "email"       => "Abdullah.Terry@leonardo.net"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "O'Conner",
                    "name"   => "Jenifer",
                    "nationality" => "Nepal",
                    "email"       => "Virgie@robert.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Towne",
                    "name"   => "Lilliana",
                    "nationality" => "New Caledonia",
                    "email"       => "Henri@breana.org"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Padberg",
                    "name"   => "Verner",
                    "nationality" => "Seychelles",
                    "email"       => "Florencio@barney.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Stiedemann",
                    "name"   => "Adelia",
                    "nationality" => "Greece",
                    "email"       => "Jessika.Nader@glennie.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Turcotte",
                    "name"   => "Tristin",
                    "nationality" => "Nauru",
                    "email"       => "Joyce_Jaskolski@emmalee.name"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Pouros",
                    "name"   => "Cooper",
                    "nationality" => "Micronesia",
                    "email"       => "Chase_Kub@emely.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Romaguera",
                    "name"   => "Judy",
                    "nationality" => "Australia",
                    "email"       => "Charlotte@earl.info"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Tremblay",
                    "name"   => "Maxie",
                    "nationality" => "French Guiana",
                    "email"       => "Annamae.Upton@roma.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Barrows",
                    "name"   => "Akeem",
                    "nationality" => "Mozambique",
                    "email"       => "Wellington@mara.ca"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Funk",
                    "name"   => "Florencio",
                    "nationality" => "Malawi",
                    "email"       => "Kenna@vicky.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Welch",
                    "name"   => "Margarita",
                    "nationality" => "Ethiopia",
                    "email"       => "Wellington_Cormier@novella.tv"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Legros",
                    "name"   => "Helmer",
                    "nationality" => "Antigua and Barbuda",
                    "email"       => "Ubaldo@bessie.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Labadie",
                    "name"   => "Carole",
                    "nationality" => "Martinique",
                    "email"       => "Josh@kelvin.io"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Klein",
                    "name"   => "Desiree",
                    "nationality" => "Nepal",
                    "email"       => "Isidro_Homenick@jerald.biz"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Kuvalis",
                    "name"   => "Eloy",
                    "nationality" => "Panama Canal Zone",
                    "email"       => "Annabelle_Okuneva@christelle.com"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Macejkovic",
                    "name"   => "Lucinda",
                    "nationality" => "Austria",
                    "email"       => "Ada_Wuckert@kirk.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ],
                [
                    "surname"     => "Bosco",
                    "name"   => "Emilia",
                    "nationality" => "São Tomé and Príncipe",
                    "email"       => "Yasmin@darwin.us"
                    ,
                    "student_address_id"  => rand(1, 88),
                    "course_id"   => rand(1, 199)
                ]
            ];

            foreach ($students as $student) {
                Student::create($student);
            }
        }
    }
}
