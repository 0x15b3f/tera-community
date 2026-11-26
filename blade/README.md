# Tira: Blade views (Laravel + Livewire ready)

Plain views folder, no Laravel install. Copy `resources/`, `public/` and `routes/web.php` into a Laravel 12 + Livewire project.

- `components/layouts/app.blade.php` and `admin.blade.php`: layouts (`<x-layouts.app>`), with `@livewireStyles` / `@livewireScripts`.
- `components/partials/icons.blade.php`: SVG icon sprite. `ihead.blade.php`: inner page header.
- `pages/*.blade.php`: the 15 public screens. `admin/dashboard.blade.php`: admin dashboard.
- `livewire/`: put Livewire component views here.
- `public/css/app.css`, `public/images/logo-icon.svg`: assets.
- `routes/web.php`: `Route::view` for every screen.

Rendered output matches the original HTML pixel for pixel.
