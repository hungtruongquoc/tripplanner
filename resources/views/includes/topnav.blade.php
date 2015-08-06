<?php
/**
 * Created by PhpStorm.
 * User: Hung
 * Date: 7/26/15
 * Time: 5:26 PM
 */
$homeUrl = Config::get('app.url');
$menuItems = array(HTML::link(URL::action('TripsController@index'), trans('captions.menu_trips'), []),
        HTML::link(URL::action('AdminController@index'), trans('captions.menu_admin'), [])
);
$menuUl = HTML::ul($menuItems, array('id'=>'nav-normal', 'class'=>'left hide-on-med-and-down'));
$enUrl = URL::route('lang.switch', 'en');
$viUrl = URL::route('lang.switch', 'vi');
$languageUl =<<<HTML
<li><a href="{$enUrl}"><span class="tp-icon icon-United-Kingdom"></span></a><li>
<li><a href="{$viUrl}"><span class="tp-icon icon-Vietnam"></span></a><li>
HTML;
;
?>

<nav>
    <div class="nav-wrapper container">
        <a href="{!! $homeUrl !!}" class="brand-logo center">TripAll</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-normal-left" class="left hide-on-med-and-down">
            @foreach ($menuItems as $item)
                <li>{!! $item !!}</li>
            @endforeach
        </ul>
        <ul id="nav-normal-right" class="right hide-on-med-and-down">
            {!! $languageUl  !!}
        </ul>
        <ul id="nav-mobile" class="side-nav">
            @foreach ($menuItems as $item)
                <li>{!! $item !!}</li>
            @endforeach
        </ul>
    </div>
</nav>
