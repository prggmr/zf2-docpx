.. Mvc/Controller/Plugin/FlashMessenger.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\FlashMessenger
=============================================

Flash Messenger - implement session-based messages

Methods
-------

setSessionManager
+++++++++++++++++

.. function:: setSessionManager()


    Set the session manager

    :param Manager: 

    :rtype: FlashMessenger 



getSessionManager
+++++++++++++++++

.. function:: getSessionManager()


    Retrieve the session manager
    
    If none composed, lazy-loads a SessionManager instance

    :rtype: Manager 



getContainer
++++++++++++

.. function:: getContainer()


    Get session container for flash messages

    :rtype: Container 



setNamespace
++++++++++++

.. function:: setNamespace()


    Change the namespace messages are added to
    
    Useful for per action controller messaging between requests

    :param string: 

    :rtype: FlashMessenger Provides a fluent interface



getNamespace
++++++++++++

.. function:: getNamespace()


    Get the message namespace

    :rtype: string 



addMessage
++++++++++

.. function:: addMessage()


    Add a message

    :param string: 

    :rtype: FlashMessenger Provides a fluent interface



addInfoMessage
++++++++++++++

.. function:: addInfoMessage()


    Add a message with "info" type

    :param string: 

    :rtype: FlashMessenger 



addSuccessMessage
+++++++++++++++++

.. function:: addSuccessMessage()


    Add a message with "success" type

    :param string: 

    :rtype: FlashMessenger 



addErrorMessage
+++++++++++++++

.. function:: addErrorMessage()


    Add a message with "error" type

    :param string: 

    :rtype: FlashMessenger 



hasMessages
+++++++++++

.. function:: hasMessages()


    Whether a specific namespace has messages

    :rtype: bool 



hasInfoMessages
+++++++++++++++

.. function:: hasInfoMessages()


    Whether "info" namespace has messages

    :rtype: boolean 



hasSuccessMessages
++++++++++++++++++

.. function:: hasSuccessMessages()


    Whether "success" namespace has messages

    :rtype: boolean 



hasErrorMessages
++++++++++++++++

.. function:: hasErrorMessages()


    Whether "error" namespace has messages

    :rtype: boolean 



getMessages
+++++++++++

.. function:: getMessages()


    Get messages from a specific namespace

    :rtype: array 



getInfoMessages
+++++++++++++++

.. function:: getInfoMessages()


    Get messages from "info" namespace

    :rtype: array 



getSuccessMessages
++++++++++++++++++

.. function:: getSuccessMessages()


    Get messages from "success" namespace

    :rtype: array 



getErrorMessages
++++++++++++++++

.. function:: getErrorMessages()


    Get messages from "error" namespace

    :rtype: array 



clearMessages
+++++++++++++

.. function:: clearMessages()


    Clear all messages from the previous request & current namespace

    :rtype: bool True if messages were cleared, false if none existed



clearMessagesFromNamespace
++++++++++++++++++++++++++

.. function:: clearMessagesFromNamespace()


    Clear all messages from specific namespace

    :rtype: boolean True if messages were cleared, false if none existed



clearMessagesFromContainer
++++++++++++++++++++++++++

.. function:: clearMessagesFromContainer()


    Clear all messages from the container

    :rtype: boolean True if messages were cleared, false if none existed



hasCurrentMessages
++++++++++++++++++

.. function:: hasCurrentMessages()


    Check to see if messages have been added to the current
    namespace within this request

    :rtype: bool 



hasCurrentInfoMessages
++++++++++++++++++++++

.. function:: hasCurrentInfoMessages()


    Check to see if messages have been added to "info"
    namespace within this request

    :rtype: boolean 



hasCurrentSuccessMessages
+++++++++++++++++++++++++

.. function:: hasCurrentSuccessMessages()


    Check to see if messages have been added to "success"
    namespace within this request

    :rtype: boolean 



hasCurrentErrorMessages
+++++++++++++++++++++++

.. function:: hasCurrentErrorMessages()


    Check to see if messages have been added to "error"
    namespace within this request

    :rtype: boolean 



getCurrentMessages
++++++++++++++++++

.. function:: getCurrentMessages()


    Get messages that have been added to the current
    namespace within this request

    :rtype: array 



getCurrentInfoMessages
++++++++++++++++++++++

.. function:: getCurrentInfoMessages()


    Get messages that have been added to the "info"
    namespace within this request

    :rtype: array 



getCurrentSuccessMessages
+++++++++++++++++++++++++

.. function:: getCurrentSuccessMessages()


    Get messages that have been added to the "success"
    namespace within this request

    :rtype: array 



getCurrentErrorMessages
+++++++++++++++++++++++

.. function:: getCurrentErrorMessages()


    Get messages that have been added to the "error"
    namespace within this request

    :rtype: array 



getCurrentMessagesFromNamespace
+++++++++++++++++++++++++++++++

.. function:: getCurrentMessagesFromNamespace()


    Get messages that have been added to the current
    namespace in specific namespace

    :rtype: array 



clearCurrentMessages
++++++++++++++++++++

.. function:: clearCurrentMessages()


    Clear messages from the current request and current namespace

    :rtype: bool 



clearCurrentMessagesFromNamespace
+++++++++++++++++++++++++++++++++

.. function:: clearCurrentMessagesFromNamespace()


    Clear messages from the current namespace

    :rtype: boolean 



clearCurrentMessagesFromContainer
+++++++++++++++++++++++++++++++++

.. function:: clearCurrentMessagesFromContainer()


    Clear messages from the container

    :rtype: boolean 



getIterator
+++++++++++

.. function:: getIterator()


    Complete the IteratorAggregate interface, for iterating

    :rtype: ArrayIterator 



count
+++++

.. function:: count()


    Complete the countable interface

    :rtype: int 



getMessagesFromNamespace
++++++++++++++++++++++++

.. function:: getMessagesFromNamespace()


    Get messages from a specific namespace

    :rtype: array 



getMessagesFromContainer
++++++++++++++++++++++++

.. function:: getMessagesFromContainer()


    Pull messages from the session container
    
    Iterates through the session container, removing messages into the local
    scope.

    :rtype: void 





Constants
---------

NAMESPACE_DEFAULT
+++++++++++++++++

Default messages namespace

NAMESPACE_SUCCESS
+++++++++++++++++

Success messages namespace

NAMESPACE_ERROR
+++++++++++++++

Error messages namespace

NAMESPACE_INFO
++++++++++++++

Info messages namespace

