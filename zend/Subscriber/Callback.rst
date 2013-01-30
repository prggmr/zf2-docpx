.. Feed/PubSubHubbub/Subscriber/Callback.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\PubSubHubbub\\Subscriber\\Callback
==============================================

Methods
-------

setSubscriptionKey
++++++++++++++++++

.. function:: setSubscriptionKey()


    Set a subscription key to use for the current callback request manually.
    Required if usePathParameter is enabled for the Subscriber.

    :param string: 

    :rtype: \Zend\Feed\PubSubHubbub\Subscriber\Callback 



handle
++++++

.. function:: handle()


    Handle any callback from a Hub Server responding to a subscription or
    unsubscription request. This should be the Hub Server confirming the
    the request prior to taking action on it.

    :param array: GET data if available and not in $_GET
    :param bool: Whether to send response now or when asked

    :rtype: void 



isValidHubVerification
++++++++++++++++++++++

.. function:: isValidHubVerification()


    Checks validity of the request simply by making a quick pass and
    confirming the presence of all REQUIRED parameters.

    :param array: 

    :rtype: bool 



setFeedUpdate
+++++++++++++

.. function:: setFeedUpdate()


    Sets a newly received feed (Atom/RSS) sent by a Hub as an update to a
    Topic we've subscribed to.

    :param string: 

    :rtype: \Zend\Feed\PubSubHubbub\Subscriber\Callback 



hasFeedUpdate
+++++++++++++

.. function:: hasFeedUpdate()


    Check if any newly received feed (Atom/RSS) update was received

    :rtype: bool 



getFeedUpdate
+++++++++++++

.. function:: getFeedUpdate()


    Gets a newly received feed (Atom/RSS) sent by a Hub as an update to a
    Topic we've subscribed to.

    :rtype: string 



_hasValidVerifyToken
++++++++++++++++++++

.. function:: _hasValidVerifyToken()


    Check for a valid verify_token. By default attempts to compare values
    with that sent from Hub, otherwise merely ascertains its existence.

    :param array: 
    :param bool: 

    :rtype: bool 



_detectVerifyTokenKey
+++++++++++++++++++++

.. function:: _detectVerifyTokenKey()


    Attempt to detect the verification token key. This would be passed in
    the Callback URL (which we are handling with this class!) as a URI
    path part (the last part by convention).

    :param null|array: 

    :rtype: false|string 



_parseQueryString
+++++++++++++++++

.. function:: _parseQueryString()


    Build an array of Query String parameters.
    This bypasses $_GET which munges parameter names and cannot accept
    multiple parameters with the same key.

    :rtype: array|void 



