.. Db/Metadata/Object/ColumnObject.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Metadata\\Object\\ColumnObject
========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param string: 
    :param string: 



setName
+++++++

.. function:: setName()


    Set name

    :param string: 



getName
+++++++

.. function:: getName()


    Get name

    :rtype: string 



getTableName
++++++++++++

.. function:: getTableName()


    Get table name

    :rtype: string 



setTableName
++++++++++++

.. function:: setTableName()


    Set table name

    :param string: 

    :rtype: ColumnObject 



setSchemaName
+++++++++++++

.. function:: setSchemaName()


    Set schema name

    :param string: 



getSchemaName
+++++++++++++

.. function:: getSchemaName()


    Get schema name

    :rtype: string 



getOrdinalPosition
++++++++++++++++++

.. function:: getOrdinalPosition()


    @return int $ordinalPosition



setOrdinalPosition
++++++++++++++++++

.. function:: setOrdinalPosition()


    @param int $ordinalPosition to set

    :rtype: ColumnObject 



getColumnDefault
++++++++++++++++

.. function:: getColumnDefault()


    @return null|string the $columnDefault



setColumnDefault
++++++++++++++++

.. function:: setColumnDefault()


    @param mixed $columnDefault to set

    :rtype: ColumnObject 



getIsNullable
+++++++++++++

.. function:: getIsNullable()


    @return bool $isNullable



setIsNullable
+++++++++++++

.. function:: setIsNullable()


    @param bool $isNullable to set

    :rtype: ColumnObject 



isNullable
++++++++++

.. function:: isNullable()


    @return bool $isNullable



getDataType
+++++++++++

.. function:: getDataType()


    @return null|string the $dataType



setDataType
+++++++++++

.. function:: setDataType()


    @param string $dataType the $dataType to set

    :rtype: ColumnObject 



getCharacterMaximumLength
+++++++++++++++++++++++++

.. function:: getCharacterMaximumLength()


    @return int|null the $characterMaximumLength



setCharacterMaximumLength
+++++++++++++++++++++++++

.. function:: setCharacterMaximumLength()


    @param int $characterMaximumLength the $characterMaximumLength to set

    :rtype: ColumnObject 



getCharacterOctetLength
+++++++++++++++++++++++

.. function:: getCharacterOctetLength()


    @return int|null the $characterOctetLength



setCharacterOctetLength
+++++++++++++++++++++++

.. function:: setCharacterOctetLength()


    @param int $characterOctetLength the $characterOctetLength to set

    :rtype: ColumnObject 



getNumericPrecision
+++++++++++++++++++

.. function:: getNumericPrecision()


    @return int the $numericPrecision



setNumericPrecision
+++++++++++++++++++

.. function:: setNumericPrecision()


    @param int $numericPrecision the $numericPrevision to set

    :rtype: ColumnObject 



getNumericScale
+++++++++++++++

.. function:: getNumericScale()


    @return int the $numericScale



setNumericScale
+++++++++++++++

.. function:: setNumericScale()


    @param int $numericScale the $numericScale to set

    :rtype: ColumnObject 



getNumericUnsigned
++++++++++++++++++

.. function:: getNumericUnsigned()


    @return bool



setNumericUnsigned
++++++++++++++++++

.. function:: setNumericUnsigned()


    @param  bool $numericUnsigned

    :rtype: ColumnObject 



isNumericUnsigned
+++++++++++++++++

.. function:: isNumericUnsigned()


    @return bool



getErratas
++++++++++

.. function:: getErratas()


    @return array the $errata



setErratas
++++++++++

.. function:: setErratas()


    @param array $erratas

    :rtype: ColumnObject 



getErrata
+++++++++

.. function:: getErrata()


    @param string $errataName

    :rtype: mixed 



setErrata
+++++++++

.. function:: setErrata()


    @param string $errataName

    :param mixed: 

    :rtype: ColumnObject 



