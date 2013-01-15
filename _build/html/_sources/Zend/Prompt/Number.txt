.. /Console/Prompt/Number.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Prompt\\Number
*****************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$promptText = "Please enter a number: ", [$allowEmpty = false, [$allowFloat = false, [$min = false, [$max = false]]]]])


    Ask the user for a number.

    :param string $promptText: The prompt text to display in console
    :param bool $allowEmpty: Is empty response allowed?
    :param bool $allowFloat: Are floating (non-decimal) numbers allowed?
    :param integer $min: Minimum value (inclusive)
    :param integer $max: Maximum value (inclusive)



show
----

.. function:: show()


    Show the prompt to user and return the answer.

    :rtype: mixed 



setAllowEmpty
-------------

.. function:: setAllowEmpty($allowEmpty)


    @param  bool $allowEmpty



getAllowEmpty
-------------

.. function:: getAllowEmpty()


    @return bool



setMaxLength
------------

.. function:: setMaxLength($maxLength)


    @param int $maxLength



getMaxLength
------------

.. function:: getMaxLength()


    @return int



setPromptText
-------------

.. function:: setPromptText($promptText)


    @param string $promptText



getPromptText
-------------

.. function:: getPromptText()


    @return string



setMax
------

.. function:: setMax($max)


    @param int $max



getMax
------

.. function:: getMax()


    @return int



setMin
------

.. function:: setMin($min)


    @param int $min



getMin
------

.. function:: getMin()


    @return int



setAllowFloat
-------------

.. function:: setAllowFloat($allowFloat)


    @param  bool $allowFloat



getAllowFloat
-------------

.. function:: getAllowFloat()


    @return bool





