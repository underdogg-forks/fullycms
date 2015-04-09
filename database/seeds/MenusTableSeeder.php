<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('menus')->truncate();

        DB::table('menus')->insert(array(
            array(
                'title'        => 'Ana Sayfa',
                'url'          => '/',
                'order'        => 1,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'home',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Haberler',
                'url'          => '/tr/news',
                'order'        => 2,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Blog',
                'url'          => '/tr/article',
                'order'        => 3,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'blog',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Projeler',
                'url'          => '/tr/project',
                'order'        => 4,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'project',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Videolar',
                'url'          => '/tr/video',
                'order'        => 5,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'video',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Hakkımızda',
                'url'          => '/tr/page/' . Str::slug('Hakkımızda'),
                'order'        => 6,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'page',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'SSS',
                'url'          => '/tr/faq',
                'order'        => 7,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'faq',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'İletişim',
                'url'          => '/tr/contact',
                'order'        => 8,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'contact',
                'is_published' => true,
                'lang'         => 'tr',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Home',
                'url'          => '/',
                'order'        => 9,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'home',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'News',
                'url'          => '/en/news',
                'order'        => 10,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Blog',
                'url'          => '/en/article',
                'order'        => 11,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'blog',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Projects',
                'url'          => '/en/project',
                'order'        => 12,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'project',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Videos',
                'url'          => '/en/video',
                'order'        => 13,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'video',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Faq',
                'url'          => '/en/faq',
                'order'        => 14,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'faq',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Contact Us',
                'url'          => '/en/contact',
                'order'        => 15,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'contact',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            )
        ));
    }
}
