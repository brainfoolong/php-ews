<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ContactsFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a contacts folder that is contained in a mailbox.
 *
 * @package php-ews\Type
 */
class ContactsFolderType extends BaseFolderType
{
    public mixed $SourceId;

    /**
     * Contains all the configured permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var PermissionSetType
     */
    public $PermissionSet;

    /**
     * Indicates the permissions that the user has for the contact data that is
     * being shared.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PermissionReadAccessType
     */
    public $SharingEffectiveRights;
}
