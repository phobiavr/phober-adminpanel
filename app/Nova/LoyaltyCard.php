<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Phobiavr\PhoberLaravelCommon\Enums\LoyaltyCardStatusEnum;

class LoyaltyCard extends Resource {
    public static $model = \App\Models\LoyaltyCard::class;
    public static $title = 'code';
    public static $search = ['code'];
    public static $group = "CRM";

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }

    public function fields(Request $request): array {
        return [
            Text::make('Code')->sortable(),

            Select::make('Customer', 'id')
                ->options($this->customerSelectBoxOptions())
                ->rules('required')
                ->hideWhenCreating(function () use ($request) {
                    return ($request->viaResource === 'customers');
                })
                ->hideWhenUpdating()
                ->hideFromIndex()
                ->hideFromDetail(),

            Enum::make('Status', 'status')->attach(LoyaltyCardStatusEnum::class)->sortable(),

            BelongsTo::make('Customer')->hideWhenUpdating()->hideWhenCreating(),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }

    public function customerSelectBoxOptions() {
        return \App\Models\Customer::query()->select('first_name', 'last_name', 'id')
            ->doesntHave('loyaltyCard')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item['id'] => $item['first_name'] . ' ' . $item['last_name']];
            });
    }

    public function filters(Request $request): array {
        return [
            EnumFilter::make('status', LoyaltyCardStatusEnum::class),
        ];
    }
}
