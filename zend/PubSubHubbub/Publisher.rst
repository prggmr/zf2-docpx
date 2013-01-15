.. /Feed/PubSubHubbub/Publisher.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\Publisher
***********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor; accepts an array or Zend_Config instance to preset
    options for the Publisher without calling all supported setter
    methods in turn.

    :param array|Traversable $options: 



setOptions
----------

.. function:: setOptions($options)


    Process any injected configuration options

    :param array|Traversable $options: Options array or Traversable object

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addHubUrl
---------

.. function:: addHubUrl($url)


    Add a Hub Server URL supported by Publisher

    :param string $url: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addHubUrls
----------

.. function:: addHubUrls($urls)


    Add an array of Hub Server URLs supported by Publisher

    :param array $urls: 

    :rtype: Publisher 



removeHubUrl
------------

.. function:: removeHubUrl($url)


    Remove a Hub Server URL

    :param string $url: 

    :rtype: Publisher 



getHubUrls
----------

.. function:: getHubUrls()


    Return an array of unique Hub Server URLs currently available

    :rtype: array 



addUpdatedTopicUrl
------------------

.. function:: addUpdatedTopicUrl($url)


    Add a URL to a topic (Atom or RSS feed) which has been updated

    :param string $url: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addUpdatedTopicUrls
-------------------

.. function:: addUpdatedTopicUrls($urls)


    Add an array of Topic URLs which have been updated

    :param array $urls: 

    :rtype: Publisher 



removeUpdatedTopicUrl
---------------------

.. function:: removeUpdatedTopicUrl($url)


    Remove an updated topic URL

    :param string $url: 

    :rtype: Publisher 



getUpdatedTopicUrls
-------------------

.. function:: getUpdatedTopicUrls()


    Return an array of unique updated topic URLs currently available

    :rtype: array 



notifyHub
---------

.. function:: notifyHub($url)


    Notifies a single Hub Server URL of changes

    :param string $url: The Hub Server's URL

    :rtype: void 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



notifyAll
---------

.. function:: notifyAll()


    Notifies all Hub Server URLs of changes
    
    If a Hub notification fails, certain data will be retained in an
    an array retrieved using getErrors(), if a failure occurs for any Hubs
    the isSuccess() check will return FALSE. This method is designed not
    to needlessly fail with an Exception/Error unless from Zend_Http_Client.

    :rtype: void 

    :throws: Exception\RuntimeException 



setParameter
------------

.. function:: setParameter($name, [$value = false])


    Add an optional parameter to the update notification requests

    :param string $name: 
    :param string|null $value: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



setParameters
-------------

.. function:: setParameters($parameters)


    Add an optional parameter to the update notification requests

    :param array $parameters: 

    :rtype: Publisher 



removeParameter
---------------

.. function:: removeParameter($name)


    Remove an optional parameter for the notification requests

    :param string $name: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



getParameters
-------------

.. function:: getParameters()


    Return an array of optional parameters for notification requests

    :rtype: array 



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
    'response' => the Zend_Http_Response object from the failure
    'hubUrl' => the URL of the Hub Server whose notification failed

    :rtype: array 



_getHttpClient
--------------

.. function:: _getHttpClient()


    Get a basic prepared HTTP client for use

    :rtype: \Zend\Http\Client 

    :throws: Exception\RuntimeException 





