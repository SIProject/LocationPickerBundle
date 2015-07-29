<?php
/*
 * (c) Suhinin Ilja <iljasuhinin@gmail.com>
 */
namespace SIP\LocationPickerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationPickerType extends AbstractType
{
    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {        
        $view->vars['width'] = $options['width'];
        $view->vars['height'] = $options['height'];
        $view->vars['mapType'] = $options['mapType'];
        $view->vars['zoom'] = $options['zoom'];
        $view->vars['defaultLat'] = $options['defaultLat'];
        $view->vars['defaultLng'] = $options['defaultLng'];
        $view->vars['zIndex'] = $options['zIndex'];
        $view->vars['findButtonClass'] = $options['findButtonClass'];
        $view->vars['findButtonText'] = $options['findButtonText'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'width' => 600,
            'height' => 400,
            'mapType' => 'ROADMAP',
            'zoom' => 15,
            'defaultLat' => 55.753602,
            'defaultLng' => 37.622505,
            'zIndex' => 999,
            'findButtonClass' => 'picker-search-button',
            'findButtonText' => 'Поиск'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'text';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'location_picker';
    }
}
