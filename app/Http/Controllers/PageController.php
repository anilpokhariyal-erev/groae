<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function onboarding()
    {
        return view('page.onboarding');
    }
    public function forgot_password()
    {
        return view('page.forgot_password');
    }
    public function reset_password()
    {
        return view('page.reset_password');
    }
    public function signup()
    {
        return view('page.signup');
    }
    public function search_result()
    {
        return view('page.search_result');
    }
    public function article_blogs()
    {
        return view('page.article_blogs');
    }
    public function blog_details()
    {
        return view('page.blog_details');
    }
    public function explore_freezone()
    {
        return view('page.explore_freezone');
    }
    public function compare_freezone()
    {
        return view('page.compare_freezone');
    }
    public function trending_freezone()
    {
        return view('page.trending_freezone');
    }
    public function about_us()
    {
        return view('page.detail_page.about_us');
    }
    public function benefits_details()
    {
        return view('page.detail_page.benefits_details');
    }
    public function business_licenses_information()
    {
        return view('page.detail_page.business_licenses_information');
    }
    public function customer_guides()
    {
        return view('page.detail_page.customer_guides');
    }
    public function rules_regulation()
    {
        return view('page.detail_page.rules_regulation');
    }
    public function facilities()
    {
        return view('page.detail_page.facilities');
    }
    public function activities_information()
    {
        return view('page.detail_page.activities_information');
    }
    public function faq()
    {
        return view('page.detail_page.faq');
    }
    public function view_lowestprice()
    {
        return view('page.detail_page.view_lowestprice');
    }

    public function my_profile()
    {
        return view('page.my_account.my_profile');
    }
    public function my_businessSetup()
    {
        return view('page.my_account.my_businessSetup');
    }
    public function my_uploads()
    {
        return view('page.my_account.my_uploads');
    }
    public function my_transactions()
    {
        return view('page.my_account.my_transactions');
    }
    public function my_downloads()
    {
        return view('page.my_account.my_downloads');
    }
    public function my_settings()
    {
        return view('page.my_account.my_settings');
    }
    public function pre_postinfo()
    {
        return view('page.pre_postinfo');
    }
    public function pre_postdetail()
    {
        return view('page.pre_postdetail');
    }

    public function calculate_licensecost()
    {
        return view('page.cost_calculator.calculate_licensecost');
    }

    public function cost_summary()
    {
        return view('page.cost_calculator.cost_summary');
    }
    public function payment()
    {
        return view('page.payment.payment');
    }
    public function payment_mode()
    {
        return view('page.payment.payment_mode');
    }
    public function payment_method()
    {
        return view('page.payment.payment_method');
    }
    public function payment_confirmation()
    {
        return view('page.payment.payment_confirmation');
    }
    public function contact_us()
    {
        return view('page.contact_us');
    }
}
