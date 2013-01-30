.. Session/ValidatorChain.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Session\\ValidatorChain
=============================

Validator chain for validating sessions

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Construct the validation chain
    
    Retrieves validators from session storage and attaches them.

    :param Storage: 



attach
++++++

.. function:: attach()


    Attach a listener to the session validator chain

    :param string: 
    :param callable: 
    :param int: 

    :rtype: \Zend\Stdlib\CallbackHandler 



getStorage
++++++++++

.. function:: getStorage()


    Retrieve session storage object

    :rtype: Storage 



