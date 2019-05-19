<?php

    return [
        /**
         * chemin mta3 el folder elli féha el markdown files
         */
        'folder_name'   =>  'artan/documentation/markdown',

        /**
         * information mécessaire bech ybénou fel home page mta3 el documentation
         */
        'introduction'  =>  [
            'app_name'      =>  env('APP_NAME'),
            'lead'          =>  'Lead text',
            'app_version'   =>  '1.0',
            'author'        =>  'App Author',
            'author_link'   =>  'https://author.com',
            'support'       =>  'Support',
            'support_link'  =>  'https://support.com',
            'license'       =>  'un license',
            'description'   =>  'Enter here your documentation summary',
        ],

        'requiremenet'  =>  [
            'description'   => 'requirement description',
            'requirements'  =>  [
                'requiremenet 1',
                'requiremenet 2',
                '...',
                'requiremenet n',
            ],
            'cautions'   => [
                'main_caution'  => 'Be careful while editing the template. If not edited properly, the design layout may break completely.',
                'secondary_cautions'    =>  [
                    'secondary caution 1',
                    'secondary caution 2',
                    '...',
                    'secondary caution x',
                ]
            ],
        ],
        'copyright' =>  [
            'copyright_text'    =>  'Copyright and license',
            'license_text'      =>  'my license',
            'license_link'      =>  'https://mylicense.com',
            'information'       =>  'For more information about copyright and license check',
            'information_link_text' =>  'choosealicense.com.',
            'information_link'       =>  'https://choosealicense.com',
        ],
    ];