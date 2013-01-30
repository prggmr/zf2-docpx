.. Validator/ValidatorChain.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\ValidatorChain
===============================

Methods
-------

count
+++++

.. function:: count()


    Return the count of attached validators

    :rtype: int 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get plugin manager instance

    :rtype: ValidatorPluginManager 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set plugin manager instance

    :param ValidatorPluginManager: Plugin manager

    :rtype: ValidatorChain 



plugin
++++++

.. function:: plugin()


    Retrieve a validator by name

    :param string: Name of validator to return
    :param null|array: Options to pass to validator constructor (if not already instantiated)

    :rtype: ValidatorInterface 



attach
++++++

.. function:: attach()


    Attach a validator to the end of the chain
    
    If $breakChainOnFailure is true, then if the validator fails, the next validator in the chain,
    if one exists, will not be executed.

    :param ValidatorInterface: 
    :param bool: 

    :rtype: ValidatorChain Provides a fluent interface



addValidator
++++++++++++

.. function:: addValidator()


    Proxy to attach() to keep BC


    :param ValidatorInterface: 
    :param boolean: 

    :rtype: ValidatorChain Provides a fluent interface



prependValidator
++++++++++++++++

.. function:: prependValidator()


    Adds a validator to the beginning of the chain
    
    If $breakChainOnFailure is true, then if the validator fails, the next validator in the chain,
    if one exists, will not be executed.

    :param ValidatorInterface: 
    :param bool: 

    :rtype: ValidatorChain Provides a fluent interface



attachByName
++++++++++++

.. function:: attachByName()


    Use the plugin manager to add a validator by name

    :param string: 
    :param array: 
    :param bool: 

    :rtype: ValidatorChain 



addByName
+++++++++

.. function:: addByName()


    Proxy to attachByName() to keep BC


    :param string: 
    :param array: 
    :param bool: 

    :rtype: ValidatorChain 



prependByName
+++++++++++++

.. function:: prependByName()


    Use the plugin manager to prepend a validator by name

    :param string: 
    :param array: 
    :param bool: 

    :rtype: ValidatorChain 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value passes all validations in the chain
    
    Validators are run in the order in which they were added to the chain (FIFO).

    :param mixed: 
    :param mixed: Extra "context" to provide the validator

    :rtype: bool 



merge
+++++

.. function:: merge()


    Merge the validator chain with the one given in parameter

    :param ValidatorChain: 

    :rtype: ValidatorChain 



getMessages
+++++++++++

.. function:: getMessages()


    Returns array of validation failure messages

    :rtype: array 



getValidators
+++++++++++++

.. function:: getValidators()


    Get all the validators

    :rtype: array 



__invoke
++++++++

.. function:: __invoke()


    Invoke chain as command

    :param mixed: 

    :rtype: bool 



__sleep
+++++++

.. function:: __sleep()


    Prepare validator chain for serialization
    
    Plugin manager (property 'plugins') cannot
    be serialized. On wakeup the property remains unset
    and next invokation to getPluginManager() sets
    the default plugin manager instance (ValidatorPluginManager).

    :rtype: array 



