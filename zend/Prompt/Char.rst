.. Console/Prompt/Char.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Console\\Prompt\\Char
===========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Ask the user for a single key stroke

    :param string: The prompt text to display in console
    :param string: A list of allowed chars (i.e. "abc12345")
    :param bool: If true, case will be ignored and prompt will always return lower-cased response
    :param bool: Is empty response allowed?
    :param bool: Display the selection after user presses key



show
++++

.. function:: show()


    Show the prompt to user and return a single char.

    :rtype: string 



setAllowEmpty
+++++++++++++

.. function:: setAllowEmpty()


    @param  bool $allowEmpty



getAllowEmpty
+++++++++++++

.. function:: getAllowEmpty()


    @return bool



setPromptText
+++++++++++++

.. function:: setPromptText()


    @param string $promptText



getPromptText
+++++++++++++

.. function:: getPromptText()


    @return string



setAllowedChars
+++++++++++++++

.. function:: setAllowedChars()


    @param string $allowedChars



getAllowedChars
+++++++++++++++

.. function:: getAllowedChars()


    @return string



setIgnoreCase
+++++++++++++

.. function:: setIgnoreCase()


    @param  bool $ignoreCase



getIgnoreCase
+++++++++++++

.. function:: getIgnoreCase()


    @return bool



setEcho
+++++++

.. function:: setEcho()


    @param  bool $echo



getEcho
+++++++

.. function:: getEcho()


    @return bool



