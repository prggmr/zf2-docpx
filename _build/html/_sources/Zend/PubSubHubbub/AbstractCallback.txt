.. /Feed/PubSubHubbub/AbstractCallback.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\AbstractCallback
******************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor; accepts an array or Traversable object to preset
    options for the Subscriber without calling all supported setter
    methods in turn.

    :param array|Traversable $options: Options array or Traversable object



setOptions
----------

.. function:: setOptions($options)


    Process any injected configuration options

    :param array|Traversable $options: Options array or Traversable object

    :rtype: AbstractCallback 

    :throws: Exception\InvalidArgumentException 



sendResponse
------------

.. function:: sendResponse()


    Send the response, including all headers.
    If you wish to handle this via Zend_Http, use the getter methods
    to retrieve any data needed to be set on your HTTP Response object, or
    simply give this object the HTTP Response instance to work with for you!

    :rtype: void 



setStorage
----------

.. function:: setStorage($storage)


    Sets an instance of Zend\Feed\Pubsubhubbub\Model\SubscriptionPersistence used
    to background save any verification tokens associated with a subscription
    or other.

    :param Model\SubscriptionPersistenceInterface $storage: 

    :rtype: AbstractCallback 



getStorage
----------

.. function:: getStorage()


    Gets an instance of Zend\Feed\Pubsubhubbub\Model\SubscriptionPersistence used
    to background save any verification tokens associated with a subscription
    or other.

    :rtype: Model\SubscriptionPersistenceInterface 

    :throws: Exception\RuntimeException 



setHttpResponse
---------------

.. function:: setHttpResponse($httpResponse)


    An instance of a class handling Http Responses. This is implemented in
    Zend\Feed\Pubsubhubbub\HttpResponse which shares an unenforced interface with
    (i.e. not inherited from) Zend\Controller\Response\Http.

    :param HttpResponse|PhpResponse $httpResponse: 

    :rtype: AbstractCallback 

    :throws: Exception\InvalidArgumentException 



getHttpResponse
---------------

.. function:: getHttpResponse()


    An instance of a class handling Http Responses. This is implemented in
    Zend\Feed\Pubsubhubbub\HttpResponse which shares an unenforced interface with
    (i.e. not inherited from) Zend\Controller\Response\Http.

    :rtype: HttpResponse|PhpResponse 



setSubscriberCount
------------------

.. function:: setSubscriberCount($count)


    Sets the number of Subscribers for which any updates are on behalf of.
    In other words, is this class serving one or more subscribers? How many?
    Defaults to 1 if left unchanged.

    :param string|int $count: 

    :rtype: AbstractCallback 

    :throws: Exception\InvalidArgumentException 



getSubscriberCount
------------------

.. function:: getSubscriberCount()


    Gets the number of Subscribers for which any updates are on behalf of.
    In other words, is this class serving one or more subscribers? How many?

    :rtype: int 



_detectCallbackUrl
------------------

.. function:: _detectCallbackUrl()


    Attempt to detect the callback URL (specifically the path forward)

    :rtype: string 



_getHttpHost
------------

.. function:: _getHttpHost()


    Get the HTTP host

    :rtype: string 



_getHeader
----------

.. function:: _getHeader($header)


    Retrieve a Header value from either $_SERVER or Apache

    :param string $header: 

    :rtype: bool|string 



_getRawBody
-----------

.. function:: _getRawBody()


    Return the raw body of the request

    :rtype: string|false Raw body, or false if not present





