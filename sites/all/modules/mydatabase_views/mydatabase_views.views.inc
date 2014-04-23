<?php

/**
 * Implementation of hook_views_data
 */

function  mydatabase_views_views_data() {
    error_log("Loading views");
    $data['records']['table']['group'] = t('Arduino Data');
    $data['records']['table']['base'] = array(
        'field' => 'pid',
        'title' => t('arduino'),
        'help' => t('Autoincremented ID field, to enable views integration'),
        'database' => 'busrecords',
        'weight' => -10,
    );

 $data['records']['idUser'] = array(
        'title' => t('idUser Input Value'),
        'help' => t('idUser Input Value'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'views_handler_filter_string',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );   

 $data['records']['idRecord'] = array(
        'title' => t('idRecord Input Value'),
        'help' => t('idRecord Input Value'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'views_handler_filter_string',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    $data['records']['idStation'] = array(
        'title' => t('idStation'),
        'help' => t('idStation'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'views_handler_filter_string',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    $data['records']['nameStation'] = array(
        'title' => t('nameStation'),
        'help' => t('nameStation'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'date_views_filter_handler',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    $data['records']['timeStart'] = array(
        'title' => t('timeStart'),
        'help' => t('timeStart'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'views_handler_filter_string',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );
    $data['records']['timeStop'] = array(
        'title' => t('timeStop'),
        'help' => t('timeStop'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'date_views_filter_handler',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    $data['records']['longitude'] = array(
        'title' => t('longitude'),
        'help' => t('longitude'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'date_views_filter_handler',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    $data['records']['latitude'] = array(
        'title' => t('latitude'),
        'help' => t('latitude'),
        'field' => array(
            'handler' => 'views_handler_field',
            ' click sortable' => TRUE,
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'filter' => array(
            'handler' => 'date_views_filter_handler',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_string',
        ),
    );

    return $data;

}
