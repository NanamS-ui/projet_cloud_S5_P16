<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAqD86ZB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAqD86ZB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAqD86ZB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAqD86ZB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAqD86ZB\App_KernelDevDebugContainer([
    'container.build_hash' => 'AqD86ZB',
    'container.build_id' => '710711a5',
    'container.build_time' => 1734435750,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAqD86ZB');
