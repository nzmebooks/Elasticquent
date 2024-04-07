<?php

namespace Elasticquent;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        // elasticsearch v8.0 using builder
        if (class_exists('\Elastic\Elasticsearch\ClientBuilder')) {
            return \Elastic\Elasticsearch\ClientBuilder::fromConfig($config);
        }

        // elasticsearch v1
        return new \Elasticsearch\Client($config);
    }

}
