<?php

namespace App\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Loader\NativeLoader;

class AppFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $fixturesDir = __DIR__ . "/fixtures/";
        $loader = new NativeLoader();
        $files = [
            $fixturesDir . "roles.yml",
            $fixturesDir . "heroes.yml",
        ];
        $objectSet = $loader->loadFiles($files);
        foreach ($objectSet->getObjects() as $item) {
            $manager->persist($item);
        }
        $manager->flush();
    }
}
