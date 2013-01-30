.. ModuleManager/Feature/ConsoleBannerProviderInterface.php generated using docpx on 01/30/13 03:27pm


Function
********

Zend\\ModuleManager\\Feature\\getConsoleBanner
==============================================

.. function:: Zend\ModuleManager\Feature\getConsoleBanner()


    Returns a string containing a banner text, that describes the module and/or the application.
    The banner is shown in the console window, when the user supplies invalid command-line parameters or invokes
    the application with no parameters.
    
    The method is called with active Zend\Console\Adapter\AdapterInterface that can be used to directly access Console and send
    output.

    :param AdapterInterface: 

    :rtype: string|null 



