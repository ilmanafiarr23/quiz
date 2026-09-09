<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'kategori_id' => 1,
                'judul' => 'Teknologi Robot',
                'ringkasan' => 'Mengenal perkembangan teknologi Robot.',
                'isi' => 'Robot merupakan teknologi yang memungkinkan komputer melakukan berbagai tugas yang membutuhkan kecerdasan manusia.',
                'sumber' => 'robot.com',
                'status' => 'draft'
            ],

            [
                'kategori_id' => 1,
                'judul' => 'Teknologi Canggih',
                'ringkasan' => 'Teknologi canggih memberikan berbagai manfaat dalam proses pendidikan.',
                'isi' => 'Penggunaan teknologi dalam pendidikan dapat membantu proses pembelajaran menjadi lebih fleksibel dan interaktif.',
                'sumber' => 'canggih.com',
                'status' => 'published'
            ],

            [
                'kategori_id' => 2,
                'judul' => 'Di dunia yang malang ini...',
                'ringkasan' => 'Penjelasan mengenai cara hidup di dunia masa kini',
                'isi' => 'kehidupan masa kini adalah kehidupan yang keras, dan kita harus bertahan di dunia yang gila ini.',
                'sumber' => 'dunia.com',
                'status' => 'published'

            ],

            [
                'kategori_id' => 3,
                'judul' => 'Tips n Trick Business',
                'ringkasan' => 'Tips n Trick bisnis dalam menghadapi perkembangan teknologi digital.',
                'isi' => 'Bisnis dapat memanfaatkan teknologi digital untuk meningkatkan efisiensi dan menjangkau pelanggan yang lebih luas.',
                'sumber' => 'bisnis.com',
                'status' => 'draft'
            ],

            [
                'kategori_id' => 4,
                'judul' => 'Organ Dalam',
                'ringkasan' => 'Pentingnya menjaga Organ Dalam merupakan hal penting dalam kehidupan sehari-hari.',
                'isi' => 'Menjaga pola makan, berolahraga, dan beristirahat cukup dapat membantu menjaga kesehatan tubuh.',
                'sumber' => 'organ.com',
                'status' => 'published'
            ],
        ];

        DB::table('informasis')->insert($dataku);
    }
}
