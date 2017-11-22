<?php namespace Fusion\StoreLocator\Components;

use Cms\Classes\ComponentBase;
use config;

class Location extends ComponentBase
{
    /**collection of location based on submission
     * returns an @array
     */
    public $url;

    public function componentDetails()
    {
        return [
            'name'        => 'location Component',
            'description' => 'Store locations shown on map from the webservice result'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
      $this->url =  Config::get('fusion.storelocator::Url');     
    }
}