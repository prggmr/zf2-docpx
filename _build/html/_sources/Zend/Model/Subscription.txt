.. /Feed/PubSubHubbub/Model/Subscription.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\Model\\Subscription
*********************************************


@category   Zend



Methods
=======

setSubscription
---------------

.. function:: setSubscription($data)


    Save subscription to RDMBS

    :param array $data: 

    :rtype: bool 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



getSubscription
---------------

.. function:: getSubscription($key)


    Get subscription by ID/key

    :param string $key: 

    :rtype: array 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



hasSubscription
---------------

.. function:: hasSubscription($key)


    Determine if a subscription matching the key exists

    :param string $key: 

    :rtype: bool 

    :throws: PubSubHubbub\Exception\InvalidArgumentException 



deleteSubscription
------------------

.. function:: deleteSubscription($key)


    Delete a subscription

    :param string $key: 

    :rtype: bool 



getNow
------

.. function:: getNow()


    Get a new DateTime or the one injected for testing

    :rtype: DateTime 



setNow
------

.. function:: setNow($now)


    Set a DateTime instance for assisting with unit testing

    :param DateTime $now: 

    :rtype: Subscription 





