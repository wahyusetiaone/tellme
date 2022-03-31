<?php


namespace Setone\TellMe;


use Illuminate\Support\Facades\Facade;

class TellMeFacade extends Facade {
    protected static function getFacadeAccessor() { return 'tellme'; }
}
