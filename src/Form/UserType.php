<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 19/09/2018
 * Time: 11:35
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('email', EmailType::class,array('attr'=>['class'=>'form-control col-md-4 offset-4'],'label_attr'=>['class'=>'offset-4']))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe','attr'=>['class'=>'form-control col-md-4 offset-4'],'label_attr'=>['class'=>'offset-4']),
                'second_options' => array('label' => 'Confirmation du mot de passe','attr'=>['class'=>'form-control col-md-4 offset-4'],'label_attr'=>['class'=>'offset-4']),
            ))
            ->add('submit', SubmitType::class, ['label'=>'Envoyer', 'attr'=>['class'=>'btn-success btn-block col-md-4 offset-4']])
        ;
    }
}
