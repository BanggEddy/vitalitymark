<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKSFxnRu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKSFxnRu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKSFxnRu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKSFxnRu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKSFxnRu\App_KernelDevDebugContainer([
    'container.build_hash' => 'KSFxnRu',
    'container.build_id' => '7329956c',
    'container.build_time' => 1710881620,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKSFxnRu');
