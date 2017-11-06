<?php

/**
 * @var KodiCMS\Assets\Contracts\MetaInterface $meta
 * @var KodiCMS\Assets\Contracts\PackageManagerInterface $packages
 *
 * @see http://sleepingowladmin.ru/docs/assets
 */


//$meta
//    ->css('custom', asset('custom.css'))
//    ->js('custom', asset('custom.js'), 'admin-default');

//$packages->add('jquery')
//    ->js(null, asset('libs/jquery.js'));

//Meta::addJs('custom',    asset('customjs/jquery.form.min.js'),'admin-default');

PackageManager::add('stopRefresh')
    ->js('tree',         asset('customjs/stopPageRefresh.js'), ['admin-default'], true);
PackageManager::add('jquery.add-input-area-master')
    ->js('jquery.add-input-area.js', asset('jquery.add-input-area-master/dist/jquery.add-input-area.js', ['admin-default']));
Meta::addJs('customs',    asset('/js/addfield.js'),'admin-default');
Meta::addJs('custom',    asset('/packages/sleepingowl/jquery.add-input-area-master/dist/jquery.add-input-area.js'),'admin-default');
