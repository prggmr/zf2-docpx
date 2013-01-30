.. ModuleManager/Feature/ConsoleUsageProviderInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\ModuleManager\\Feature\\getConsoleUsage
=============================================

.. function:: Zend\ModuleManager\Feature\getConsoleUsage()


    Returns an array or a string containing usage information for this module's Console commands.
    The method is called with active Zend\Console\Adapter\AdapterInterface that can be used to directly access
    Console and send output.
    
    If the result is a string it will be shown directly in the console window.
    If the result is an array, its contents will be formatted to console window width. The array must
    have the following format:
    
        return array(
                   'Usage information line that should be shown as-is',
                   'Another line of usage info',
    
                   '--parameter'        =>   'A short description of that parameter',
                   '-another-parameter' =>   'A short description of another parameter',
                   ...
               )

    :param AdapterInterface: 

    :rtype: array|string|null 



