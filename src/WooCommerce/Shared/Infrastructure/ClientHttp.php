<?php

namespace Automattic\WooCommerce\Shared\Infrastructure;

use Automattic\WooCommerce\Shared\Domain\ClientHttp as ClientHttpInterface;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use RuntimeException;
use Throwable;

class ClientHttp implements ClientHttpInterface
{
    private Client $client;

    public function __construct(string $uri, string $consumerKey, string $consumerSecret, array $headers = [])
    {
        if ($this->isSll($uri)) {
            $this->client = new Client(
                [
                    'base_uri' => $uri,
                    'user' => [$consumerKey, $consumerSecret],
                    'headers' => $headers,
                ]
            );
        }

        $stack = HandlerStack::create();
        $middleware = new Oauth1([
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
        ]);
        $stack->push($middleware);

        $this->client = new Client(
            [
                'base_uri' => $uri,
                'handler' => $stack,
                'auth' => 'oauth',
                'headers' => $headers,
            ]
        );
    }

    private function isSll($url): bool
    {
        $parsed_url = parse_url($url);

        return $parsed_url['scheme'] === 'https';
    }

    /**
     * @param string $url
     * @param array $query
     * @param string $body
     *
     * @return string
     */
    public function post(string $url, array $query, string $body): string
    {
        try {
            $response = $this->client->post($url, ['query' => $query, 'body' => $body,]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     *
     * @return string
     */
    public function get(string $url, array $query): string
    {
        try {
            $response = $this->client->get($url, ['query' => $query]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     * @param string $body
     *
     * @return string
     */
    public function put(string $url, array $query, string $body): string
    {
        try {
            $response = $this->client->put($url, [
                'query' => $query,
                'body' => $body,
            ]);

            return $response->getBody()->getContents();
        } catch (Throwable $exception) {
            throw new RuntimeException($exception->getMessage());
        }
    }

    /**
     * @param string $url
     * @param array $query
     *
     * @return bool
     */
    public function delete(string $url, array $query): bool
    {
        try {
            $this->client->delete($url, ['query' => $query]);
        } catch (Throwable) {
            return false;
        }

        return true;
    }
}
