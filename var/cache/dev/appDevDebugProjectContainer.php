<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBijyzwj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBijyzwj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBijyzwj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBijyzwj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBijyzwj\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Bijyzwj',
    'container.build_id' => '2d9536e4',
    'container.build_time' => 1520553561,
));
