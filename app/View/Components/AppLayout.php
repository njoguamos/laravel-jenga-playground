<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use NjoguAmos\Jenga\Models\JengaToken;

class AppLayout extends Component
{
    /** @var string|null */
    public mixed $merchantCode;

    /** @var string|null */
    public mixed $host;

    /** @var string|null */
    public mixed $key;

    /** @var string|null */
    public mixed $secret;

    /** @var string|null */
    public mixed $publicKey = 'Run jenga:keys to generate';

    public mixed $token = 'Run jenga:auth to generate';

    public function __construct(public bool $showBackUrl = false)
    {
        $this->merchantCode = config(key: 'jenga.merchant') ?: 'Get merchant code from https://v3.jengahq.io';
        $this->host = config(key: 'jenga.host');
        $this->key = config(key: 'jenga.key') ?: 'Get api from https://v3.jengahq.io';
        $this->secret = config(key: 'jenga.secret') ?: 'Get consumer secret from https://v3.jengahq.io';

        if (config(key: 'jenga.keys_path').'/jenga.pub.key') {
            $this->publicKey = file_get_contents(filename: config(key: 'jenga.keys_path').'/jenga.pub.key');
        }

        $this->token = JengaToken::query()->latest()->first()?->access_token;
    }

    public function render(): View
    {
        return view(view: 'components.app-layout');
    }
}
