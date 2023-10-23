<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitHumbugBox450
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HumbugBox450\\KevinGH\\RequirementChecker\\' => 40,
            'HumbugBox450\\Composer\\Semver\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HumbugBox450\\KevinGH\\RequirementChecker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'HumbugBox450\\Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'HumbugBox450\\Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'HumbugBox450\\Composer\\Semver\\CompilingMatcher' => __DIR__ . '/..' . '/composer/semver/src/CompilingMatcher.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\Bound' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Bound.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\MatchAllConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchAllConstraint.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\MatchNoneConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchNoneConstraint.php',
        'HumbugBox450\\Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'HumbugBox450\\Composer\\Semver\\Interval' => __DIR__ . '/..' . '/composer/semver/src/Interval.php',
        'HumbugBox450\\Composer\\Semver\\Intervals' => __DIR__ . '/..' . '/composer/semver/src/Intervals.php',
        'HumbugBox450\\Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'HumbugBox450\\Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\Checker' => __DIR__ . '/../..' . '/src/Checker.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\IO' => __DIR__ . '/../..' . '/src/IO.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\IsExtensionConflictFulfilled' => __DIR__ . '/../..' . '/src/IsExtensionConflictFulfilled.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\IsExtensionFulfilled' => __DIR__ . '/../..' . '/src/IsExtensionFulfilled.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\IsFulfilled' => __DIR__ . '/../..' . '/src/IsFulfilled.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\IsPhpVersionFulfilled' => __DIR__ . '/../..' . '/src/IsPhpVersionFulfilled.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\Printer' => __DIR__ . '/../..' . '/src/Printer.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\Requirement' => __DIR__ . '/../..' . '/src/Requirement.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\RequirementCollection' => __DIR__ . '/../..' . '/src/RequirementCollection.php',
        'HumbugBox450\\KevinGH\\RequirementChecker\\Terminal' => __DIR__ . '/../..' . '/src/Terminal.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitHumbugBox450::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitHumbugBox450::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitHumbugBox450::$classMap;

        }, null, ClassLoader::class);
    }
}
