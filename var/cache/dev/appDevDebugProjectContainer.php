<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB8tog8y\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB8tog8y/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerB8tog8y.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerB8tog8y\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerB8tog8y\appDevDebugProjectContainer([
    'container.build_hash' => 'B8tog8y',
    'container.build_id' => 'd6500d2e',
    'container.build_time' => 1692293944,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB8tog8y');
