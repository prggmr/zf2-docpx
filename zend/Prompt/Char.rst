.. /Console/Prompt/Char.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Prompt\\Char
***************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$promptText = "Please hit a key", [$allowedChars = "abc", [$ignoreCase = true, [$allowEmpty = false, [$echo = true]]]]])


    Ask the user for a single key stroke

    :param string $promptText: The prompt text to display in console
    :param string $allowedChars: A list of allowed chars (i.e. "abc12345")
    :param bool $ignoreCase: If true, case will be ignored and prompt will always return lower-cased response
    :param bool $allowEmpty: Is empty response allowed?
    :param bool $echo: Display the selection after user presses key



show
----

.. function:: show()


    Show the prompt to user and return a single char.

    :rtype: string 



setAllowEmpty
-------------

.. function:: setAllowEmpty($allowEmpty)


    @param  bool $allowEmpty



getAllowEmpty
-------------

.. function:: getAllowEmpty()


    @return bool



setPromptText
-------------

.. function:: setPromptText($promptText)


    @param string $promptText



getPromptText
-------------

.. function:: getPromptText()


    @return string



setAllowedChars
---------------

.. function:: setAllowedChars($allowedChars)


    @param string $allowedChars



getAllowedChars
---------------

.. function:: getAllowedChars()


    @return string



setIgnoreCase
-------------

.. function:: setIgnoreCase($ignoreCase)


    @param  bool $ignoreCase



getIgnoreCase
-------------

.. function:: getIgnoreCase()


    @return bool



setEcho
-------

.. function:: setEcho($echo)


    @param  bool $echo



getEcho
-------

.. function:: getEcho()


    @return bool





