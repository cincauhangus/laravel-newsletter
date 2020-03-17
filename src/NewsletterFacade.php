<?php

namespace Spatie\Newsletter;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array|false subscribe(string $email, array $mergeFields = [], string $listName = '', array $options = [])
 * @method static array|false subscribePending(string $email, array $mergeFields = [], string $listName = '', array $options = [])
 * @method static array|false subscribeOrUpdate(string $email, array $mergeFields = [], string $listName = '', array $options = [])
 * @method static array|false getMembers(string $listName = '', array $parameters = [])
 * @method static array|false getMember(string $email, string $listName = '')
 * @method static array|false getMemberActivity(string $email, string $listName = '')
 * @method static array|false hasMember(string $email, string $listName = ''): bool
 * @method static array|false isSubscribed(string $email, string $listName = ''): bool
 * @method static array|false unsubscribe(string $email, string $listName = '')
 * @method static array|false updateEmailAddress(string $currentEmailAddress, string $newEmailAddress, string $listName = '')
 * @method static array|false delete(string $email, string $listName = '')
 * @method static array|false createCampaign(string $fromName, string $replyTo, string $subject, string $html = '', string $listName = '', array $options = [], array $contentOptions = [])
 * @method static array|false updateContent(string $campaignId, string $html, array $options = [])
 * @method static array|false getLastError()
 * @method static DrewM\MailChimp\MailChimp getApi()
 * @method static bool lastActionSucceeded()
 */

class NewsletterFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'newsletter';
    }
}
