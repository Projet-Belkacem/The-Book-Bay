<?php

use App\Ouvrage;
use App\Theme;
use Illuminate\Database\Seeder;

class OuvragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                "libelle" => "Fantastique",
                "description" => "Un roman est de genre Fantastique quand il relate des événements totalement étranges, le plus souvent irrationnels ou incompréhensibles, hors d'atteinte de la puissance humaine ou de l'explication rationnelle (apparition de doubles, de fantômes, de spectres ou de revenants ; labyrinthes étranges ; rêves ou prémonitions ; réincarnation ; événements maléfiques inexpliqués ou apparition de démons ; apparition d'anges ou d'anges gardien ; objets usuellement inertes mais devenus vivants, etc).",
            ], [
                "libelle" => "Science-fiction",
                "description" => "Un roman est qualifié de Science-fiction lorsque le récit fait état d'événements ancrés dans la réalité et issus d'une rationalité scientifique identifiable et réalisable à très long terme (robots-cyborgs-androïdes, rencontre d'extraterrestres, clonage, voyages stellaires, voyages dans le temps, etc).",
            ], [
                "libelle" => "Fantasy",
                "description" => "Un roman relève de la Fantasy lorsque le récit concerne des événements qui ne sont pas issus d'une rationalité sociale et factuelle actuellement identifiable et qui ne mettent pas en exergue des aspects scientifiques explicites ou implicites ; la Fantasy décrit un monde de fiction peuplé de personnages étranges dotés de certains pouvoirs (sortilèges, sorciers-sorcières, magiciens-magiciennes, gobelins, elfes, dragons, licornes, loups-garou, etc)."
            ],
            [
                "libelle" => "Western",
                "description" => "Les rébellions et les soulèvements mineurs étaient des événements assez courants dans tout l’Empire. Les tribus conquises ou les villes opprimées se révolteraient, et les légions seraient détachées pour écraser la rébellion. Bien que ce processus soit simple en temps de paix, il pourrait être considérablement plus compliqué en temps de guerre."
            ],
        ];
        foreach ($themes as $key => $value)
            Theme::create($value)->save();

        $ouvrages = [
            [
                "titre" => "Harry Potter et les reliques de la mort",
                "prix" => 80,
                "auteur" => "J.K Rowling",
                "description" => "Sans les conseils et la protection de leurs professeurs, Harry, Ron et Hermione ont pour mission de détruire les horcruxes, les origines de l'immortalité de Voldemort. Bien que plus que jamais ils doivent compter l'un sur l'autre, les forces du mal menacent de les désunir.",
                "chemin_photo_couverture" => "uploads/images/ouvrages/sample_harry_potter.jpeg",
                "quantite_actuelle" => 56,
                "theme_id" => 3
            ], [
                "titre" => "Le livre de la jungle",
                "prix" => 99.49,
                "auteur" => "Rudyard Kipling",
                "description" => "La panthère Baghéera découvre dans la jungle un jeune enfant abandonné. Elle décide de le confier à une famille de loups qui l'élève comme un louveteau. Alors que Mowgli a 10 ans, le tigre Shere Kahn approche du territoire des loups",
                "chemin_photo_couverture" => "uploads/images/ouvrages/sample_livre_jungle.jpeg",
                "quantite_actuelle" => 99,
                "theme_id" => 1
            ], [
                "titre" => "Indiana Jones",
                "prix" => 126.99,
                "auteur" => "Henry Jones Senior",
                "description" => "Henry Walton Jones Jr., alias Indiana Jones est un personnage de fiction, aventurier et professeur d'archéologie, créé par George Lucas. Incarné par l'acteur Harrison Ford, il apparaît pour la première fois dans le film Les Aventuriers de l'arche perdue réalisé par Steven Spielberg",
                "chemin_photo_couverture" => "uploads/images/ouvrages/sample_indiana_jones.jpeg",
                "quantite_actuelle" => 12,
                "theme_id" => 4
            ]
        ];
        foreach ($ouvrages as $key => $value)
            Ouvrage::create($value)->save();
    }
}
