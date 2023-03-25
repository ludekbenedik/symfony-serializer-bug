<?php declare(strict_types = 1);

namespace App\Controller;

use App\Entity\SerializerBugExampleEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SerializerBugExampleController extends AbstractController
{
    #[Route('/', name: 'serializer_bug_example')]
    public function __invoke(SerializerInterface $serializer): JsonResponse
    {
        return new JsonResponse($serializer->serialize(new SerializerBugExampleEntity(), 'json'), 200, [], true);
    }
}
