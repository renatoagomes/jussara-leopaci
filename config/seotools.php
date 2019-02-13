<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Jussara Leopaci | Psicologia e Psicanálise', // set false to total remove
            'description'  => 'Atendimento em psicanálise. Neste espaço online, você encontra conteúdo produzido em torno da psicanálise e sobre mães, pais e bebês.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
            'Psicologia', 'psicanalise', 'atendimento', 'bauru', 'parentalidade', 'perinatalidade', 'maternidade', 'paternidade', 'bebê',
            ],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Jussara Leopaci | Psicologia e Psicanálise', // set false to total remove
            'description' => 'Atendimento em psicanálise. Neste espaço online, você encontra conteúdo produzido em torno da psicanálise e sobre mães, pais e bebês.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'Jussara Leopaci | Psicologia e Psicanálise',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
