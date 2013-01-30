.. InputFilter/Input.php generated using docpx on 01/30/13 03:32am


Zend\\InputFilter\\Input
========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @var mixed



setAllowEmpty
-------------

.. function:: setAllowEmpty()


    @param  bool $allowEmpty

    :rtype: Input 



setBreakOnFailure
-----------------

.. function:: setBreakOnFailure()


    @param  bool $breakOnFailure

    :rtype: Input 



setErrorMessage
---------------

.. function:: setErrorMessage()


    @param  string|null $errorMessage

    :rtype: Input 



setFilterChain
--------------

.. function:: setFilterChain()


    @param  FilterChain $filterChain

    :rtype: Input 



setName
-------

.. function:: setName()


    @param  string $name

    :rtype: Input 



setRequired
-----------

.. function:: setRequired()


    @param  bool $required

    :rtype: Input 



setValidatorChain
-----------------

.. function:: setValidatorChain()


    @param  ValidatorChain $validatorChain

    :rtype: Input 



setValue
--------

.. function:: setValue()


    @param  mixed $value

    :rtype: Input 



setFallbackValue
----------------

.. function:: setFallbackValue()


    @param  mixed $value

    :rtype: Input 



allowEmpty
----------

.. function:: allowEmpty()


    @return bool



breakOnFailure
--------------

.. function:: breakOnFailure()


    @return bool



getErrorMessage
---------------

.. function:: getErrorMessage()


    @return string|null



getFilterChain
--------------

.. function:: getFilterChain()


    @return FilterChain



getName
-------

.. function:: getName()


    @return string



getRawValue
-----------

.. function:: getRawValue()


    @return mixed



isRequired
----------

.. function:: isRequired()


    @return bool



getValidatorChain
-----------------

.. function:: getValidatorChain()


    @return ValidatorChain



getValue
--------

.. function:: getValue()


    @return mixed



getFallbackValue
----------------

.. function:: getFallbackValue()


    @return mixed



merge
-----

.. function:: merge()


    @param  InputInterface $input

    :rtype: Input 



isValid
-------

.. function:: isValid()


    @param  mixed $context Extra "context" to provide the validator

    :rtype: bool 



getMessages
-----------

.. function:: getMessages()


    @return array



injectNotEmptyValidator
-----------------------

.. function:: injectNotEmptyValidator()


    @return void



