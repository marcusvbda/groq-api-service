<?php

namespace marcusvbda\GroqApiService\Settings;

use Spatie\LaravelSettings\Settings;

class GroqApiServiceSettings extends Settings
{
    public string $initial_instructions;
    public string $absolute_rules;
    public string $expected_response_type;
    public string $main_context;
    public string $key;
    public float $temperature;
    public string $base_url;
    public string $model;

    public static function group(): string
    {
        return 'groq_api';
    }

    public static function defaults(): array
    {
        return [
            'initial_instructions' => '',
            'absolute_rules' => '',
            'expected_response_type' => '',
            'main_context' => '',
            'key' => '',
            'temperature' => 0.7,
            'base_url' => 'https://api.groq.com/openai/v1',
            'model' => 'meta-llama/llama-4-maverick-17b-128e-instruct',
        ];
    }
}
