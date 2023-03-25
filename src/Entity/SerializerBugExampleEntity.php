<?php declare(strict_types = 1);

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Ignore;

class SerializerBugExampleEntity
{
    public function getFoo(): int
    {
        return 1;
    }


    #[Ignore]
    public function getBar(): int
    {
        return 2;
    }


    private function isSomething(): bool
    {
        return true;
    }
}