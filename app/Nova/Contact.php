<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Phobiavr\PhoberLaravelCommon\Enums\ContactTypeEnum;

class Contact extends Resource {
    public static $model = \App\Models\Contact::class;
    public static $search = ['type', 'value', 'customer_id'];
    public static $group = "CRM";

    public function title(): string {
        return $this->type . ' - ' . $this->value;
    }

    public function fields(Request $request): array {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Enum::make('Type', 'type')->attach(ContactTypeEnum::class),

            Text::make('Value')
                ->sortable(),

            HasOne::make('Customer', 'customer')->onlyOnDetail(),
        ];
    }

    public function filters(Request $request) {
        return [
            EnumFilter::make('type', ContactTypeEnum::class),
        ];
    }
}
