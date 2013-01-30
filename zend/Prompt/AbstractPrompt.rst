.. Console/Prompt/AbstractPrompt.php generated using docpx on 01/30/13 03:32am


Zend\\Console\\Prompt\\AbstractPrompt
=====================================

Methods
+++++++

show
----

.. function:: show()


    Show a prompt

    :rtype: void 



getLastResponse
---------------

.. function:: getLastResponse()


    Return last answer to this prompt.

    :rtype: mixed 



getConsole
----------

.. function:: getConsole()


    Return console adapter to use when showing prompt.

    :rtype: ConsoleAdapter 



setConsole
----------

.. function:: setConsole()


    Set console adapter to use when showing prompt.

    :param ConsoleAdapter: 



prompt
------

.. function:: prompt()


    Create an instance of this prompt, show it and return response.
    
    This is a convenience method for creating statically creating prompts, i.e.:
    
         $name = Zend\Console\Prompt\Line::prompt("Enter your name: ");

    :rtype: mixed 

    :throws: Exception\BadMethodCallException 



