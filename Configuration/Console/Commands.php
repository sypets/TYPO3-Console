<?php
return [
    'controllers' => [
        \Helhum\Typo3Console\Command\HelpCommandController::class,
        \Helhum\Typo3Console\Command\CacheCommandController::class,
        \Helhum\Typo3Console\Command\BackendCommandController::class,
        \Helhum\Typo3Console\Command\SchedulerCommandController::class,
        \Helhum\Typo3Console\Command\CleanupCommandController::class,
        \Helhum\Typo3Console\Command\DocumentationCommandController::class,
        \Helhum\Typo3Console\Command\InstallCommandController::class,
        \Helhum\Typo3Console\Command\DatabaseCommandController::class,
        \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        \Helhum\Typo3Console\Command\FrontendCommandController::class,
        \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        \Helhum\Typo3Console\Command\UpgradeCommandController::class,
    ],
    'runLevels' => [
        'typo3_console:install:databasedata' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:install:defaultconfiguration' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:install:*' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'typo3_console:cache:flush' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'typo3_console:cache:flushcomplete' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:configuration:show' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_FULL,
        'typo3_console:configuration:showactive' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_FULL,
        'typo3_console:configuration:*' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:database:import' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:database:updateschema' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'typo3_console:extension:dumpautoload' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'typo3_console:upgrade:subprocess' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_FULL,
        'typo3_console:upgrade:*' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'bootingSteps' => [
        // @deprecated database step can be removed once TYPO3 8 support is removed
        'typo3_console:install:databasedata' => ['helhum.typo3console:database', 'helhum.typo3console:persistence'],
        'typo3_console:install:defaultconfiguration' => ['helhum.typo3console:database', 'helhum.typo3console:persistence'],
        'typo3_console:database:updateschema' => ['helhum.typo3console:database', 'helhum.typo3console:persistence'],
    ],
    'replace' => [
        'backend:backend:lock',
        'backend:backend:unlock',
        'backend:referenceindex:update',
        'extbase:_core_command',
        'extbase:_extbase_help',
        'extensionmanager:extension:dumpclassloadinginformation',
        'extensionmanager:extension:install',
        'extensionmanager:extension:uninstall',
        'help:error',
        'scheduler:scheduler:run',
    ],
];
