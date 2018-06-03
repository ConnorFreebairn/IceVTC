<?php

namespace App\Controller;

use App\Entity\TakenJob;
use App\Form\Type\TrackerCallbackType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackerCallback extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function callbackAction(Request $request)
    {
        $driverToken = $request->headers->get('X-UserPassword');

        $form = $this->createForm(
            TrackerCallbackType::class,
            null,
            [
                'allow_extra_fields' => true,
                'csrf_protection' => false,
            ]
        );

        if ($content = $request->getContent()) {
            $form->submit(json_decode($content, true));
        }

        if ($form->isSubmitted() && $form->isValid() && !empty($driverToken)) {
            $em = $this->get('doctrine.orm.entity_manager');

            $driverToken = base64_decode($driverToken);
            $data = $form->getData();
            $job = $data['Job'];
            $trailer = $data['Trailer'];
            $deadlineTime = $job['DeadlineTime'];

            $currentJob = $em->getRepository(TakenJob::class)->findOneBy([
                'deadlineTime' => $deadlineTime,
                'driverToken' => $driverToken,
            ]);

            if (!$currentJob) {
                $currentJob = new TakenJob();
            }

            $currentJob->setDriverToken($driverToken);

            $currentJob->setGame($data['Game']['GameName']);
            $currentJob->setCargo($trailer['Name']);
            $currentJob->setTrailerWear($trailer['Wear']);

            $currentJob->setEstimatedIncome($job['Income']);
            $currentJob->setDeadlineTime($deadlineTime);
            $currentJob->setPickupCity($job['SourceCity']);
            $currentJob->setPickupCompany($job['SourceCompany']);
            $currentJob->setDestinationCity($job['DestinationCity']);
            $currentJob->setDestinationCompany($job['DestinationCompany']);

            $em->persist($currentJob);
            $em->flush($currentJob);

            return new Response('', 204);
        }

        return new JsonResponse((string) $form->getErrors(), 400);
    }
}
