<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI3gtiNm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI3gtiNm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI3gtiNm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI3gtiNm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI3gtiNm\App_KernelDevDebugContainer([
    'container.build_hash' => 'I3gtiNm',
    'container.build_id' => 'bd494092',
    'container.build_time' => 1731935512,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI3gtiNm');
