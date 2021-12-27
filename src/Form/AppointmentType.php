<?php

    namespace App\Form;

    use App\Entity\Appointment;
    use App\Entity\Coach;
    use App\Entity\User;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Validator\Constraints\Length;
    use Symfony\Component\Validator\Constraints\NotBlank;
    use function Sodium\add;

    class AppointmentType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('firstname', TextType::class, [
                    'label' => 'Prénom',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ],
                ])
                ->add('lastname', TextType::class, [
                    'label' => 'Nom',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ],
                ])
                ->add('street', TextType::class, [
                    'label' => 'Rue',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ],
                ])
                ->add('zip_code', TextType::class, [
                    'label' => 'Code postal',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ]),
                        new Length(['min' => 5,
                            'minMessage' => 'Longueur de minimum {{ limit }} caractères',
                            'max' => 5,
                            'maxMessage' => 'Longueur de maximum {{ limit }} caractères'
                        ])
                    ],
                ])
                ->add('city', TextType::class, [
                    'label' => 'Ville',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ],
                ])
                ->add('email', EmailType::class, [
                    'label' => 'Adresse email',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ]
                ])
                ->add('phone', TextType::class, [
                    'label' => 'Numéro de téléphone',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ]),
                        new Length(['min' => 10,
                            'minMessage' => 'Longueur de minimum {{ limit }} caractères',
                            'max' => 10,
                            'maxMessage' => 'Longueur de maximum {{ limit }} caractères'
                        ])
                    ]
                ])
                ->add('start_time', DateTimeType::class, [
                    'label' => 'Date de début',
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr' => ['class' => 'js-datepicker'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Ce champ ne peut être vide'
                        ])
                    ],
                ])
                ->add('end_time', DateTimeType::class)
                ->add('location', TextType::class)
                ->add('nb_student', IntegerType::class)
                ->add('user_id', EntityType::class, [
                    'class' => User::class,
                    'choice_label' => 'lastname'
                ])
                ->add('coach_id', EntityType::class, [
                    'class' => Coach::class,
                    'choice_label' => 'lastname'
                ])
                ->add('save', SubmitType::class, [
                    'label' => 'Réserver',
                    'attr' => ['class' => 'btn btn-primary']
                ]);
        }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' => Appointment::class,
            ]);
        }
    }
