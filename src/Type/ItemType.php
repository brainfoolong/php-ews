<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ItemType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Represents a generic item in the Exchange store.
 *
 * @package php-ews\Type
 */
class ItemType extends Type
{
    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\BodyType
     */
    public $Body;

    /**
     * Represents a collection of strings that identify the categories to which
     * an item in the mailbox belongs.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Categories;

    /**
     * Contains the identifier of an item or conversation.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ConversationId;

    /**
     * Represents the culture for a given item in a mailbox.
     *
     * Specified by using the RFC 1766 culture identifier; for example, en-US.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Culture;

    /**
     * Represents the date and time that a given item in the mailbox was
     * created.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeCreated;

    /**
     * Represents the date and time that an item in a mailbox was received.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeReceived;

    /**
     * Represents the date and time that an item in a mailbox was sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeSent;

    /**
     * Represents the display string that is used for the contents of the Cc
     * line.
     *
     * This is the concatenated string of all Cc recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Represents the display string that is used for the contents of the To
     * line.
     *
     * This is the concatenated string of all To recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayTo;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Identifies extended properties on folders and items.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ExtendedPropertyType[]
     */
    public $ExtendedProperty = array();

    /**
     * Represents a property that is set to true if an item has at least one
     * visible attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Describes the importance of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ImportanceChoicesType
     */
    public $Importance;

    /**
     * Represents the identifier of the item to which this item is a reply.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InReplyTo;

    /**
     * Represents the collection of all Internet message headers that are
     * contained in an item in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Indicates whether the item is associated with a folder.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsAssociated;

    /**
     * Indicates whether an item has not yet been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDraft;

    /**
     * Indicates whether a user sent an item to him or herself.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsFromMe;

    /**
     * Indicates whether the item had previously been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResend;

    /**
     * Indicates whether an item has been submitted to the Outbox default
     * folder.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsSubmitted;

    /**
     * Indicates whether the item has been modified.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsUnmodified;

    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ItemClassType
     */
    public $ItemClass;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Contains the display name of the last user to modify an item.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $LastModifiedName;

    /**
     * Indicates when an item was last modified.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Contains the native Multipurpose Internet Mail Extensions (MIME) stream
     * of an object that is represented in base64Binary format.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MimeContentType
     */
    public $MimeContent;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $ParentFolderId;

    /**
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     * @deprecated Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     * @deprecated Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $ReceivedRepresenting;

    /**
     * Represents the date and time when the event occurs.
     *
     * This is used by the ReminderMinutesBeforeStart element to determine when
     * the reminder is displayed.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ReminderDueBy;

    /**
     * Indicates whether a reminder has been set for an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $ReminderIsSet;

    /**
     * Represents the number of minutes before an event when a reminder is
     * displayed.
     *
     * @since Exchange 2007
     *
     * @var integer
     *
     * @todo Determine if we need a ReminderMinutesBeforeStartType
     * implementation.
     */
    public $ReminderMinutesBeforeStart;

    /**
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Represents the size in bytes of an item.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Size;

    /**
     * Exchange store identifier of an item.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $StoreEntryId;

    /**
     * Represents the subject for Exchange store items and response objects.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Represents an HTML fragment or plain text which represents the unique
     * body of this conversation.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\BodyType
     */
    public $UniqueBody;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to edit an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientEditFormQueryString;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to read an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientReadFormQueryString;

	public $ReminderNextTime;
	public $DisplayBcc;
	public $Flag;
	public $InstanceKey;
	public $NormalizedBody;
	public $EntityExtractionResult;
	public $PolicyTag;
	public $ArchiveTag;
	public $RetentionDate;
	public $Preview;
	public $PredictedActionReasons;
	public $IsClutter;
	public $RightsManagementLicenseData;
	public $BlockStatus;
	public $HasBlockedImages;

	public $TextBody;

	public $IconIndex;

	public $MimeContentUTF8;

	public $Mentions;
	public $MentionedMe;
	public $MentionsPreview;
	public $MentionsEx;
	public $Hashtags;
	public $AppliedHashtags;
	public $AppliedHashtagsPreview;
	public $Likes;
	public $LikesPreview;
	public $PendingSocialActivityTagIds;
	public $AtAllMention;
	public $CanDelete;
	public $InferenceClassification;

    public $FirstBody;
}
