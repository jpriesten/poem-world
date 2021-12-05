<?php

// @formatter:off

/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models {
    /**
     * App\Models\Comment
     *
     * @mixin IdeHelperComment
     * @property int $id
     * @property string $message
     * @property string $user_id
     * @property string $poem_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Poem $poem
     * @property-read \App\Models\User $user
     * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
     * @method static \Illuminate\Database\Eloquent\Builder|Comment create(array $attributes = [], array $values = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Comment find($id, $columns = ['*'])
     * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comment whereMessage($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePoemId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUserId($value)
     */
    class IdeHelperComment extends \Eloquent
    {
    }
}

namespace App\Models {
    /**
     * App\Models\Like
     *
     * @mixin IdeHelperLike
     * @property int $id
     * @property int $count
     * @property string $user_id
     * @property string $poem_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Poem $poem
     * @property-read \App\Models\User $user
     * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Like query()
     * @method static \Illuminate\Database\Eloquent\Builder|Like create(array $attributes = [], array $values = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Like find($id, $columns = ['*'])
     * @method static \Illuminate\Database\Eloquent\Builder|Like whereCount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Like whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Like wherePoemId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Like whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
     */
    class IdeHelperLike extends \Eloquent
    {
    }
}

namespace App\Models {
    /**
     * App\Models\Poem
     *
     * @mixin IdeHelperPoem
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property string $description
     * @property int $user_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
     * @property-read int|null $comments_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
     * @property-read int|null $likes_count
     * @property-read \App\Models\User $user
     * @method static \Illuminate\Database\Eloquent\Builder|Poem newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Poem newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Poem query()
     * @method static \Illuminate\Database\Eloquent\Builder|Poem find($id, $columns = ['*'])
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereDescription($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereSlug($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereTitle($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Poem whereUserId($value)
     */
    class IdeHelperPoem extends \Eloquent
    {
    }
}

namespace App\Models {
    /**
     * App\Models\User
     *
     * @mixin IdeHelperUser
     * @property int $id
     * @property string $name
     * @property string $email
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
     * @property-read int|null $comments_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
     * @property-read int|null $likes_count
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Poem[] $poems
     * @property-read int|null $poems_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
     * @property-read int|null $tokens_count
     * @method static \Database\Factories\UserFactory factory(...$parameters)
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
    class IdeHelperUser extends \Eloquent
    {
    }
}

