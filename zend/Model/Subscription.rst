.. Feed/PubSubHubbub/Model/Subscription.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\PubSubHubbub\\Model\\Subscription
=============================================

Methods
-------

setSubscription
+++++++++++++++

.. function:: setSubscription()


    Save subscription to RDMBS

    :param array: 

    :rtype: bool 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



getSubscription
+++++++++++++++

.. function:: getSubscription()


    Get subscription by ID/key

    :param string: 

    :rtype: array 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



hasSubscription
+++++++++++++++

.. function:: hasSubscription()


    Determine if a subscription matching the key exists

    :param string: 

    :rtype: bool 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



deleteSubscription
++++++++++++++++++

.. function:: deleteSubscription()


    Delete a subscription

    :param string: 

    :rtype: bool 



getNow
++++++

.. function:: getNow()


    Get a new DateTime or the one injected for testing

    :rtype: DateTime 



setNow
++++++

.. function:: setNow()


    Set a DateTime instance for assisting with unit testing

    :param DateTime: 

    :rtype: Subscription 



