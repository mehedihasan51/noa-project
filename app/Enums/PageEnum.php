<?php

namespace App\Enums;

enum PageEnum: string
{
    const AUTH  = 'login';
    case HOME   = 'home';
    case COMMON = 'common';

    case ABOUT  = 'about';

    case CONTACT = 'contact';

    case BLOG = 'blog';

    case HIRE = 'hire';
}
