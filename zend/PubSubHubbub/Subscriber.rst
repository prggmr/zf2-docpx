.. /Feed/PubSubHubbub/Subscriber.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\Subscriber
************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor; accepts an array or Traversable instance to preset
    options for the Subscriber without calling all supported setter
    methods in turn.

    :param array|Traversable $options: 



setOptions
----------

.. function:: setOptions($options)


    Process any injected configuration options

    :param array|Traversable $options: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



setTopicUrl
-----------

.. function:: setTopicUrl($url)


    Set the topic URL (RSS or Atom feed) to which the intended (un)subscribe
    event will relate

    :param string $url: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



getTopicUrl
-----------

.. function:: getTopicUrl()


    Set the topic URL (RSS or Atom feed) to which the intended (un)subscribe
    event will relate

    :rtype: string 

    :throws: Exception\RuntimeException 



setLeaseSeconds
---------------

.. function:: setLeaseSeconds($seconds)


    Set the number of seconds for which any subscription will remain valid

    :param int $seconds: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



getLeaseSeconds
---------------

.. function:: getLeaseSeconds()


    Get the number of lease seconds on subscriptions

    :rtype: int 



setCallbackUrl
--------------

.. function:: setCallbackUrl($url)


    Set the callback URL to be used by Hub Servers when communicating with
    this Subscriber

    :param string $url: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



getCallbackUrl
--------------

.. function:: getCallbackUrl()


    Get the callback URL to be used by Hub Servers when communicating with
    this Subscriber

    :rtype: string 

    :throws: Exception\RuntimeException 



setPreferredVerificationMode
----------------------------

.. function:: setPreferredVerificationMode($mode)


    Set preferred verification mode (sync or async). By default, this
    Subscriber prefers synchronous verification, but does support
    asynchronous if that's the Hub Server's utilised mode.
    
    Zend\Feed\Pubsubhubbub\Subscriber will always send both modes, whose
    order of occurrence in the parameter list determines this preference.

    :param string $mode: Should be 'sync' or 'async'

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



getPreferredVerificationMode
----------------------------

.. function:: getPreferredVerificationMode()


    Get preferred verification mode (sync or async).

    :rtype: string 



addHubUrl
---------

.. function:: addHubUrl($url)


    Add a Hub Server URL supported by Publisher

    :param string $url: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



addHubUrls
----------

.. function:: addHubUrls($urls)


    Add an array of Hub Server URLs supported by Publisher

    :param array $urls: 

    :rtype: Subscriber 



removeHubUrl
------------

.. function:: removeHubUrl($url)


    Remove a Hub Server URL

    :param string $url: 

    :rtype: Subscriber 



getHubUrls
----------

.. function:: getHubUrls()


    Return an array of unique Hub Server URLs currently available

    :rtype: array 



addAuthentication
-----------------

.. function:: addAuthentication($url, $authentication)


    Add authentication credentials for a given URL

    :param string $url: 
    :param array $authentication: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



addAuthentications
------------------

.. function:: addAuthentications($authentications)


    Add authentication credentials for hub URLs

    :param array $authentications: 

    :rtype: Subscriber 



getAuthentications
------------------

.. function:: getAuthentications()


    Get all hub URL authentication credentials

    :rtype: array 



usePathParameter
----------------

.. function:: usePathParameter([$bool = true])


    Set flag indicating whether or not to use a path parameter

    :param bool $bool: 

    :rtype: Subscriber 



setParameter
------------

.. function:: setParameter($name, [$value = false])


    Add an optional parameter to the (un)subscribe requests

    :param string $name: 
    :param string|null $value: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



setParameters
-------------

.. function:: setParameters($parameters)


    Add an optional parameter to the (un)subscribe requests

    :param array $parameters: 

    :rtype: Subscriber 



removeParameter
---------------

.. function:: removeParameter($name)


    Remove an optional parameter for the (un)subscribe requests

    :param string $name: 

    :rtype: Subscriber 

    :throws: Exception\InvalidArgumentException 



getParameters
-------------

.. function:: getParameters()


    Return an array of optional parameters for (un)subscribe requests

    :rtype: array 



setStorage
----------

.. function:: setStorage($storage)


    Sets an instance of Zend\Feed\Pubsubhubbub\Model\SubscriptionPersistence used to background
    save any verification tokens associated with a subscription or other.

    :param Model\SubscriptionPersistenceInterface $storage: 

    :rtype: Subscriber 



getStorage
----------

.. function:: getStorage()


    Gets an instance of Zend\Feed\Pubsubhubbub\Storage\StoragePersistence used
    to background save any verification tokens associated with a subscription
    or other.

    :rtype: Model\SubscriptionPersistenceInterface 

    :throws: Exception\RuntimeException 



subscribeAll
------------

.. function:: subscribeAll()


    Subscribe to one or more Hub Servers using the stored Hub URLs
    for the given Topic URL (RSS or Atom feed)

    :rtype: void 



unsubscribeAll
--------------

.. function:: unsubscribeAll()


    Unsubscribe from one or more Hub Servers using the stored Hub URLs
    for the given Topic URL (RSS or Atom feed)

    :rtype: void 



isSuccess
---------

.. function:: isSuccess()


    Returns a boolean indicator of whether the notifications to Hub
    Servers were ALL successful. If even one failed, FALSE is returned.

    :rtype: bool 



getErrors
---------

.. function:: getErrors()


    Return an array of errors met from any failures, including keys:
    'response' => the Zend\Http\Response object from the failure
    'hubUrl' => the URL of the Hub Server whose notification failed

    :rtype: array 



getAsyncHubs
------------

.. function:: getAsyncHubs()


    Return an array of Hub Server URLs who returned a response indicating
    operation in Asynchronous Verification Mode, i.e. they will not confirm
    any (un)subscription immediately but at a later time (Hubs may be
    doing this as a batch process when load balancing)

    :rtype: array 



_doRequest
----------

.. function:: _doRequest($mode)


    Executes an (un)subscribe request

    :param string $mode: 

    :rtype: void 

    :throws: Exception\RuntimeException 



_getHttpClient
--------------

.. function:: _getHttpClient()


    Get a basic prepared HTTP client for use

    :rtype: \Zend\Http\Client 



_getRequestParameters
---------------------

.. function:: _getRequestParameters($hubUrl, $mode)


    Return a list of standard protocol/optional parameters for addition to
    client's POST body that are specific to the current Hub Server URL

    :param string $hubUrl: 
    :param string $mode: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



_generateVerifyToken
--------------------

.. function:: _generateVerifyToken()


    Simple helper to generate a verification token used in (un)subscribe
    requests to a Hub Server. Follows no particular method, which means
    it might be improved/changed in future.

    :rtype: string 



_generateSubscriptionKey
------------------------

.. function:: _generateSubscriptionKey($params, $hubUrl)


    Simple helper to generate a verification token used in (un)subscribe
    requests to a Hub Server.

    :param array $params: 
    :param string $hubUrl: The Hub Server URL for which this token will apply

    :rtype: string 



_urlEncode
----------

.. function:: _urlEncode($params)


    URL Encode an array of parameters

    :param array $params: 

    :rtype: array 



_toByteValueOrderedString
-------------------------

.. function:: _toByteValueOrderedString($params)


    Order outgoing parameters

    :param array $params: 

    :rtype: array 



setTestStaticToken
------------------

.. function:: setTestStaticToken($token)


    This is STRICTLY for testing purposes only...





