<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP6jfcVz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP6jfcVz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP6jfcVz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP6jfcVz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP6jfcVz\App_KernelDevDebugContainer([
    'container.build_hash' => 'P6jfcVz',
    'container.build_id' => 'f2882bd1',
    'container.build_time' => 1685001430,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP6jfcVz');
