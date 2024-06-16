<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Custom Elasticsearch Client Configuration
    |--------------------------------------------------------------------------
    |
    | This array will be passed to the Elasticsearch client.
    | See configuration options here:
    |
    | http://www.elasticsearch.org/guide/en/elasticsearch/client/php-api/current/_configuration.html
    */

    'config' => [
        'Hosts'     => ['localhost:9200'],
        'BasicAuthentication' => [
          env('ELASTIC_USERNAME', 'elastic'),
          env('ELASTIC_PASSWORD', '')
        ],
        'SSLVerification' => false,
        'retries'   => 1,
    ],

);
