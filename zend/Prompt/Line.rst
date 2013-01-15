.. /Console/Prompt/Line.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Prompt\\Line
***************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$promptText = "Please enter value: ", [$allowEmpty = false, [$maxLength = 2048]]])


    Ask the user for an answer (a line of text)

    :param string $promptText: The prompt text to display in console
    :param bool $allowEmpty: Is empty response allowed?
    :param int $maxLength: Maximum response length



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





