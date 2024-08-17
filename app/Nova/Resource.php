<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource as NovaResource;

abstract class Resource extends NovaResource {
    /**
     * Get the full table name
     *
     * @return string
     */
    protected function getTable(): string {
        return "{$this->model()->getConnectionName()}.{$this->model()->getTable()}";
    }

    protected static function filterByBelongsTo($label, $field, $class, $classId = 'id', $className = 'name'): Filter {
        return new class($label, $field, $class, $classId, $className) extends Filter
        {
            public $name;
            public $component = 'select-filter';
            protected $field;
            protected $class;
            protected $classId;
            protected $className;

            public function __construct($name, $field, $class, $classId, $className)
            {
                $this->name = $name;
                $this->field = $field;
                $this->class = $class;
                $this->classId = $classId;
                $this->className = $className;
            }

            public function apply(Request $request, $query, $value)
            {
                return $query->where($this->field, $value);
            }

            public function options(Request $request)
            {
                return $this->class::pluck($this->classId, $this->className)->toArray();
            }
        };
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param NovaRequest $request
     * @param Builder $query
     * @return Builder
     */
    public static function indexQuery(NovaRequest $request, $query) {
        return $query;
    }

    /**
     * Build a Scout search query for the given resource.
     *
     * @param NovaRequest $request
     * @param \Laravel\Scout\Builder $query
     * @return \Laravel\Scout\Builder
     */
    public static function scoutQuery(NovaRequest $request, $query) {
        return $query;
    }

    /**
     * Build a "detail" query for the given resource.
     *
     * @param NovaRequest $request
     * @param Builder $query
     * @return Builder
     */
    public static function detailQuery(NovaRequest $request, $query) {
        return parent::detailQuery($request, $query);
    }

    /**
     * Build a "relatable" query for the given resource.
     *
     * This query determines which instances of the model may be attached to other resources.
     *
     * @param NovaRequest $request
     * @param Builder $query
     * @return Builder
     */
    public static function relatableQuery(NovaRequest $request, $query) {
        return parent::relatableQuery($request, $query);
    }
}
