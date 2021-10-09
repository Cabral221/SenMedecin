<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $gen_password
 * @property int $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereGenPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Antecedent
 *
 * @property int $id
 * @property string $father
 * @property string $mother
 * @property string $family
 * @property string $other_exam
 * @property string $treating
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereFather($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereMother($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereOtherExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereTreating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereUpdatedAt($value)
 */
	class Antecedent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attachment
 *
 * @property int $id
 * @property string $name
 * @property string $attachable_type
 * @property int $attachable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $attachable
 * @property-read mixed $url
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 */
	class Attachment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Carnet
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereUpdatedAt($value)
 */
	class Carnet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Children
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon $birthday
 * @property string $genre
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Services\Appointment\Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read mixed $full_name
 * @property-read \App\Models\Patient $mom
 * @method static \Illuminate\Database\Eloquent\Builder|Children newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Children newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Children query()
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereUpdatedAt($value)
 */
	class Children extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $comment
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $object
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Info
 *
 * @property int $id
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Info newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Info newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Info query()
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereUpdatedAt($value)
 */
	class Info extends \Eloquent {}
}

namespace App\Models{
/**
 * Medecin Model class
 *
 * @property Service $service
 * @property Patient[] $patients
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property int $service_id
 * @property int $responsable_id
 * @property int $is_active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Services\Appointment\Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read int|null $patients_count
 * @property-read \App\Models\Responsable $responsable
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereResponsableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereUpdatedAt($value)
 */
	class Medecin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $object
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Partener
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $image
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Responsable|null $responsable
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Partener newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener whereUpdatedAt($value)
 */
	class Partener extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Partener_service
 *
 * @property int $id
 * @property int $partener_id
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service wherePartenerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partener_service whereUpdatedAt($value)
 */
	class Partener_service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patient
 *
 * @property Medecin $medecin
 *  @extends Authenticatable<User>
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon $birthday
 * @property string $address
 * @property string $phone
 * @property string|null $email
 * @property string $password
 * @property string|null $referential
 * @property int $medecin_id
 * @property int|null $carnet_id
 * @property bool $is_active
 * @property int $is_pregnancy
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Antecedent|null $antecedent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Services\Appointment\Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read \App\Models\Carnet|null $carnet
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Children[] $childrens
 * @property-read int|null $childrens_count
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pregnancy[] $pregnancies
 * @property-read int|null $pregnancies_count
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCarnetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIsPregnancy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereMedecinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereReferential($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pev
 *
 * @property int $id
 * @property string $vaccin
 * @property int $period_month
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pev newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev wherePeriodMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereVaccin($value)
 */
	class Pev extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $subTitle
 * @property string $content
 * @property int $publish
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post notDraft()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pregnancy
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon $accouchement
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereAccouchement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereUpdatedAt($value)
 */
	class Pregnancy extends \Eloquent {}
}

namespace App\Models{
/**
 * Responsable Model class
 *
 * @property Medecin[] $medecins
 * @property Patient[] $patients
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property int $partener_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $medecins_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Partener $partener
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePartenerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereUpdatedAt($value)
 */
	class Responsable extends \Eloquent {}
}

namespace App\Models{
/**
 * Service Model Class
 *
 * @property Partener[] $parteners
 * @property int $id
 * @property string $libele
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Medecin[] $medecins
 * @property-read int|null $medecins_count
 * @property-read int|null $parteners_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLibele($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeAppointment
 *
 * @property int $id
 * @property string $libele
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Services\Appointment\Appointment[] $appointment
 * @property-read int|null $appointment_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereLibele($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereUpdatedAt($value)
 */
	class TypeAppointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vat
 *
 * @property int $id
 * @property string $vaccin
 * @property int $period_month
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat wherePeriodMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereVaccin($value)
 */
	class Vat extends \Eloquent {}
}

namespace App\Services\Appointment{
/**
 * Appointment Model
 *
 * @property TypeAppointment $type_appointment
 * @property Children $children
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property string $description
 * @property int $type_appointment_id
 * @property int|null $children_id
 * @property int $patient_id
 * @property int $medecin_id
 * @property bool $passed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Medecin $medecin
 * @property-read \App\Models\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereChildrenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereMedecinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereTypeAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 */
	class Appointment extends \Eloquent {}
}

