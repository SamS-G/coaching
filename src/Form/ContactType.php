<?php

    namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use function Sodium\add;

    class ContactType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('nom', TextType::class, [
                    'label' => 'Votre nom',
                ])
                ->add('email', EmailType::class, [
                    'label' => 'Votre Email'
                ])
                ->add('message', TextareaType::class, [
                    'label' => 'Votre message',
                    'attr' => ['rows' => 6],
                ]);
        }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                // Configure your form options here
            ]);
        }
    }
/*TODO composer require libsodium en prod */
