<?php

    namespace App\Controller;

    use App\Form\ContactType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
    use Symfony\Component\Mailer\MailerInterface;
    use Symfony\Component\Mime\Email;
    use Symfony\Component\Routing\Annotation\Route;
    use const PHP_EOL;

    class ContactController extends AbstractController
    {
        /**
         * @throws TransportExceptionInterface
         */
        #[Route('/contact', name: 'app_contact')]
        public function index(Request $request, MailerInterface $mailer): Response
        {
            $form = $this->createForm(ContactType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $contactFormData = $form->getData();

                $message = (new Email())
                    ->from($contactFormData['email'])
                    ->to('amaltay@amaltaycoaching.com')
                    ->subject('Nouveau contact du site')
                    ->text('Sender : '
                        . $contactFormData['email'] . PHP_EOL . $contactFormData['message'], 'text/plain');
                $mailer->send($message);
                $this->addFlash('success', 'Votre message à bien été envoyé !');
                return $this->redirectToRoute('app_contact');
        }
            return $this->render('main/contact.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }
