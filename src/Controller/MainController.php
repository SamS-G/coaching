<?php

    namespace App\Controller;

    use App\InstagramBasicDisplay\InstagramBasicDisplay;
    use App\InstagramBasicDisplay\InstagramBasicDisplayException;
    use App\Service\InstagramMediaUrlArray;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends AbstractController
    {
        /**
         * @param InstagramMediaUrlArray $insta
         * @return Response
         * @throws InstagramBasicDisplayException
         */
        #[Route('/', name: 'app_index')]
        public function index(InstagramMediaUrlArray $insta): Response
        {

            $data = new InstagramBasicDisplay('IGQVJXa0ZAhem1mbXcxMm55ZAHVLTlJWRFRDZAkpWbmJsdEN0a0ZAxRVJCaDJWOTBHY1gxNnY4aVhOcHBaTzJ5NEY5RFMwX2h5ckZAvTFJSVnIxUU5lMEtvQnlDVnV4bWdiQnIyRUdmWTJCVE9RMzZAyOG5fWAZDZD');

            return $this->render('main/index.html.twig', [
                'controller_name' => 'MainController',
                'data' => $insta->object_to_array($data->getUserMedia())
            ]);
        }
    }
    /*TODO méthodes pour le renouvellement automatique du token longue durée*/
    /*TODO configuration server pour affichage des iframes pour => permalink*/
