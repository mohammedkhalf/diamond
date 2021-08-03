<?php

Breadcrumbs::for('admin.calls.index', function ($trail) {
    $trail->push(__('labels.backend.access.calls.management'), route('admin.calls.index'));
});

Breadcrumbs::for('admin.calls.create', function ($trail) {
    $trail->parent('admin.calls.index');
    $trail->push(__('labels.backend.access.calls.management'), route('admin.calls.create'));
});

Breadcrumbs::for('admin.calls.edit', function ($trail, $id) {
    $trail->parent('admin.calls.index');
    $trail->push(__('labels.backend.access.calls.management'), route('admin.calls.edit', $id));
});
