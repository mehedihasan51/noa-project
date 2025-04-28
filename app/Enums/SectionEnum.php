<?php

namespace App\Enums;

enum SectionEnum: string
{
    const BG = 'bg_image';

    case HOME_BANNER = 'home_banner';
    case HOME_BANNERS = 'home_banners';

    case ABOUT_BANNER = 'about_banner';
    case ABOUT_BANNERS = 'about_banners';


    case ABOUT_SERVICE_CONTAINER = 'about_service_container';
    case ABOUT_SERVICE_CONTAINERS = 'about_service_containers';
    case ABOUT_SERVICE = 'about_service';

    case ABOUT_COMPANY_CONTAINER = 'about_company_container';
    case ABOUT_COMPANY_CONTAINERS = 'about_company_containers';
    case ABOUT_COMPANY = 'about_company';
    
    case HERO = 'hero';
    case HEROS = 'heros';

    //Footer
    case FOOTER = 'footer';
    case SOLUTION = "solution";
    
}
