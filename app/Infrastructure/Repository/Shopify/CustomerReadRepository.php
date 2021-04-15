<?php
declare(strict_types=1);

namespace App\Infrastructure\Repository\Shopify;


use Psr\Http\Client\ClientInterface as HttpClientInterface;

class CustomerReadRepository implements \App\Domain\Repository\CustomerReadRepository
{
    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    public function __construct(
        HttpClientInterface $httpClient
    ) {
        $this->httpClient = $httpClient;
    }

    public function getAll(): array
    {

    }
}
