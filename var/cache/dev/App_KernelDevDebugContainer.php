<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5xIRd2G\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5xIRd2G/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5xIRd2G.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5xIRd2G\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5xIRd2G\App_KernelDevDebugContainer([
    'container.build_hash' => '5xIRd2G',
    'container.build_id' => '861be460',
    'container.build_time' => 1711449787,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container5xIRd2G');
