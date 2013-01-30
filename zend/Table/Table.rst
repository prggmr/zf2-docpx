.. Text/Table/Table.php generated using docpx on 01/30/13 03:32am


Zend\\Text\\Table\\Table
========================

Zend\Text\Table\Table enables developers to create tables out of characters

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a basic table object

    :param array|Traversable: Configuration options

    :throws Exception\UnexpectedValueException: When no columns widths were set



setOptions
----------

.. function:: setOptions()


    Set options from array

    :param array: Configuration for Table

    :rtype: Table 



setColumnWidths
---------------

.. function:: setColumnWidths()


    Set column widths

    :param array: Widths of all columns

    :throws Exception\InvalidArgumentException: When no columns were supplied
    :throws Exception\InvalidArgumentException: When a column has an invalid width

    :rtype: Table 



setAutoSeparate
---------------

.. function:: setAutoSeparate()


    Set auto separation mode

    :param integer: Auto separation mode

    :rtype: Table 



setDecorator
------------

.. function:: setDecorator()


    Set decorator

    :param Decorator|string: Decorator to use

    :rtype: Table 



setPadding
----------

.. function:: setPadding()


    Set the column padding

    :param integer: The padding for the columns

    :rtype: Table 



getDecoratorManager
-------------------

.. function:: getDecoratorManager()


    Get the plugin manager for decorators

    :rtype: DecoratorManager 



setDecoratorManager
-------------------

.. function:: setDecoratorManager()


    Set the plugin manager instance for decorators

    :param DecoratorManager: 

    :rtype: Table 



setDefaultColumnAlign
---------------------

.. function:: setDefaultColumnAlign()


    Set default column align for rows created by appendRow(array $data)

    :param integer: 
    :param string: 

    :rtype: Table 



setInputCharset
---------------

.. function:: setInputCharset()


    Set the input charset for column contents

    :param string: 



getInputCharset
---------------

.. function:: getInputCharset()


    Get the input charset for column contents

    :rtype: string 



setOutputCharset
----------------

.. function:: setOutputCharset()


    Set the output charset for column contents

    :param string: 



getOutputCharset
----------------

.. function:: getOutputCharset()


    Get the output charset for column contents

    :rtype: string 



appendRow
---------

.. function:: appendRow()


    Append a row to the table

    :param array|Row: The row to append to the table

    :throws Exception\InvalidArgumentException: When $row is neither an array nor Zend_Zext_Table_Row
    :throws Exception\OverflowException: When a row contains too many columns

    :rtype: Table 



render
------

.. function:: render()


    Render the table


    :rtype: string 



__toString
----------

.. function:: __toString()


    Magic method which returns the rendered table

    :rtype: string 





Constants
+++++++++

AUTO_SEPARATE_NONE
==================

Auto separator settings

AUTO_SEPARATE_HEADER
====================

AUTO_SEPARATE_FOOTER
====================

AUTO_SEPARATE_ALL
=================

