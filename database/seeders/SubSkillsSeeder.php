<?php

namespace Database\Seeders;

use App\Models\SubSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subSkills = [
            ['name' => 'Recenser et identifier les ressources numériques', 'skill_id' => 1],
            ['name' => 'Exploiter des référentiels, normes et standards adoptés par le prestataire informatique', 'skill_id' => 1],
            ['name' => "Mettre en place et vérifier les niveaux d'habilitation associés à un service", 'skill_id' => 1],
            ['name' => "Vérifier les conditions de la continuité d'un service informatique", 'skill_id' => 1],
            ['name' => 'Gérer des sauvegardes', 'skill_id' => 1],
            ['name' => "Vérifier le respect des règles d'utilisation des ressources numériques", 'skill_id' => 1],

            ['name' => 'Collecter, suivre et orienter des demandes', 'skill_id' => 2],
            ['name' => 'Traiter des demandes concernant les services réseau  et système, applicatifs', 'skill_id' => 2],
            ['name' => 'Traiter des demandes concernant les applications', 'skill_id' => 2],

            ['name' => "Participer à la valorisation de l'image de l'organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques", 'skill_id' => 3],
            ['name' => "Référencer les services en ligne de l'organisation et mesurer leur visibilité", 'skill_id' => 3],
            ['name' => "Participer à l'évolution d'un site Web exploitant les données de l'organisation", 'skill_id' => 3],

            ['name' => "Analyser les objectifs et les modalités d'organisation d'un projet", 'skill_id' => 4],
            ['name' => 'Planifier les activités', 'skill_id' => 4],
            ['name' => "Évaluer les indicateurs de suivi d'un projet et analyse les écarts", 'skill_id' => 4],

            ['name' => "Réaliser les tests d'intégration et d'acceptation d'un service", 'skill_id' => 5],
            ['name' => 'Déployer un service', 'skill_id' => 5],
            ['name' => "Accompagner les utilisateurs dans la mise en place d'un service", 'skill_id' => 5],

            ['name' => "Mettre en place son environnement d'aprentissage personnel", 'skill_id' => 6],
            ['name' => 'Mettre en œuvre des outils et stratégies de veille informationnelle', 'skill_id' => 6],
            ['name' => 'Gérer son identitié professionnelle', 'skill_id' => 6],
            ['name' => 'Développer son projet professionnel', 'skill_id' => 6]
        ];

        SubSkill::insert($subSkills);
    }
}
