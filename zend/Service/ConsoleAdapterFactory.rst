.. Mvc/Service/ConsoleAdapterFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Service\\ConsoleAdapterFactory
=========================================

Methods
-------

createService
+++++++++++++

.. function:: createService()


    Create and return a Console adapter instance.
    In case we're not in a Console environment, return a dummy stdClass object.
    
    In order to disable adapter auto-detection and use a specific adapter (and charset),
    add the following fields to application configuration, for example:
    
        'console' => array(
            'adapter' => 'MyConsoleAdapter',     // always use this console adapter
            'charset' => 'MyConsoleCharset',     // always use this console charset
         ),
         'service_manager' => array(
             'invocables' => array(
                 'MyConsoleAdapter' => 'Zend\Console\Adapter\Windows',
                 'MyConsoleCharset' => 'Zend\Console\Charset\DESCG',
             )
         )

    :param ServiceLocatorInterface: 

    :rtype: AdapterInterface|stdClass 



