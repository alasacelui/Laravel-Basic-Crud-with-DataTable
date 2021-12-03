<?php

namespace Database\Seeders;

use App\Models\Admin\JobPost;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a dummy data ( Job Posts Dummy Data)   on migration    
        $job_posts = array(
            ['title' => 'Sample Job Post', 'description' => 'Sample Description', 'created_at' => now()],
            ['title' => 'Sample Job Post Two', 'description' => 'Sample Description Two', 'created_at' => now()],
            ['title' => 'Sample Job Post Three', 'description' => 'Sample Description Three', 'created_at' => now()],
        );

        JobPost::insert($job_posts);
        
    }
}
