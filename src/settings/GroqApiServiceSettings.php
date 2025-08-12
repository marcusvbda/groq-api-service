<?php

namespace marcusvbda\GroqApiService\Settings;

use Spatie\LaravelSettings\Settings;

class GroqApiServiceSettings extends Settings
{
    public array $settings;

    public static function group(): string
    {
        return 'groq_api';
    }

    public static function defaults(): array
    {
        return [
            'settings' => [
                'initial_instructions' => '',
                'absolute_rules' => '',
                'expected_response_type' => '',
                'main_context' => '',
                'key' => '',
                'temperature' => 0.7,
                'base_url' => 'https://api.groq.com/openai/v1',
                'model' => 'meta-llama/llama-4-maverick-17b-128e-instruct',
            ]
        ];
    }
}
