<?php

Breadcrumbs::for('admin.orders.index', function ($trail) {
    $trail->push(__('labels.backend.access.orders.management'), route('admin.orders.index'));
});

Breadcrumbs::for('admin.orders.create', function ($trail) {
    $trail->parent('admin.orders.index');
    $trail->push(__('labels.backend.access.orders.management'), route('admin.orders.create'));
});

Breadcrumbs::for('admin.orders.edit', function ($trail, $id) {
    $trail->parent('admin.orders.index');
    $trail->push(__('labels.backend.access.orders.management'), route('admin.orders.edit', $id));
});

Breadcrumbs::for('admin.orders.store', function ($trail) {
    $trail->push('Title Here', route('admin.orders.store'));
});
