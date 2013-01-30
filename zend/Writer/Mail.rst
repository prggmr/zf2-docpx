.. Log/Writer/Mail.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Writer\\Mail
=======================

Class used for writing log messages to email via Zend\Mail.

Allows for emailing log messages at and above a certain level via a
Zend\Mail\Message object.  Note that this class only sends the email upon
completion, so any log entries accumulated are sent in a single email.
The email is sent using a Zend\Mail\Transport\TransportInterface object
(Sendmail is default).

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param MailMessage|array|Traversable: 
    :param Transport\TransportInterface: Optional

    :throws Exception\InvalidArgumentException: 



setTransport
++++++++++++

.. function:: setTransport()


    Set the transport message

    :param Transport\TransportInterface: 

    :rtype: Mail 



doWrite
+++++++

.. function:: doWrite()


    Places event line into array of lines to be used as message body.

    :param array: Event data



setSubjectPrependText
+++++++++++++++++++++

.. function:: setSubjectPrependText()


    Allows caller to have the mail subject dynamically set to contain the
    entry counts per-priority level.
    
    Sets the text for use in the subject, with entry counts per-priority
    level appended to the end.  Since a Zend\Mail\Message subject can only be set
    once, this method cannot be used if the Zend\Mail\Message object already has a
    subject set.

    :param string: Subject prepend text

    :rtype: Mail 



shutdown
++++++++

.. function:: shutdown()


    Sends mail to recipient(s) if log entries are present.  Note that both
    plaintext and HTML portions of email are handled here.



getFormattedNumEntriesPerPriority
+++++++++++++++++++++++++++++++++

.. function:: getFormattedNumEntriesPerPriority()


    Gets a string of number of entries per-priority level that occurred, or
    an empty string if none occurred.

    :rtype: string 



