<?php

Breadcrumbs::for('admin.profiles.index', function ($trail) {
    $trail->push(__('labels.backend.access.profiles.management'), route('admin.profiles.index'));
});

Breadcrumbs::for('admin.profiles.create', function ($trail) {
    $trail->parent('admin.profiles.index');
    $trail->push(__('labels.backend.access.profiles.management'), route('admin.profiles.create'));
});

Breadcrumbs::for('admin.profiles.edit', function ($trail, $id) {
    $trail->parent('admin.profiles.index');
    $trail->push(__('labels.backend.access.profiles.management'), route('admin.profiles.edit', $id));
});

Breadcrumbs::for('admin.profiles.store', function ($trail) {
    $trail->push('Title Here', route('admin.profiles.store'));
});

Breadcrumbs::for('admin.profiles.show', function ($trail,$profile) {
    $trail->parent('admin.profiles.index');
    $trail->push(__('labels.backend.access.profiles.management'), route('admin.profiles.show', $profile));
});