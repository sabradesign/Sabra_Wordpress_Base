<?php

$remove_defaults_widgets = array(
    'dashboard_incoming_links' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_right_now' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_recent_drafts' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_plugins' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_primary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_quick_press' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_secondary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_recent_comments' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    )
);

$custom_dashboard_widgets = array(
    'me-quickactions-menu' => array(
        'title' => 'Quick Actions',
        'callback' => 'socrates_quickactions_menu'
    ),
    'me-dashboard-schedule' => array(
        'title' => 'Show Schedule',
        'callback' => 'socrates_dashboard_schedule'
    )
);

function socrates_quickactions_menu()
{
    $user = wp_get_current_user();
    echo '<p class="intro">Hello <strong>' . $user->user_firstname . '</strong>.  What would you like to do?</p>';
}

function socrates_dashboard_schedule()
{
    echo '<iframe onload="iFrameHeight()" id="blockrandom" name="iframe" src="http://pw.myersinfosys.com/mhz/hour" width="100%" height="1650" scrolling="auto" align="top" frameborder="0" class="wrapper">
This option will not work correctly. Unfortunately, your browser does not support inline frames.</iframe>';

}

?>