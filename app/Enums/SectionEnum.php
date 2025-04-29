<?php

namespace App\Enums;

enum SectionEnum: string
{
    const BG = 'bg_image';

    case HOME_BANNER = 'home_banner';
    case HOME_BANNERS = 'home_banners';

    case ABOUT_BANNER = 'about_banner';
    case ABOUT_BANNERS = 'about_banners';

     case CONTACT_BANNER = 'contact_banner';
    case CONTACT_BANNERS = 'contact_banners';

    case BLOG_BANNER = 'blog_banner';
    case BLOG_BANNERS = 'blog_banners';

    case HIRE_BANNER = 'hire_banner';
    case HIRE_BANNERS = 'hire_banners';


    case ABOUT_SERVICE_CONTAINER = 'about_service_container';
    case ABOUT_SERVICE_CONTAINERS = 'about_service_containers';
    case ABOUT_SERVICE = 'about_service';

    case ABOUT_COMPANY_CONTAINER = 'about_company_container';
    case ABOUT_COMPANY_CONTAINERS = 'about_company_containers';
    case ABOUT_COMPANY = 'about_company';


    case ABOUT_MISSION_CONTAINER = 'about_mission_container';
    case ABOUT_MISSION_CONTAINERS = 'about_mission_containers';
    case ABOUT_MISSION = 'about_mission';


    case ABOUT_WE_CONTAINER = 'about_we_container';
    case ABOUT_WE_CONTAINERS = 'about_we_containers';
    case ABOUT_WE = 'about_we';
    

    case ABOUT_CLEANING_CONTAINER = 'about_cleaning_container';
    case ABOUT_CLEANING_CONTAINERS = 'about_cleaning_containers';
    case ABOUT_CLEANING = 'about_cleaning';


    case ABOUT_OFFICE_CONTAINER = 'about_office_container';
    case ABOUT_OFFICE_CONTAINERS = 'about_office_containers';
    case ABOUT_OFFICE = 'about_office';


    case ABOUT_INTERIOR_CONTAINER = 'about_interior_container';
    case ABOUT_INTERIOR_CONTAINERS = 'about_interior_containers';
    case ABOUT_INTERIOR = 'about_interior';

    case HIRE_COMMENT_CONTAINER = 'hire_committed_container';
    case HIRE_COMMENT_CONTAINERS = 'hire_committed_containers';
    case HIRE_COMMENT = 'hire_comment';







    case HERO = 'hero';
    case HEROS = 'heros';

    //Footer
    case FOOTER = 'footer';
    case SOLUTION = "solution";
    
}
