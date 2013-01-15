.. /Feed/PubSubHubbub/Model/SubscriptionPersistenceInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\Model\\setSubscription
================================================

.. function:: Zend\Feed\PubSubHubbub\Model\setSubscription()


    Save subscription to RDMBS

    :param array $data: The key must be stored here as a $data['id'] entry

    :rtype: bool 



Zend\\Feed\\PubSubHubbub\\Model\\getSubscription
================================================

.. function:: Zend\Feed\PubSubHubbub\Model\getSubscription()


    Get subscription by ID/key

    :param string $key: 

    :rtype: array 



Zend\\Feed\\PubSubHubbub\\Model\\hasSubscription
================================================

.. function:: Zend\Feed\PubSubHubbub\Model\hasSubscription()


    Determine if a subscription matching the key exists

    :param string $key: 

    :rtype: bool 



Zend\\Feed\\PubSubHubbub\\Model\\deleteSubscription
===================================================

.. function:: Zend\Feed\PubSubHubbub\Model\deleteSubscription()


    Delete a subscription

    :param string $key: 

    :rtype: bool 



