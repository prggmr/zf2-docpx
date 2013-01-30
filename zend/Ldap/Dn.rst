.. Ldap/Dn.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Dn
==============

Zend\Ldap\Dn provides an API for DN manipulation

Methods
-------

factory
+++++++

.. function:: factory()


    Creates a DN from an array or a string

    :param string|array: 
    :param string|null: 

    :rtype: Dn 

    :throws: Exception\LdapException 



fromString
++++++++++

.. function:: fromString()


    Creates a DN from a string

    :param string: 
    :param string|null: 

    :rtype: Dn 

    :throws: Exception\LdapException 



fromArray
+++++++++

.. function:: fromArray()


    Creates a DN from an array

    :param array: 
    :param string|null: 

    :rtype: Dn 

    :throws: Exception\LdapException 



__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array: 
    :param string|null: 



getRdn
++++++

.. function:: getRdn()


    Gets the RDN of the current DN

    :param string: 

    :rtype: array 

    :throws: Exception\LdapException if DN has no RDN (empty array)



getRdnString
++++++++++++

.. function:: getRdnString()


    Gets the RDN of the current DN as a string

    :param string: 

    :rtype: string 

    :throws: Exception\LdapException if DN has no RDN (empty array)



getParentDn
+++++++++++

.. function:: getParentDn()


    Get the parent DN $levelUp levels up the tree

    :param int: 

    :throws Exception\LdapException: 

    :rtype: Dn 



get
+++

.. function:: get()


    Get a DN part

    :param int: 
    :param int: 
    :param string: 

    :rtype: array 

    :throws: Exception\LdapException if index is illegal



set
+++

.. function:: set()


    Set a DN part

    :param int: 
    :param array: 

    :rtype: Dn Provides a fluent interface

    :throws: Exception\LdapException if index is illegal



remove
++++++

.. function:: remove()


    Remove a DN part

    :param int: 
    :param int: 

    :rtype: Dn Provides a fluent interface

    :throws: Exception\LdapException if index is illegal



append
++++++

.. function:: append()


    Append a DN part

    :param array: 

    :rtype: Dn Provides a fluent interface



prepend
+++++++

.. function:: prepend()


    Prepend a DN part

    :param array: 

    :rtype: Dn Provides a fluent interface



insert
++++++

.. function:: insert()


    Insert a DN part

    :param int: 
    :param array: 

    :rtype: Dn Provides a fluent interface

    :throws: Exception\LdapException if index is illegal



assertIndex
+++++++++++

.. function:: assertIndex()


    Assert index is correct and usable

    :param mixed: 

    :rtype: bool 

    :throws: Exception\LdapException 



assertRdn
+++++++++

.. function:: assertRdn()


    Assert if value is in a correct RDN format

    :param array: 

    :rtype: bool 

    :throws: Exception\LdapException 



setCaseFold
+++++++++++

.. function:: setCaseFold()


    Sets the case fold

    :param string|null: 



toString
++++++++

.. function:: toString()


    Return DN as a string

    :param string: 

    :rtype: string 

    :throws: Exception\LdapException 



toArray
+++++++

.. function:: toArray()


    Return DN as an array

    :param string: 

    :rtype: array 



caseFoldRdn
+++++++++++

.. function:: caseFoldRdn()


    Do a case folding on a RDN

    :param array: 
    :param string: 

    :rtype: array 



caseFoldDn
++++++++++

.. function:: caseFoldDn()


    Do a case folding on a DN ort part of it

    :param array: 
    :param string: 

    :rtype: array 



__toString
++++++++++

.. function:: __toString()


    Cast to string representation {@see toString()}

    :rtype: string 



offsetExists
++++++++++++

.. function:: offsetExists()


    Required by the ArrayAccess implementation

    :param int: 

    :rtype: bool 



offsetGet
+++++++++

.. function:: offsetGet()


    Proxy to {@see get()}
    Required by the ArrayAccess implementation

    :param int: 

    :rtype: array 



offsetSet
+++++++++

.. function:: offsetSet()


    Proxy to {@see set()}
    Required by the ArrayAccess implementation

    :param int: 
    :param array: 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Proxy to {@see remove()}
    Required by the ArrayAccess implementation

    :param int: 



setDefaultCaseFold
++++++++++++++++++

.. function:: setDefaultCaseFold()


    Sets the default case fold

    :param string: 



sanitizeCaseFold
++++++++++++++++

.. function:: sanitizeCaseFold()


    Sanitizes the case fold

    :param string: 
    :param string: 

    :rtype: string 



escapeValue
+++++++++++

.. function:: escapeValue()


    Escapes a DN value according to RFC 2253
    
    Escapes the given VALUES according to RFC 2253 so that they can be safely used in LDAP DNs.
    The characters ",", "+", """, "\", "<", ">", ";", "#", " = " with a special meaning in RFC 2252
    are preceeded by ba backslash. Control characters with an ASCII code < 32 are represented as \hexpair.
    Finally all leading and trailing spaces are converted to sequences of \20.




    :param string|array: An array containing the DN values that should be escaped

    :rtype: array The array $values, but escaped



unescapeValue
+++++++++++++

.. function:: unescapeValue()


    Undoes the conversion done by {@link escapeValue()}.
    
    Any escape sequence starting with a baskslash - hexpair or special character -
    will be transformed back to the corresponding character.




    :param string|array: Array of DN Values

    :rtype: array Same as $values, but unescaped



explodeDn
+++++++++

.. function:: explodeDn()


    Creates an array containing all parts of the given DN.
    
    Array will be of type
    array(
         array("cn" => "name1", "uid" => "user"),
         array("cn" => "name2"),
         array("dc" => "example"),
         array("dc" => "org")
    )
    for a DN of cn=name1+uid=user,cn=name2,dc=example,dc=org.

    :param string: 
    :param array: An optional array to receive DN keys (e.g. CN, OU, DC, ...)
    :param array: An optional array to receive DN values
    :param string: 

    :rtype: array 

    :throws: Exception\LdapException 



checkDn
+++++++

.. function:: checkDn()


    @param  string $dn       The DN to parse

    :param array: An optional array to receive DN keys (e.g. CN, OU, DC, ...)
    :param array: An optional array to receive DN values
    :param string: 

    :rtype: bool True if the DN was successfully parsed or false if the string is not a valid DN.



implodeRdn
++++++++++

.. function:: implodeRdn()


    Returns a DN part in the form $attribute = $value
    
    This method supports the creation of multi-valued RDNs
    $part must contain an even number of elements.

    :param array: 
    :param string: 

    :rtype: string 

    :throws: Exception\LdapException 



implodeDn
+++++++++

.. function:: implodeDn()


    Implodes an array in the form delivered by {@link explodeDn()}
    to a DN string.
    
    $dnArray must be of type
    array(
         array("cn" => "name1", "uid" => "user"),
         array("cn" => "name2"),
         array("dc" => "example"),
         array("dc" => "org")
    )

    :param array: 
    :param string: 
    :param string: 

    :rtype: string 

    :throws: Exception\LdapException 



isChildOf
+++++++++

.. function:: isChildOf()


    Checks if given $childDn is beneath $parentDn subtree.

    :param string|Dn: 
    :param string|Dn: 

    :rtype: bool 





Constants
---------

ATTR_CASEFOLD_NONE
++++++++++++++++++

ATTR_CASEFOLD_UPPER
+++++++++++++++++++

ATTR_CASEFOLD_LOWER
+++++++++++++++++++

