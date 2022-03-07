<?php
namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    protected ApiClient $client;

    public function __construct(ApiClient $client) // PHP 8: __construct(protected ApiClient $client)
    {
        //
        $this->client = $client;
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
