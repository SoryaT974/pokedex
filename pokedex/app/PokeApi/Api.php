<?php

namespace App\PokeApi;

use GuzzleHttp\Client;

class Api
{
    const IMAGE_BASE_URL = 'http://pokeapi.co/media/sprites/pokemon';
    const API_BASE_URL = 'https://pokeapi.co/api/v2';
    
    protected string $apiKey;
    protected Client $httpClient;
    
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client();
    }
    
    public function search(string $query, array $params = []): array
    {
        $query = [
            'api_key' => $this->apiKey,
            'query' => $query
        ];
        
        $query = array_merge($query, $params);
        $queryString = http_build_query($query);
        
        $response = $this->httpClient->request(
            'GET', 
            self::API_BASE_URL . '/{id}?' . $queryString
        );
        
        return json_decode($response->getBody(), true);
    }
    
    public function findPokemon(int $id): \stdClass
    {
        $queryString = http_build_query([
            'api_key' => $this->apiKey
        ]);
        
        $response = $this->httpClient->request(
            'GET',
            self::API_BASE_URL . '/movie/' . $id . '?' . $queryString
        );
        
        return json_decode($response->getBody());
    }
    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
    
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
    
    public function setHttpClient(Client $httpClient): void
    {
        $this->httpClient = $httpClient;
    }
}