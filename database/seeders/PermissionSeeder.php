<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'dashboard',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'view-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'create-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'store-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'edit-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-roles',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'view-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'create-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'store-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'edit-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-subadmins',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'view-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'create-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'store-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'edit-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-freezone-admin',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'view-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'create-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'store-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'edit-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'delete-freezones',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'view-freezone-info',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'edit-freezone-info',
            'type' => 'subadmin',
        ]);

        Permission::firstOrCreate([
            'name' => 'update-freezone-info',
            'type' => 'subadmin',
        ]);

        $customerPermissions = [[
                'name' => 'view-customers',
                'type' => 'subadmin',
            ],[
                'name' => 'create-customer',
                'type' => 'subadmin',
            ],[
                'name' => 'store-customer',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-customer',
                'type' => 'subadmin',
            ],[
                'name' => 'update-customer',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-customer',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($customerPermissions as $customerPermission) {
            Permission::firstOrCreate($customerPermission);
        }

        $leadPermissions = [[
                'name' => 'view-leads',
                'type' => 'subadmin',
            ],[
                'name' => 'create-lead',
                'type' => 'subadmin',
            ],[
                'name' => 'store-lead',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-lead',
                'type' => 'subadmin',
            ],[
                'name' => 'update-lead',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-lead',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($leadPermissions as $leadPermission) {
            Permission::firstOrCreate($leadPermission);
        }

        $offerPermissions = [[
                'name' => 'view-offers',
                'type' => 'subadmin',
            ],[
                'name' => 'create-offer',
                'type' => 'subadmin',
            ],[
                'name' => 'store-offer',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-offer',
                'type' => 'subadmin',
            ],[
                'name' => 'update-offer',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-offer',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($offerPermissions as $offerPermission) {
            Permission::firstOrCreate($offerPermission);
        }

        $testimonialPermissions = [[
                'name' => 'view-testimonials',
                'type' => 'subadmin',
            ],[
                'name' => 'create-testimonial',
                'type' => 'subadmin',
            ],[
                'name' => 'store-testimonial',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-testimonial',
                'type' => 'subadmin',
            ],[
                'name' => 'update-testimonial',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-testimonial',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($testimonialPermissions as $testimonialPermission) {
            Permission::firstOrCreate($testimonialPermission);
        }

        $blogs = [[
                'name' => 'view-blogs',
                'type' => 'subadmin',
            ],[
                'name' => 'create-blog',
                'type' => 'subadmin',
            ],[
                'name' => 'store-blog',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-blog',
                'type' => 'subadmin',
            ],[
                'name' => 'update-blog',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-blog',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($blogs as $blog) {
            Permission::firstOrCreate($blog);
        }

        $other_services = [[
                'name' => 'view-other-service',
                'type' => 'subadmin',
            ],[
                'name' => 'create-other-service',
                'type' => 'subadmin',
            ],[
                'name' => 'store-other-service',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-other-service',
                'type' => 'subadmin',
            ],[
                'name' => 'update-other-service',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-other-service',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($other_services as $other_service) {
            Permission::firstOrCreate($other_service);
        }


        $process_documents = [[
                'name' => 'view-process-document',
                'type' => 'subadmin',
            ],[
                'name' => 'create-process-document',
                'type' => 'subadmin',
            ],[
                'name' => 'store-process-document',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-process-document',
                'type' => 'subadmin',
            ],[
                'name' => 'update-process-document',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-process-document',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($process_documents as $process_document) {
            Permission::firstOrCreate($process_document);
        }

        $booking_documents = [[
                'name' => 'view-booking',
                'type' => 'subadmin',
            ],[
                'name' => 'view-booking-detail',
                'type' => 'subadmin',
            ],[
                'name' => 'send-document-request',
                'type' => 'subadmin',
            ],[
                'name' => 'store-document-request',
                'type' => 'subadmin',
            ],[
                'name' => 'reject-document',
                'type' => 'subadmin',
            ],[
                'name' => 'approve-document',
                'type' => 'subadmin',
            ]
        ];
        
        foreach ($booking_documents as $booking_document) {
            Permission::firstOrCreate($booking_document);
        }

        $categories = [[
                'name' => 'view-category',
                'type' => 'subadmin',
            ],[
                'name' => 'create-category',
                'type' => 'subadmin',
            ],[
                'name' => 'store-category',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-category',
                'type' => 'subadmin',
            ],[
                'name' => 'update-category',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-category',
                'type' => 'subadmin',
            ]
        ];

        foreach ($categories as $category) {
            Permission::firstOrCreate($category);
        }

        $static_pages = [[
                'name' => 'view-static-pages',
                'type' => 'subadmin',
            ],[
                'name' => 'create-static-page',
                'type' => 'subadmin',
            ],[
                'name' => 'store-static-page',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-static-page',
                'type' => 'subadmin',
            ],[
                'name' => 'update-static-page',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-static-page',
                'type' => 'subadmin',
            ]
        ];

        foreach ($static_pages as $static_page) {
            Permission::firstOrCreate($static_page);
        }

        $contactUss = [[
                'name' => 'view-contact',
                'type' => 'subadmin',
            ],[
                'name' => 'create-contact',
                'type' => 'subadmin',
            ],[
                'name' => 'store-contact',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-contact',
                'type' => 'subadmin',
            ],[
                'name' => 'update-contact',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-contact',
                'type' => 'subadmin',
            ]
        ];

        foreach ($contactUss as $contactUs) {
            Permission::firstOrCreate($contactUs);
        }


        $settings = [[
                'name' => 'view-setting',
                'type' => 'subadmin',
            ],[
                'name' => 'create-setting',
                'type' => 'subadmin',
            ],[
                'name' => 'store-setting',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-setting',
                'type' => 'subadmin',
            ],[
                'name' => 'update-setting',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-setting',
                'type' => 'subadmin',
            ]
        ];

        foreach ($settings as $setting) {
            Permission::firstOrCreate($setting);
        }

        $freezonePages = [[
                'name' => 'view-freezone-page',
                'type' => 'subadmin',
            ],[
                'name' => 'create-freezone-page',
                'type' => 'subadmin',
            ],[
                'name' => 'store-freezone-page',
                'type' => 'subadmin',
            ],[
                'name' => 'edit-freezone-page',
                'type' => 'subadmin',
            ],[
                'name' => 'update-freezone-page',
                'type' => 'subadmin',
            ],[
                'name' => 'delete-freezone-page',
                'type' => 'subadmin',
            ]
        ];

        foreach ($freezonePages as $freezonePage) {
            Permission::firstOrCreate($freezonePage);
        }

    }
}
