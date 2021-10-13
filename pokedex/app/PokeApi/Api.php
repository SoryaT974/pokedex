<?php

namespace App\PokeApi;

use GuzzleHttp\Client;

class Api
{
    const IMAGE_BASE_URL = 'http://pokeapi.co/media/sprites/pokemon';
    const API_BASE_URL = 'https://pokeapi.co/api/v2';
    
    protected Client $httpClient;
    
    public function __construct()
    {
        $this->httpClient = new Client();
    }
    
    public function search(string $query, array $params = []): array
    {
        $query = [
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
        ]);
        
        $response = $this->httpClient->request(
            'GET',
            self::API_BASE_URL . '/pokemon/' . $id . '?' . $queryString
        );
        
        return json_decode($response->getBody());
    }
    
    public function findAllPokemon(): array {
        $response = $this->httpClient->request(
            'GET',
            self::API_BASE_URL . '/pokemon'
        );
        
        return json_decode($response->getBody(), true);
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