<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3L9UHnp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3L9UHnp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3L9UHnp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3L9UHnp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3L9UHnp\App_KernelDevDebugContainer([
    'container.build_hash' => '3L9UHnp',
    'container.build_id' => '3cd09208',
    'container.build_time' => 1680248511,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3L9UHnp');