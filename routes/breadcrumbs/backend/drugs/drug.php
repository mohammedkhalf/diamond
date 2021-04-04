<?php

Breadcrumbs::for('admin.drugs.index', function ($trail) {
    $trail->push(__('labels.backend.access.drugs.management'), route('admin.drugs.index'));
});

Breadcrumbs::for('admin.drugs.create', function ($trail) {
    $trail->parent('admin.drugs.index');
    $trail->push(__('labels.backend.access.drugs.management'), route('admin.drugs.create'));
});

Breadcrumbs::for('admin.drugs.edit', function ($trail, $id) {
    $trail->parent('admin.drugs.index');
    $trail->push(__('labels.backend.access.drugs.management'), route('admin.drugs.edit', $id));
});
