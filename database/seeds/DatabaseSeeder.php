<?php

use Illuminate\Database\Seeder;
use App\HoToc;
use App\HoSo;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $hoToc = HoToc::create(['ma_ho_toc' => 'NGUYEN','ten_ho_toc'=>'Gia Tộc Họ Nguyễn']);
        $hoSo = HoSo::create(['id_ho_toc'=> 1,
            'ma_ho_so'=> 1,
            'cap_ho_so' => 0,
            'ho_ten' => 'Nguyễn Văn Trưởng',
            'ngay_sinh' => '2017-08-20',
            'gioi_tinh' => true,
            'con_thu' => 1,
            'noi_sinh' => 'Quảng Bình',
            'dia_chi' => 'Quảng Bình',
            'so_lien_lac' => '',
            'dan_toc' => '',
            'ton_giao' => '',
            'ngay_mat_dl' => '2017-08-20',
            'ngay_mat_al' => '2017-08-20',
            'da_mat' => true
        ]);
        $hoSo = HoSo::create(['id_ho_toc'=> 1,
            'ma_ho_so_bo_me' => 1,
            'ma_ho_so'=> 2,
            'cap_ho_so' => 0,
            'ho_ten' => 'Nguyễn Văn Phó',
            'ngay_sinh' => '2017-08-20',
            'gioi_tinh' => true,
            'con_thu' => 1,
            'noi_sinh' => 'Quảng Bình',
            'dia_chi' => 'Quảng Bình',
            'so_lien_lac' => '',
            'dan_toc' => '',
            'ton_giao' => '',
            'ngay_mat_dl' => '2017-08-20',
            'ngay_mat_al' => '2017-08-20',
            'da_mat' => true
        ]);
        $hoSo = HoSo::create(['id_ho_toc'=> 1,
            'ma_ho_so_bo_me' => 2,
            'ma_ho_so'=> 3,
            'cap_ho_so' => 0,
            'ho_ten' => 'Nguyễn Văn Tam',
            'ngay_sinh' => '2017-08-20',
            'gioi_tinh' => true,
            'con_thu' => 1,
            'noi_sinh' => 'Quảng Bình',
            'dia_chi' => 'Quảng Bình',
            'so_lien_lac' => '',
            'dan_toc' => '',
            'ton_giao' => '',
            'ngay_mat_dl' => '2017-08-20',
            'ngay_mat_al' => '2017-08-20',
            'da_mat' => true
        ]);

        $hoSo = HoSo::create(['id_ho_toc'=> 1,
            'ma_ho_so_bo_me' => 2,
            'ma_ho_so'=> 5,
            'cap_ho_so' => 0,
            'ho_ten' => 'Nguyễn Văn Ngũ',
            'ngay_sinh' => '2017-08-20',
            'gioi_tinh' => true,
            'con_thu' => 1,
            'noi_sinh' => 'Quảng Bình',
            'dia_chi' => 'Quảng Bình',
            'so_lien_lac' => '',
            'dan_toc' => '',
            'ton_giao' => '',
            'ngay_mat_dl' => '2017-08-20',
            'ngay_mat_al' => '2017-08-20',
            'da_mat' => true
        ]);
        $hoSo = HoSo::create(['id_ho_toc'=> 1,
            'ma_ho_so_bo_me' => 3,
            'ma_ho_so'=> 4,
            'cap_ho_so' => 0,
            'ho_ten' => 'Nguyễn Văn Tứ',
            'ngay_sinh' => '2017-08-20',
            'gioi_tinh' => true,
            'con_thu' => 1,
            'noi_sinh' => 'Quảng Bình',
            'dia_chi' => 'Quảng Bình',
            'so_lien_lac' => '',
            'dan_toc' => '',
            'ton_giao' => '',
            'ngay_mat_dl' => '2017-08-20',
            'ngay_mat_al' => '2017-08-20',
            'da_mat' => true
        ]);
    }
}
