.. Text/Table/Row.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Text\\Table\\Row
======================

Row class for Zend\Text\Table

Methods
-------

createColumn
++++++++++++

.. function:: createColumn()


    Create a new column and append it to the row

    :param string: 
    :param array: 

    :rtype: Row 



appendColumn
++++++++++++

.. function:: appendColumn()


    Append a column to the row

    :param \Zend\Text\Table\Column: The column to append to the row

    :rtype: Row 



getColumn
+++++++++

.. function:: getColumn()


    Get a column by it's index
    
    Returns null, when the index is out of range

    :param integer: 

    :rtype: Column|null 



getColumns
++++++++++

.. function:: getColumns()


    Get all columns of the row

    :rtype: array 



getColumnWidths
+++++++++++++++

.. function:: getColumnWidths()


    Get the widths of all columns, which were rendered last


    :rtype: integer 



render
++++++

.. function:: render()


    Render the row

    :param array: Width of all columns
    :param Decorator: Decorator for the row borders
    :param integer: Padding for the columns

    :throws Exception\OverflowException: When there are too many columns

    :rtype: string 



