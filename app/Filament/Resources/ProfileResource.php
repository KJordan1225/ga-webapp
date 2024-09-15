<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lastname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('street1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('street2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->maxLength(255),
                Forms\Components\Select::make('state')
                ->options([
                    'AL' => 'AL',
                    'AK' => 'AK',
                    'AR' => 'AR',
                    'AZ' => 'AZ',
                    'CA' => 'CA',
                    'CO' => 'CO',
                    'CT' => 'CT',
                    'DC' => 'DC',
                    'DE' => 'DE',
                    'FL' => 'FL',
                    'GA' => 'GA',
                    'HI' => 'HI',
                    'IA' => 'IA',
                    'ID' => 'ID',
                    'IL' => 'IL',
                    'IN' => 'IN',
                    'KS' => 'KS',
                    'KY' => 'KY',
                    'LA' => 'LA',
                    'MA' => 'MA',
                    'MD' => 'MD',
                    'ME' => 'ME',
                    'MI' => 'MI',
                    'MN' => 'MN',
                    'MO' => 'MO',
                    'MS' => 'MS',
                    'MT' => 'MT',
                    'NC' => 'NC',
                    'NE' => 'NE',
                    'NH' => 'NH',
                    'NJ' => 'NJ',
                    'NM' => 'NM',
                    'NV' => 'NV',
                    'NY' => 'NY',
                    'ND' => 'ND',
                    'OH' => 'OH',
                    'OK' => 'OK',
                    'OR' => 'OR',
                    'PA' => 'PA',
                    'RI' => 'RI',
                    'SC' => 'SC',
                    'SD' => 'SD',
                    'TN' => 'TN',
                    'TX' => 'TX',
                    'UT' => 'UT',
                    'VT' => 'VT',
                    'VA' => 'VA',
                    'WA' => 'WA',
                    'WI' => 'WI',
                    'WV' => 'WV',
                    'WY' => 'WY',
                    ])
                    ->default('VA'),
                Forms\Components\TextInput::make('zip_code')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telephone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Select::make('telephone_type')
                    ->options([
                        'mobile' => 'Mobile',
                        'landline' => 'Landline'
                    ]),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dob')
                    ->maxLength(255),
                Forms\Components\TextInput::make('queversary')
                    ->maxLength(255),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('firstname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->searchable(),                
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'view' => Pages\ViewProfile::route('/{record}'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
