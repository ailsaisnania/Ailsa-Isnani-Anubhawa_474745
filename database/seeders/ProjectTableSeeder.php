<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    private $_projects = [
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(1).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(2).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(3).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(4).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(5).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(6).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(7).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(8).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(9).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(10).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(11).jpg"],
        ["title" => "Lorem Ipsum", "subtitle" => "Lorem Ipsum Dolor Sit Amet", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh tellus, tempor eget urna sit amet, euismod lobortis augue. Pellentesque non dictum nulla. Sed sed quam ante. Donec consectetur felis lacus, in semper urna maximus id. Praesent hendrerit, mauris at lacinia mollis, lectus erat feugiat mauris, sit amet placerat mi libero sit amet dui. ", "picture" => "pic(1).jpg"]

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_projects as $project){
            $data[] = [
                'title' => $project['title'],
                'subtitle' => $project['subtitle'],
                'description' => $project['description']
            ];
        }
        DB::table('projects')->insert($data);
    }
}