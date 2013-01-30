.. Feed/PubSubHubbub/PubSubHubbub.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\PubSubHubbub\\PubSubHubbub
======================================

Methods
-------

detectHubs
++++++++++

.. function:: detectHubs()


    Simple utility function which imports any feed URL and
    determines the existence of Hub Server endpoints. This works
    best if directly given an instance of Zend_Feed_Reader_Atom|Rss
    to leverage off.

    :param \Zend\Feed\Reader\Feed\AbstractFeed|string: 

    :rtype: array 

    :throws: Exception\InvalidArgumentException 



setHttpClient
+++++++++++++

.. function:: setHttpClient()


    Allows the external environment to make Zend_Oauth use a specific
    Client instance.

    :param Http\Client: 

    :rtype: void 



getHttpClient
+++++++++++++

.. function:: getHttpClient()


    Return the singleton instance of the HTTP Client. Note that
    the instance is reset and cleared of previous parameters GET/POST.
    Headers are NOT reset but handled by this component if applicable.

    :rtype: Http\Client 



clearHttpClient
+++++++++++++++

.. function:: clearHttpClient()


    Simple mechanism to delete the entire singleton HTTP Client instance
    which forces an new instantiation for subsequent requests.

    :rtype: void 



setEscaper
++++++++++

.. function:: setEscaper()


    Set the Escaper instance
    
    If null, resets the instance

    :param null|Escaper: 



getEscaper
++++++++++

.. function:: getEscaper()


    Get the Escaper instance
    
    If none registered, lazy-loads an instance.

    :rtype: Escaper 



urlencode
+++++++++

.. function:: urlencode()


    RFC 3986 safe url encoding method

    :param string: 

    :rtype: string 





Constants
---------

VERIFICATION_MODE_SYNC
++++++++++++++++++++++

Verification Modes

VERIFICATION_MODE_ASYNC
+++++++++++++++++++++++

SUBSCRIPTION_VERIFIED
+++++++++++++++++++++

Subscription States

SUBSCRIPTION_NOTVERIFIED
++++++++++++++++++++++++

SUBSCRIPTION_TODELETE
+++++++++++++++++++++

