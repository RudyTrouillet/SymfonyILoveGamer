<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDojBz9x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDojBz9x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDojBz9x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDojBz9x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDojBz9x\App_KernelDevDebugContainer([
    'container.build_hash' => 'DojBz9x',
    'container.build_id' => '6652f7c2',
    'container.build_time' => 1699525826,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDojBz9x');
