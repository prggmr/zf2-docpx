.. Feed/PubSubHubbub/CallbackInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

Zend\\Feed\\PubSubHubbub\\handle
================================

.. function:: Zend\Feed\PubSubHubbub\handle()


    Handle any callback from a Hub Server responding to a subscription or
    unsubscription request. This should be the Hub Server confirming the
    the request prior to taking action on it.

    :param array: GET/POST data if available and not in $_GET/POST
    :param bool: Whether to send response now or when asked



Function
********

Zend\\Feed\\PubSubHubbub\\sendResponse
======================================

.. function:: Zend\Feed\PubSubHubbub\sendResponse()


    Send the response, including all headers.
    If you wish to handle this via Zend_Controller, use the getter methods
    to retrieve any data needed to be set on your HTTP Response object, or
    simply give this object the HTTP Response instance to work with for you!

    :rtype: void 



Function
********

Zend\\Feed\\PubSubHubbub\\setHttpResponse
=========================================

.. function:: Zend\Feed\PubSubHubbub\setHttpResponse()


    An instance of a class handling Http Responses. This is implemented in
    Zend_Feed_Pubsubhubbub_HttpResponse which shares an unenforced interface with
    (i.e. not inherited from) Zend_Controller_Response_Http.

    :param HttpResponse|\Zend\Http\PhpEnvironment\Response: 



Function
********

Zend\\Feed\\PubSubHubbub\\getHttpResponse
=========================================

.. function:: Zend\Feed\PubSubHubbub\getHttpResponse()


    An instance of a class handling Http Responses. This is implemented in
    Zend_Feed_Pubsubhubbub_HttpResponse which shares an unenforced interface with
    (i.e. not inherited from) Zend_Controller_Response_Http.

    :rtype: HttpResponse|\Zend\Http\PhpEnvironment\Response 



