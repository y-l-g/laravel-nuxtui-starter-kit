<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('redirects unauthenticated users to the login page', function (): void {
    get(route('dashboard'))->assertRedirect(route('login'));
});
