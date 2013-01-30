.. Console/Prompt/Number.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Console\\Prompt\\Number
=============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Ask the user for a number.

    :param string: The prompt text to display in console
    :param bool: Is empty response allowed?
    :param bool: Are floating (non-decimal) numbers allowed?
    :param integer: Minimum value (inclusive)
    :param integer: Maximum value (inclusive)



show
++++

.. function:: show()


    Show the prompt to user and return the answer.

    :rtype: mixed 



setAllowEmpty
+++++++++++++

.. function:: setAllowEmpty()


    @param  bool $allowEmpty



getAllowEmpty
+++++++++++++

.. function:: getAllowEmpty()


    @return bool



setMaxLength
++++++++++++

.. function:: setMaxLength()


    @param int $maxLength



getMaxLength
++++++++++++

.. function:: getMaxLength()


    @return int



setPromptText
+++++++++++++

.. function:: setPromptText()


    @param string $promptText



getPromptText
+++++++++++++

.. function:: getPromptText()


    @return string



setMax
++++++

.. function:: setMax()


    @param int $max



getMax
++++++

.. function:: getMax()


    @return int



setMin
++++++

.. function:: setMin()


    @param int $min



getMin
++++++

.. function:: getMin()


    @return int



setAllowFloat
+++++++++++++

.. function:: setAllowFloat()


    @param  bool $allowFloat



getAllowFloat
+++++++++++++

.. function:: getAllowFloat()


    @return bool



