<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereUpdatedAt($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUsername($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $app_link
 * @property string $image_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereAppLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereImageLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AppGallery whereUpdatedAt($value)
 */
	class AppGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $body
 * @property string|null $thumbnail
 * @property int $likes
 * @property string $slug
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string|null $image_alt_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereImageAltText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string|null $thumbnail
 * @property string $author
 * @property string $slug
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlogPost whereUpdatedAt($value)
 */
	class BlogPost extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string|null $organization
 * @property string|null $credential_id
 * @property string|null $credential_url
 * @property string|null $media_url
 * @property string|null $issue_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCredentialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCredentialUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereMediaUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereOrganization($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereUpdatedAt($value)
 */
	class Certification extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $fullName
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $duration
 * @property string $institutionName
 * @property string $field
 * @property string $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereInstitutionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Education whereUpdatedAt($value)
 */
	class Education extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $duration
 * @property string $title
 * @property string $designation
 * @property string $details
 * @property string $company_image
 * @property string $company_website
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereCompanyImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereCompanyWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Experience whereUpdatedAt($value)
 */
	class Experience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $keyLine
 * @property string $title
 * @property string $short_title
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereKeyLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereShortTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Heropropertie whereUpdatedAt($value)
 */
	class Heropropertie extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $previewLink
 * @property string $thumbnailLink
 * @property string $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project wherePreviewLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereThumbnailLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $downloadLink
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume whereDownloadLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resume whereUpdatedAt($value)
 */
	class Resume extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $pageName
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $ogSiteName
 * @property string $ogUrl
 * @property string $ogTitle
 * @property string $ogDescription
 * @property string $ogImage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereOgDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereOgImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereOgSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereOgTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereOgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie wherePageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seopropertie whereUpdatedAt($value)
 */
	class Seopropertie extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $twitterLink
 * @property string $githubLink
 * @property string $linkedinLink
 * @property string $instagramLink
 * @property string $facebookLink
 * @property string $pinterestLink
 * @property string $youtubeLink
 * @property string $snapchatLink
 * @property string $tiktokLink
 * @property string $behanceLink
 * @property string $mediumLink
 * @property string $dribbbleLink
 * @property string $googlePlayLink
 * @property string $websiteLink
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereBehanceLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereDribbbleLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereGithubLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereGooglePlayLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereInstagramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereLinkedinLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereMediumLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social wherePinterestLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereSnapchatLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereTiktokLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereTwitterLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereWebsiteLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Social whereYoutubeLink($value)
 */
	class Social extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

