<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2YxM498\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2YxM498/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2YxM498.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2YxM498\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2YxM498\App_KernelDevDebugContainer([
    'container.build_hash' => '2YxM498',
    'container.build_id' => 'c0054f17',
    'container.build_time' => 1683123838,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2YxM498');
