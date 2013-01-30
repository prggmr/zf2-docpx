.. View/Helper/FlashMessenger.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\FlashMessenger
==================================

Helper to proxy the plugin flash messenger

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Returns the flash messenger plugin controller

    :rtype: FlashMessenger|FlashMessenger\Controller\Plugin\FlashMessenger 



__call
++++++

.. function:: __call()


    Proxy the flash messenger plugin controller

    :param string: 
    :param array: 

    :rtype: mixed 



render
++++++

.. function:: render()


    Render Messages

    :param string: 
    :param array: 

    :rtype: string 



setMessageCloseString
+++++++++++++++++++++

.. function:: setMessageCloseString()


    Set the string used to close message representation

    :param string: 

    :rtype: FlashMessenger 



getMessageCloseString
+++++++++++++++++++++

.. function:: getMessageCloseString()


    Get the string used to close message representation

    :rtype: string 



setMessageOpenFormat
++++++++++++++++++++

.. function:: setMessageOpenFormat()


    Set the formatted string used to open message representation

    :param string: 

    :rtype: FlashMessenger 



getMessageOpenFormat
++++++++++++++++++++

.. function:: getMessageOpenFormat()


    Get the formatted string used to open message representation

    :rtype: string 



setMessageSeparatorString
+++++++++++++++++++++++++

.. function:: setMessageSeparatorString()


    Set the string used to separate messages

    :param string: 

    :rtype: FlashMessenger 



getMessageSeparatorString
+++++++++++++++++++++++++

.. function:: getMessageSeparatorString()


    Get the string used to separate messages

    :rtype: string 



getEscapeHtmlHelper
+++++++++++++++++++

.. function:: getEscapeHtmlHelper()


    Retrieve the escapeHtml helper

    :rtype: EscapeHtml 



getPluginFlashMessenger
+++++++++++++++++++++++

.. function:: getPluginFlashMessenger()


    Get the flash messenger plugin

    :rtype: PluginFlashMessenger 



setPluginFlashMessenger
+++++++++++++++++++++++

.. function:: setPluginFlashMessenger()


    Set the flash messenger plugin

    :rtype: FlashMessenger 



setServiceLocator
+++++++++++++++++

.. function:: setServiceLocator()


    Set the service locator.

    :param ServiceLocatorInterface: 

    :rtype: AbstractHelper 



getServiceLocator
+++++++++++++++++

.. function:: getServiceLocator()


    Get the service locator.

    :rtype: ServiceLocatorInterface 



