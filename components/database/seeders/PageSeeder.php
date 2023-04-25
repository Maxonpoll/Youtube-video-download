<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Page;
use App\Models\Admin\PageTranslation;
use File, DateTime;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = File::get('components/database/contents/pages.json');

        $pages = json_decode($pages);
        
        foreach ($pages as $page) {

          switch ( $page->type ) {

            case 'default': 
            case 'home':
            case 'downloader':

                Page::create(array(
                            "id"             => $page->id,
                            "slug"           => $page->slug,
                            "type"           => $page->type,
                            "featured_image" => asset('assets/img/nastuh.jpg'),
                            "created_at"     => new DateTime()
                        ));

                foreach ($page->translations as $pageTran) {

                     PageTranslation::create([
                        "locale"            => $pageTran->locale,
                        "title"             => $pageTran->title,
                        "subtitle"          => $pageTran->subtitle,
                        "short_description" => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        "description"       => 'Y2load allows you to convert & download videos from YouTube, Facebook, Instagram, Twitter, Vlive, Soundcloud, Tiktok, Vimeo etc. to Mp3, Mp4 in HD quality. Y2load supports downloading all video formats such as: MP4, M4V, 3GP, WMV, FLV, MO, MP3, WEBM, etc. You can easily download for free thousands of videos from YouTube and other websites..',
                        "page_id"           => $page->id
                    ]);

                }

              break;

            case '404':

                Page::create(array(
                            "id"             => $page->id,
                            "slug"           => $page->slug,
                            "type"           => $page->type,
                            "featured_image" => asset('assets/img/illustrations/error-404.png'),
                            "created_at"     => new DateTime()
                        ));

                foreach ($page->translations as $pageTran) {

                     PageTranslation::create([
                        "locale"            => $pageTran->locale,
                        "title"             => $pageTran->title,
                        "subtitle"          => $pageTran->subtitle,
                        "short_description" => $pageTran->short_description,
                        "description"       => $pageTran->description,
                        "page_id"           => $page->id
                    ]);

                }

              break;

            default:

                Page::create(array(
                  "id"                => $page->id,
                  "slug"              => $page->slug,
                  "type"              => $page->type,
                  "featured_image"    => asset('assets/img/nastuh.jpg'),
                  "created_at"        => new DateTime()
                ));

                foreach ($page->translations as $pageTran) {

                     PageTranslation::create([
                        "locale"            => $pageTran->locale,
                        "title"             => $pageTran->title,
                        "subtitle"          => $pageTran->subtitle,
                        "short_description" => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        "description"       => 'Download Youtube videos with Y2load YouTube Downloader. By using our downloader you can easily convert YouTube videos to MP3, MP4, 3GP, WEBM, M4A files.. and download them for free - this service works for computers, tablets and mobile devices. The videos are always converted in the highest available quality..',
                        "page_id"           => $page->id
                    ]);

                }

              break;
          }

        }
    }
}
