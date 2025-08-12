<?php

namespace marcusvbda\GroqApiService\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use marcusvbda\GroqApiService\Settings\GroqApiServiceSettings;

class ManagerGroqApiServiceSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?int $navigationSort = 99;

    protected static string $settings = GroqApiServiceSettings::class;

    public static function getNavigationGroup(): ?string
    {
        return __('Groq API Service Settings');
    }

    public function getTitle(): string
    {
        return self::getNavigationLabel();
    }

    public static function getNavigationLabel(): string
    {
        return __('Groq API Service Settings');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('settings')->tabs([
                    Forms\Components\Tabs\Tab::make(__('General'))->schema([
                        Forms\Components\TextInput::make('settings.key')
                            ->label(__("key")),
                        Forms\Components\TextInput::make('settings.temperature')
                            ->type('number')
                            ->step('0.01')
                            ->min('0')
                            ->max('1')
                            ->required()
                            ->label(__("Temperature")),
                        Forms\Components\TextInput::make('settings.base_url')
                            ->url()
                            ->required()
                            ->label(__("Base URL")),
                        Forms\Components\Select::make('settings.model')
                            ->options([
                                'meta-llama/llama-4-maverick-17b-128e-instruct'
                            ])
                            ->required()
                            ->label(__("Base URL")),
                    ]),
                    Forms\Components\Tabs\Tab::make(__('Instructions'))->schema([
                        Forms\Components\Textarea::make('settings.initial_instructions')
                            ->label(__("Initial Instructions"))
                            ->rows(5),
                        Forms\Components\Textarea::make('settings.absolute_rules')
                            ->label(__("Absolute Rules"))
                            ->rows(5),
                        Forms\Components\Textarea::make('settings.expected_response_type')
                            ->label(__("Expected Response Type"))
                            ->rows(5),
                        Forms\Components\Textarea::make('settings.main_context')
                            ->label(__("Main Context"))
                            ->rows(5),
                    ]),
                ])
            ])->columns(1);
    }

    public static function canAccess(): bool
    {
        return true;
    }
}
