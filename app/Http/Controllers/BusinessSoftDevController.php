<?php

namespace App\Http\Controllers;

use SeoData;
use Illuminate\Http\Request;

class BusinessSoftDevController extends Controller
{
    function page(Request $request)
    {
        $seo = new SeoData(
            'Business Management Software Solution',
            'Streamline your business operations with custom software solutions tailored for tenant management, inventory management, store management, and more. Boost efficiency, scalability, and productivity with our professional PWA software.',
            'business management software, tenant management, inventory management, store management, HR software, accounting software, PWA solutions',
            'MD TAYOBUR RAHMAN',
            'https://mdtayoburrahman.com/business-management-software',
            'Professional Business Management Software Solutions',
            'assets/img/site_content/business-management.jpg',
            'We provide custom PWA software solutions for tenant management, inventory control, HR, and more to enhance your business operations.'
        );
    
        return view('pages.businessmanagement', ['seo' => $seo]);
    }
    
}
