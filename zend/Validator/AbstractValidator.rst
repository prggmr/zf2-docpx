.. Validator/AbstractValidator.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\AbstractValidator
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Abstract constructor for all validators
    A validator should accept following parameters:
     - nothing f.e. Validator()
     - one or multiple scalar values f.e. Validator($first, $second, $third)
     - an array f.e. Validator(array($first => 'first', $second => 'second', $third => 'third'))
     - an instance of Traversable f.e. Validator($config_instance)

    :param array|Traversable: 



getOption
+++++++++

.. function:: getOption()


    Returns an option

    :param string: Option to be returned

    :rtype: mixed Returned option

    :throws: Exception\InvalidArgumentException 



getOptions
++++++++++

.. function:: getOptions()


    Returns all available options

    :rtype: array Array with all available options



setOptions
++++++++++

.. function:: setOptions()


    Sets one or multiple options

    :param array|Traversable: Options to set

    :throws Exception\InvalidArgumentException: If $options is not an array or Traversable

    :rtype: AbstractValidator Provides fluid interface



getMessages
+++++++++++

.. function:: getMessages()


    Returns array of validation failure messages

    :rtype: array 



__invoke
++++++++

.. function:: __invoke()


    Invoke as command

    :param mixed: 

    :rtype: bool 



getMessageVariables
+++++++++++++++++++

.. function:: getMessageVariables()


    Returns an array of the names of variables that are used in constructing validation failure messages

    :rtype: array 



getMessageTemplates
+++++++++++++++++++

.. function:: getMessageTemplates()


    Returns the message templates from the validator

    :rtype: array 



setMessage
++++++++++

.. function:: setMessage()


    Sets the validation failure message template for a particular key

    :param string: 
    :param string: OPTIONAL

    :rtype: AbstractValidator Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



setMessages
+++++++++++

.. function:: setMessages()


    Sets validation failure message templates given as an array, where the array keys are the message keys,
    and the array values are the message template strings.

    :param array: 

    :rtype: AbstractValidator 



__get
+++++

.. function:: __get()


    Magic function returns the value of the requested property, if and only if it is the value or a
    message variable.

    :param string: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



createMessage
+++++++++++++

.. function:: createMessage()


    Constructs and returns a validation failure message with the given message key and value.
    
    Returns null if and only if $messageKey does not correspond to an existing template.
    
    If a translator is available and a translation exists for $messageKey,
    the translation will be used.

    :param string: 
    :param string|array|object: 

    :rtype: string 



error
+++++

.. function:: error()


    @param  string $messageKey

    :param string: OPTIONAL

    :rtype: void 



getValue
++++++++

.. function:: getValue()


    Returns the validation value

    :rtype: mixed Value to be validated



setValue
++++++++

.. function:: setValue()


    Sets the value to be validated and clears the messages and errors arrays

    :param mixed: 

    :rtype: void 



setValueObscured
++++++++++++++++

.. function:: setValueObscured()


    Set flag indicating whether or not value should be obfuscated in messages

    :param bool: 

    :rtype: AbstractValidator 



isValueObscured
+++++++++++++++

.. function:: isValueObscured()


    Retrieve flag indicating whether or not value should be obfuscated in
    messages

    :rtype: bool 



setTranslator
+++++++++++++

.. function:: setTranslator()


    Set translation object

    :param Translator|null: 
    :param string: (optional)

    :rtype: AbstractValidator 

    :throws: Exception\InvalidArgumentException 



getTranslator
+++++++++++++

.. function:: getTranslator()


    Return translation object

    :rtype: Translator|null 



hasTranslator
+++++++++++++

.. function:: hasTranslator()


    Does this validator have its own specific translator?

    :rtype: bool 



setTranslatorTextDomain
+++++++++++++++++++++++

.. function:: setTranslatorTextDomain()


    Set translation text domain

    :param string: 

    :rtype: AbstractValidator 



getTranslatorTextDomain
+++++++++++++++++++++++

.. function:: getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



setDefaultTranslator
++++++++++++++++++++

.. function:: setDefaultTranslator()


    Set default translation object for all validate objects

    :param Translator|null: 
    :param string: (optional)

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



getDefaultTranslator
++++++++++++++++++++

.. function:: getDefaultTranslator()


    Get default translation object for all validate objects

    :rtype: Translator|null 



hasDefaultTranslator
++++++++++++++++++++

.. function:: hasDefaultTranslator()


    Is there a default translation object set?

    :rtype: bool 



setDefaultTranslatorTextDomain
++++++++++++++++++++++++++++++

.. function:: setDefaultTranslatorTextDomain()


    Set default translation text domain for all validate objects

    :param string: 

    :rtype: void 



getDefaultTranslatorTextDomain
++++++++++++++++++++++++++++++

.. function:: getDefaultTranslatorTextDomain()


    Get default translation text domain for all validate objects

    :rtype: string 



setTranslatorEnabled
++++++++++++++++++++

.. function:: setTranslatorEnabled()


    Indicate whether or not translation should be enabled

    :param bool: 

    :rtype: AbstractValidator 



isTranslatorEnabled
+++++++++++++++++++

.. function:: isTranslatorEnabled()


    Is translation enabled?

    :rtype: bool 



getMessageLength
++++++++++++++++

.. function:: getMessageLength()


    Returns the maximum allowed message length

    :rtype: integer 



setMessageLength
++++++++++++++++

.. function:: setMessageLength()


    Sets the maximum allowed message length

    :param integer: 



translateMessage
++++++++++++++++

.. function:: translateMessage()


    Translate a validation message

    :param string: 
    :param string: 

    :rtype: string 



