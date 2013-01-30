.. Feed/PubSubHubbub/Publisher.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\PubSubHubbub\\Publisher
===================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor; accepts an array or Zend_Config instance to preset
    options for the Publisher without calling all supported setter
    methods in turn.

    :param array|Traversable: 



setOptions
++++++++++

.. function:: setOptions()


    Process any injected configuration options

    :param array|Traversable: Options array or Traversable object

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addHubUrl
+++++++++

.. function:: addHubUrl()


    Add a Hub Server URL supported by Publisher

    :param string: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addHubUrls
++++++++++

.. function:: addHubUrls()


    Add an array of Hub Server URLs supported by Publisher

    :param array: 

    :rtype: Publisher 



removeHubUrl
++++++++++++

.. function:: removeHubUrl()


    Remove a Hub Server URL

    :param string: 

    :rtype: Publisher 



getHubUrls
++++++++++

.. function:: getHubUrls()


    Return an array of unique Hub Server URLs currently available

    :rtype: array 



addUpdatedTopicUrl
++++++++++++++++++

.. function:: addUpdatedTopicUrl()


    Add a URL to a topic (Atom or RSS feed) which has been updated

    :param string: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



addUpdatedTopicUrls
+++++++++++++++++++

.. function:: addUpdatedTopicUrls()


    Add an array of Topic URLs which have been updated

    :param array: 

    :rtype: Publisher 



removeUpdatedTopicUrl
+++++++++++++++++++++

.. function:: removeUpdatedTopicUrl()


    Remove an updated topic URL

    :param string: 

    :rtype: Publisher 



getUpdatedTopicUrls
+++++++++++++++++++

.. function:: getUpdatedTopicUrls()


    Return an array of unique updated topic URLs currently available

    :rtype: array 



notifyHub
+++++++++

.. function:: notifyHub()


    Notifies a single Hub Server URL of changes

    :param string: The Hub Server's URL

    :rtype: void 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



notifyAll
+++++++++

.. function:: notifyAll()


    Notifies all Hub Server URLs of changes
    
    If a Hub notification fails, certain data will be retained in an
    an array retrieved using getErrors(), if a failure occurs for any Hubs
    the isSuccess() check will return FALSE. This method is designed not
    to needlessly fail with an Exception/Error unless from Zend_Http_Client.

    :rtype: void 

    :throws: Exception\RuntimeException 



setParameter
++++++++++++

.. function:: setParameter()


    Add an optional parameter to the update notification requests

    :param string: 
    :param string|null: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



setParameters
+++++++++++++

.. function:: setParameters()


    Add an optional parameter to the update notification requests

    :param array: 

    :rtype: Publisher 



removeParameter
+++++++++++++++

.. function:: removeParameter()


    Remove an optional parameter for the notification requests

    :param string: 

    :rtype: Publisher 

    :throws: Exception\InvalidArgumentException 



getParameters
+++++++++++++

.. function:: getParameters()


    Return an array of optional parameters for notification requests

    :rtype: array 



isSuccess
+++++++++

.. function:: isSuccess()


    Returns a boolean indicator of whether the notifications to Hub
    Servers were ALL successful. If even one failed, FALSE is returned.

    :rtype: bool 



getErrors
+++++++++

.. function:: getErrors()


    Return an array of errors met from any failures, including keys:
    'response' => the Zend_Http_Response object from the failure
    'hubUrl' => the URL of the Hub Server whose notification failed

    :rtype: array 



_getHttpClient
++++++++++++++

.. function:: _getHttpClient()


    Get a basic prepared HTTP client for use

    :rtype: \Zend\Http\Client 

    :throws: Exception\RuntimeException 



