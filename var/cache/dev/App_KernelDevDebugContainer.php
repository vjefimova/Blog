<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDCC5GxU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDCC5GxU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDCC5GxU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDCC5GxU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDCC5GxU\App_KernelDevDebugContainer([
    'container.build_hash' => 'DCC5GxU',
    'container.build_id' => '3d732e60',
    'container.build_time' => 1620661669,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDCC5GxU');
