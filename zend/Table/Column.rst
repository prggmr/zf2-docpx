.. Text/Table/Column.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Text\\Table\\Column
=========================

Column class for Zend\Text\Table\Row

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a column for a Zend\Text\Table\Row object.

    :param string: The content of the column
    :param string: The align of the content
    :param integer: The colspan of the column
    :param string: The encoding of the content



setContent
++++++++++

.. function:: setContent()


    Set the content.
    
    If $charset is not defined, it is assumed that $content is encoded in
    the charset defined via Zend\Text\Table::setInputCharset() (defaults
    to utf-8).

    :param string: Content of the column
    :param string: The charset of the content

    :throws Exception\InvalidArgumentException: When $content is not a string

    :rtype: Column 



setAlign
++++++++

.. function:: setAlign()


    Set the align

    :param string: Align of the column

    :throws Exception\OutOfBoundsException: When supplied align is invalid

    :rtype: Column 



setColSpan
++++++++++

.. function:: setColSpan()


    Set the colspan

    :param int: 

    :throws Exception\InvalidArgumentException: When $colSpan is smaller than 1

    :rtype: Column 



getColSpan
++++++++++

.. function:: getColSpan()


    Get the colspan

    :rtype: integer 



render
++++++

.. function:: render()


    Render the column width the given column width

    :param integer: The width of the column
    :param integer: The padding for the column

    :throws Exception\InvalidArgumentException: When $columnWidth is lower than 1
    :throws Exception\OutOfBoundsException: When padding is greater than columnWidth

    :rtype: string 





Constants
---------

ALIGN_LEFT
++++++++++

Aligns for columns

ALIGN_CENTER
++++++++++++

ALIGN_RIGHT
+++++++++++

