<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTq7ipux\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTq7ipux/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerTq7ipux.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerTq7ipux\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerTq7ipux\appProdProjectContainer([
    'container.build_hash' => 'Tq7ipux',
    'container.build_id' => '02c71b4a',
    'container.build_time' => 1602830202,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTq7ipux');
