.. Text/Figlet/Figlet.php generated using docpx on 01/30/13 03:32am


Zend\\Text\\Figlet\\Figlet
==========================

Zend\Text\Figlet is a PHP implementation of FIGlet

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Instantiate the FIGlet with a specific font. If no font is given, the
    standard font is used. You can also supply multiple options via
    the $options variable, which can either be an array or an instance of
    Zend_Config.

    :param array|Traversable: Options for the output



setOptions
----------

.. function:: setOptions()


    Set options from array

    :param array: Configuration for Figlet

    :rtype: Figlet 



setFont
-------

.. function:: setFont()


    Set a font to use

    :param string: Path to the font

    :rtype: Figlet 



setHandleParagraphs
-------------------

.. function:: setHandleParagraphs()


    Set handling of paragraphs

    :param bool: Whether to handle paragraphs or not

    :rtype: Figlet 



setJustification
----------------

.. function:: setJustification()


    Set the justification. 0 stands for left aligned, 1 for centered and 2
    for right aligned.

    :param integer: Justification of the output text

    :rtype: Figlet 



setOutputWidth
--------------

.. function:: setOutputWidth()


    Set the output width

    :param integer: Output with which should be used for word
                             wrapping and justification

    :rtype: Figlet 



setRightToLeft
--------------

.. function:: setRightToLeft()


    Set right to left mode. For writing from left to right, use
    Zend\Text\Figlet::DIRECTION_LEFT_TO_RIGHT. For writing from right to left,
    use Zend\Text\Figlet::DIRECTION_RIGHT_TO_LEFT.

    :param integer: Right-to-left mode

    :rtype: Figlet 



setSmushMode
------------

.. function:: setSmushMode()


    Set the smush mode.
    
    Use one of the constants of Zend\Text\Figlet::SM_*, you may combine them.

    :param integer: Smush mode to use for generating text

    :rtype: Figlet 



render
------

.. function:: render()


    Render a FIGlet text

    :param string: Text to convert to a figlet text
    :param string: Encoding of the input string

    :throws Exception\InvalidArgumentException: When $text is not a string
    :throws Exception\UnexpectedValueException: When $text it not properly encoded

    :rtype: string 



_putString
----------

.. function:: _putString()


    Puts the given string, substituting blanks for hardblanks. If outputWidth
    is 1, puts the entire string; otherwise puts at most outputWidth - 1
    characters. Puts a newline at the end of the string. The string is left-
    justified, centered or right-justified (taking outputWidth as the screen
    width) if justification is 0, 1 or 2 respectively.

    :param string: The string to add to the output

    :rtype: void 



_appendLine
-----------

.. function:: _appendLine()


    Appends the current line to the output

    :rtype: void 



_splitLine
----------

.. function:: _splitLine()


    Splits inCharLine at the last word break (bunch of consecutive blanks).
    Makes a new line out of the first part and appends it using appendLine().
    Makes a new line out of the second part and returns.

    :rtype: void 



_clearLine
----------

.. function:: _clearLine()


    Clears the current line

    :rtype: void 



_addChar
--------

.. function:: _addChar()


    Attempts to add the given character onto the end of the current line.
    Returns true if this can be done, false otherwise.

    :param string: Character which to add to the output

    :rtype: bool 



_getLetter
----------

.. function:: _getLetter()


    Gets the requested character and sets current and previous char width.

    :param string: The character from which to get the letter of

    :rtype: void 



_smushAmount
------------

.. function:: _smushAmount()


    Returns the maximum amount that the current character can be smushed into
    the current line.

    :rtype: integer 



_smushem
--------

.. function:: _smushem()


    Given two characters, attempts to smush them into one, according to the
    current smushmode. Returns smushed character or false if no smushing can
    be done.
    
    Smushmode values are sum of following (all values smush blanks):
    
     1: Smush equal chars (not hardblanks)
     2: Smush '_' with any char in hierarchy below
     4: hierarchy: "|", "/\", "[]", "{}", "()", "<>"
        Each class in hier. can be replaced by later class.
     8: [ + ] -> |, { + } -> |, ( + ) -> |
    16: / + \ -> X, > + < -> X (only in that order)
    32: hardblank + hardblank -> hardblank

    :param string: Left character to smush
    :param string: Right character to smush

    :rtype: string 



_loadFont
---------

.. function:: _loadFont()


    Load the specified font

    :param string: Font file to load

    :throws Exception\RuntimeException: When font file was not found
    :throws Exception\RuntimeException: When GZIP library is required but not found
    :throws Exception\RuntimeException: When font file is not readable
    :throws Exception\UnexpectedValueException: When font file is not a FIGlet 2 font file

    :rtype: void 



_setUsedSmush
-------------

.. function:: _setUsedSmush()


    Set the used smush mode, according to smush override, user smush and
    font smush.

    :rtype: void 



_readMagic
----------

.. function:: _readMagic()


    Reads a four-character magic string from a stream

    :param resource: File pointer to the font file

    :rtype: string 



_skipToEol
----------

.. function:: _skipToEol()


    Skip a stream to the end of line

    :param resource: File pointer to the font file

    :rtype: void 



_loadChar
---------

.. function:: _loadChar()


    Load a single character from the font file

    :param resource: File pointer to the font file

    :rtype: array 



_uniOrd
-------

.. function:: _uniOrd()


    Unicode compatible ord() method

    :param string: The char to get the value from

    :rtype: integer 





Constants
+++++++++

SM_EQUAL
========

Smush2 layout modes

SM_LOWLINE
==========

SM_HIERARCHY
============

SM_PAIR
=======

SM_BIGX
=======

SM_HARDBLANK
============

SM_KERN
=======

SM_SMUSH
========

SMO_NO
======

Smush mode override modes

SMO_YES
=======

SMO_FORCE
=========

JUSTIFICATION_LEFT
==================

Justifications

JUSTIFICATION_CENTER
====================

JUSTIFICATION_RIGHT
===================

DIRECTION_LEFT_TO_RIGHT
=======================

Write directions

DIRECTION_RIGHT_TO_LEFT
=======================

FONTFILE_MAGIC_NUMBER
=====================

Magic fontfile number

