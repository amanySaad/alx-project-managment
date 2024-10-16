<?php

return [

    'projects' => [

        'affectations' => [

            'roles' => [

                'default' => 'collaborator',
                'can_manage' => 'administrator',

                'list' => [
                    'collaborator' => 'Collaborator',
                    'administrator' => 'Administrator'
                ],

                'colors' => [
                    'primary' => 'collaborator',
                    'danger' => 'administrator'
                ],

            ],

        ],

    ],
    // System constants
    'max_file_size' => 10240,

];
