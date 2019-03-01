<?php



use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder

{
    /**
     
     *Run the database seeds.
     
     *

     * @return void 


     */

public function run()

{
    \App\Setting::create([
    
        'site_name' => "Laravel's Blog",

        'address' => 'Nigeria, Apo',

        'contact_number' => '+23 470 8610 6891',

        'contact_email' => 'info@laravel_blog.com',
        
        'blog_content' => 'Welcome to Sonite Blog'
    
    
        ]);
    
    
    }
 
}