# Filter components

Filter Components is a small package with some filter classes and blade components to extend and provide great [ Spatie query builder](https://github.com/spatie/laravel-query-builder) filter tools in Laravel.

Extends the Spatie Query Builder logic.

## Package installation

1. Install package to your project as a vendor package by composer

composer require petelashin/spatie-filter-components

2. Register a package service provider in your Laravel app

in config/app.php: 

`
'providers' => 
[
   ...
   PL\FilterComponents\FilterServiceProvider::class,
]`

## Usage

1. Add a filter component in blade template 

as example for field created_at: 

`<x-filter-date-range-field field="created_at" name="Created at">
</x-filter-date-range-field>`

2. Add filter in your query 

`AllowedFilter::custom('created_at', new DateRangeFilter, 'created_at')
`

## License

This package is open-sourced software licensed under the MIT license.

## Contact info

Please contact me through petelashin@gmail.com if you have any questions or suggestions. 
