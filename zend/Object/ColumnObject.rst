.. /Db/Metadata/Object/ColumnObject.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Metadata\\Object\\ColumnObject
****************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($name, $tableName, [$schemaName = false])


    Constructor

    :param string $name: 
    :param string $tableName: 
    :param string $schemaName: 



setName
-------

.. function:: setName($name)


    Set name

    :param string $name: 



getName
-------

.. function:: getName()


    Get name

    :rtype: string 



getTableName
------------

.. function:: getTableName()


    Get table name

    :rtype: string 



setTableName
------------

.. function:: setTableName($tableName)


    Set table name

    :param string $tableName: 

    :rtype: ColumnObject 



setSchemaName
-------------

.. function:: setSchemaName($schemaName)


    Set schema name

    :param string $schemaName: 



getSchemaName
-------------

.. function:: getSchemaName()


    Get schema name

    :rtype: string 



getOrdinalPosition
------------------

.. function:: getOrdinalPosition()


    @return int $ordinalPosition



setOrdinalPosition
------------------

.. function:: setOrdinalPosition($ordinalPosition)


    @param int $ordinalPosition to set

    :rtype: ColumnObject 



getColumnDefault
----------------

.. function:: getColumnDefault()


    @return null|string the $columnDefault



setColumnDefault
----------------

.. function:: setColumnDefault($columnDefault)


    @param mixed $columnDefault to set

    :rtype: ColumnObject 



getIsNullable
-------------

.. function:: getIsNullable()


    @return bool $isNullable



setIsNullable
-------------

.. function:: setIsNullable($isNullable)


    @param bool $isNullable to set

    :rtype: ColumnObject 



isNullable
----------

.. function:: isNullable()


    @return bool $isNullable



getDataType
-----------

.. function:: getDataType()


    @return null|string the $dataType



setDataType
-----------

.. function:: setDataType($dataType)


    @param string $dataType the $dataType to set

    :rtype: ColumnObject 



getCharacterMaximumLength
-------------------------

.. function:: getCharacterMaximumLength()


    @return int|null the $characterMaximumLength



setCharacterMaximumLength
-------------------------

.. function:: setCharacterMaximumLength($characterMaximumLength)


    @param int $characterMaximumLength the $characterMaximumLength to set

    :rtype: ColumnObject 



getCharacterOctetLength
-----------------------

.. function:: getCharacterOctetLength()


    @return int|null the $characterOctetLength



setCharacterOctetLength
-----------------------

.. function:: setCharacterOctetLength($characterOctetLength)


    @param int $characterOctetLength the $characterOctetLength to set

    :rtype: ColumnObject 



getNumericPrecision
-------------------

.. function:: getNumericPrecision()


    @return int the $numericPrecision



setNumericPrecision
-------------------

.. function:: setNumericPrecision($numericPrecision)


    @param int $numericPrecision the $numericPrevision to set

    :rtype: ColumnObject 



getNumericScale
---------------

.. function:: getNumericScale()


    @return int the $numericScale



setNumericScale
---------------

.. function:: setNumericScale($numericScale)


    @param int $numericScale the $numericScale to set

    :rtype: ColumnObject 



getNumericUnsigned
------------------

.. function:: getNumericUnsigned()


    @return bool



setNumericUnsigned
------------------

.. function:: setNumericUnsigned($numericUnsigned)


    @param  bool $numericUnsigned

    :rtype: ColumnObject 



isNumericUnsigned
-----------------

.. function:: isNumericUnsigned()


    @return bool



getErratas
----------

.. function:: getErratas()


    @return array the $errata



setErratas
----------

.. function:: setErratas($erratas)


    @param array $erratas

    :rtype: ColumnObject 



getErrata
---------

.. function:: getErrata($errataName)


    @param string $errataName

    :rtype: mixed 



setErrata
---------

.. function:: setErrata($errataName, $errataValue)


    @param string $errataName

    :param mixed $errataValue: 

    :rtype: ColumnObject 





