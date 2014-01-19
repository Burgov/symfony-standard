<?php
namespace Acme\DemoBundle\Tests\Form;


use Symfony\Component\Form\Test\TypeTestCase;

class TransformationFailedExceptionTest extends TypeTestCase {
    public function testInvalidChoiceResultsInErrorForm()
    {
        $form = $this->factory->create('choice', null, array(
            'choices' => array('choice1' => 'option1')
        ));

        $form->submit('choice2');

        $this->assertFalse($form->isValid());
    }
} 