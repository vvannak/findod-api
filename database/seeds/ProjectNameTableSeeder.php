<?php

use Illuminate\Database\Seeder;

class ProjectNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProjectName::query()->delete();
        DB::table('project_name')->insert([
            ['id' => 1, 'lat' => 11.547638, 'lng' => 104.937958, 'address' => 'Elite Town Phnom Penh', 'hotline' => '', 'tower' => 0, 'floor' => '', 'floor_category_id' => 1],
            ['id' => 2, 'lat' => 11.548423, 'lng' => 104.937532, 'address' => 'CASA by Meridian, No. 1, Harvard Street, Diamond Island, Tonle Bassac, Chamkamor, Phnom Penh', 'hotline' => '023 900 989', 'tower' => 1, 'floor' => '33', 'floor_category_id' => 3],
            ['id' => 3, 'lat' => 11.548829, 'lng' => 104.938608, 'address' => 'Ca & Sa Building , Koh pich', 'hotline' => '086 600 390', 'tower' => 1, 'floor' => '', 'floor_category_id' => 1],
            ['id' => 4, 'lat' => 11.552168, 'lng' => 104.942752, 'address' => 'D.I Riviera , Koh Pich St Phnom Penh', 'hotline' => '023 666 2222', 'tower' => 4, 'floor' => '', 'floor_category_id' => 1],
            ['id' => 5, 'lat' => 11.540318, 'lng' => 104.930130, 'address' => 'Basac Garden City Preah Norodom Blvd (41) Phnom Penh', 'hotline' => '023 471 8888', 'tower' => 0, 'floor' => '', 'floor_category_id' => 1],
            ['id' => 6, 'lat' => 11.543739, 'lng' => 104.931269, 'address' => 'Block 252, Norodom Blvd, Sangkat Tonle Bassac, Khan Chamkarmorn, Phnom Penh, Cambodia', 'hotline' => '023 72 72 03', 'tower' => 4, 'floor' => '', 'floor_category_id' => 1],
            ['id'=>	7, 'lat'=>	11.551811, 'lng'=>	 104.936428, 'address'=>'No 14, National Assembly Street, Tonle Bassac Commune, Chamkarmorn District', 'hotline'=>'023 212 697', 'tower'=>	2, 'floor'=>'45', 'floor_category_id'=>	3],
['id'=>	8, 'lat'=>	11.551955, 'lng'=>	 104.939809, 'address'=>'Street Koh Pich, Tonle Bassac, Chamkarmon, Phnom Penh', 'hotline'=>'023 527 766 6', 'tower'=>	2, 'floor'=>'32', 'floor_category_id'=>	3],
['id'=>	9, 'lat'=>	11.555111, 'lng'=>	 104.930372, 'address'=>'No.1B, St.21, Sangkat Tonle Bassac, Khan Chamkamorn, Phnom Penh', 'hotline'=>'023 221 326', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	10, 'lat'=>	11.547283, 'lng'=>	 104.930723, 'address'=>'#83B, Sothearos Blvd, Tonle Bassac, Khan Chamkamorn, Phnom Penh', 'hotline'=>'023 210 666', 'tower'=>	1, 'floor'=>'36', 'floor_category_id'=>	3],
['id'=>	11, 'lat'=>	11.548542, 'lng'=>	 104.929756, 'address'=>'53 St 21 Tonle Bassac, Khan Chamkamorn, Phnom Penh 12301', 'hotline'=>'017 445 083', 'tower'=>	1, 'floor'=>'14', 'floor_category_id'=>	2],
['id'=>	12, 'lat'=>	11.552942, 'lng'=>	 104.932091, 'address'=>'59B Samdach Sothearos Blvd (3), Phnom Penh', 'hotline'=>'023 210 607', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	13, 'lat'=>	11.559654, 'lng'=>	 104.928047, 'address'=>'50B, 240 Oknha Chhun St. (240), Phnom Penh', 'hotline'=>'0 23 996 240', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	14, 'lat'=>	11.554412, 'lng'=>	 104.921982, 'address'=>'St.282, BKK1, hamkarmon, Phnom Penh.', 'hotline'=>'097 290 0805', 'tower'=>	1, 'floor'=>'32', 'floor_category_id'=>	3],
['id'=>	15, 'lat'=>	11.554967, 'lng'=>	 104.925556, 'address'=>'No. 17, Lovieem (St. 282), 12302 Phnom Penh, Cambodia', 'hotline'=>'016 889 929', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	16, 'lat'=>	11.554273, 'lng'=>	 104.925623, 'address'=>'Building No 7,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'012 212 131', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	17, 'lat'=>	11.553840, 'lng'=>	 104.924282, 'address'=>'St.288,Boeng Keng Kong 1, Chamkarmon, Phnom Penh', 'hotline'=>'016 299 993', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	18, 'lat'=>	11.553579, 'lng'=>	 104.922678, 'address'=>'St 288, Phnom Penh', 'hotline'=>'011 829 552', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	19, 'lat'=>	11.553304, 'lng'=>	 104.921671, 'address'=>'No. 34-36, St. 288,BKK1, Chamkarmon, Phnom Penh.', 'hotline'=>'023 900 081', 'tower'=>	1, 'floor'=>'32', 'floor_category_id'=>	3],
['id'=>	20, 'lat'=>	11.552946, 'lng'=>	 104.927116, 'address'=>'St.302, BKK1, Chamkarmon, Phnom Penh.', 'hotline'=>'015 955 266', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	21, 'lat'=>	11.553085, 'lng'=>	 104.925920, 'address'=>' 24Eo Street 302, Phnom Penh', 'hotline'=>'015 633 066', 'tower'=>	1, 'floor'=>'14', 'floor_category_id'=>	2],
['id'=>	22, 'lat'=>	11.550705, 'lng'=>	 104.925605, 'address'=>'# 24-26, Corner of 322 Street and 57 Street, BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'023 726 606 ', 'tower'=>	1, 'floor'=>'9', 'floor_category_id'=>	1],
['id'=>	23, 'lat'=>	11.551139, 'lng'=>	 104.926144, 'address'=>'No. 17, St. 322, BKK1, Chamkarmon, Phnom Penh.', 'hotline'=>'023 214 246', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	24, 'lat'=>	11.550143, 'lng'=>	 104.926435, 'address'=>'#72 STREET 334,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'023 5555 365', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	25, 'lat'=>	11.550189, 'lng'=>	 104.925913, 'address'=>'STREET 334,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'023 923 777', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	26, 'lat'=>	11.549155, 'lng'=>	 104.922190, 'address'=>'No.51&No.53 St. 352,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'023 966 886', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	27, 'lat'=>	11.548941, 'lng'=>	 104.923343, 'address'=>' St. 352,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'012 444 371', 'tower'=>	1, 'floor'=>'21', 'floor_category_id'=>	2],
['id'=>	28, 'lat'=>	11.548457, 'lng'=>	 104.925866, 'address'=>'No. 24, St. 360, BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'012 850 297', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	29, 'lat'=>	11.547809, 'lng'=>	 104.922559, 'address'=>'St 71,BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'023 21 80 68 ', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	30, 'lat'=>	11.547431, 'lng'=>	 104.924467, 'address'=>'No. 230-232, Trasak Paem (St. 63)', 'hotline'=>'012 267 719', 'tower'=>	2, 'floor'=>'6', 'floor_category_id'=>	1],
['id'=>	31, 'lat'=>	11.548015, 'lng'=>	 104.927175, 'address'=>'No. 255, Pasteur (St. 51), Corner of St. 370', 'hotline'=>'012 831 515', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	32, 'lat'=>	11.544825, 'lng'=>	 104.924595, 'address'=>'#251, Preah Trasak Paem St. (63) corner St.(400), Phnom Penh', 'hotline'=>'023 959 959', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	33, 'lat'=>	11.544286, 'lng'=>	 104.922738, 'address'=>'Mao Tse Tong Blvd, BKK1, Chamkarmon, Phnom Penh', 'hotline'=>'089 777 307', 'tower'=>	1, 'floor'=>'21', 'floor_category_id'=>	2],
['id'=>	34, 'lat'=>	11.555371, 'lng'=>	 104.921069, 'address'=>'Preah Sihanouk Blvd (274), Corner of Preah Monivong (St. 93)', 'hotline'=>'023 994 433', 'tower'=>	1, 'floor'=>'42', 'floor_category_id'=>	3],
['id'=>	35, 'lat'=>	11.554106, 'lng'=>	 104.915199, 'address'=>'St 151, BKK3,Phnom Penh', 'hotline'=>'012 622 666', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	36, 'lat'=>	11.551661, 'lng'=>	 104.918605, 'address'=>'No. 212, Street 304, Boueng Keng Kang 2', 'hotline'=>'093 699976', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	37, 'lat'=>	11.551370, 'lng'=>	 104.917750, 'address'=>'No. 25A, St. 113, Sangkat Boeung Keng Kang II, Khan Chamkar Morn', 'hotline'=>'092 352 353', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	38, 'lat'=>	11.551462, 'lng'=>	 104.917838, 'address'=>'No. 23A, St. 113, Corner of St. 304, Sangkat Boeung Keng Kang II', 'hotline'=>'023 6666 719', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	39, 'lat'=>	11.551352, 'lng'=>	 104.916498, 'address'=>'No. 233, St. 304, Brown Building, Sangkat Boeung Keng Kang II, Khan Chamkar Morn', 'hotline'=>'016 642 897', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	40, 'lat'=>	11.549567, 'lng'=>	 104.915036, 'address'=>'No.14A, Street.330, BKKIII, Phnom Penh', 'hotline'=>'069 848 388', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	41, 'lat'=>	11.548663, 'lng'=>	 104.914725, 'address'=>'No.71, street 350, BKK3, Phnom Penh ', 'hotline'=>' 017 535388', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	42, 'lat'=>	11.545138, 'lng'=>	 104.917864, 'address'=>'No. 159-161, St. 113, Phnom Penh 12304', 'hotline'=>'011 333 366', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	43, 'lat'=>	11.561690, 'lng'=>	 104.912677, 'address'=>'Charles de Gaulle Blvd (217), Sangkat Veal Vong, Khan 7Makara, Phnom Penh Cambodia.', 'hotline'=>'023 222 208', 'tower'=>	6, 'floor'=>'60', 'floor_category_id'=>	3],
['id'=>	44, 'lat'=>	11.556249, 'lng'=>	 104.913847, 'address'=>'St.274, Sangkat Veal Vong, Khan 7Makara, Phnom Penh', 'hotline'=>'023 883 905', 'tower'=>	1, 'floor'=>'35', 'floor_category_id'=>	3],
['id'=>	45, 'lat'=>	11.557681, 'lng'=>	 104.915269, 'address'=>'No. 5, st, 236, community vea vong, Phnom Penh', 'hotline'=>'011 888 725', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	46, 'lat'=>	11.558184, 'lng'=>	 104.916127, 'address'=>'St 232, Phnom Penh', 'hotline'=>'017 859 989', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	47, 'lat'=>	11.558563, 'lng'=>	 104.917263, 'address'=>'st 115, #48 sang kat beong prolit, khan 7makara, phnom penh.', 'hotline'=>'023 9999 88', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	48, 'lat'=>	11.558469, 'lng'=>	 104.917572, 'address'=>'St 113, Phnom Penh', 'hotline'=>'023 999 988', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	49, 'lat'=>	11.558788, 'lng'=>	 104.918987, 'address'=>'No.43, St. 105, Beoung Pralit, 7 Maraka, Phnom Penh', 'hotline'=>'023 225 858', 'tower'=>	1, 'floor'=>'9', 'floor_category_id'=>	1],
['id'=>	50, 'lat'=>	11.558364, 'lng'=>	 104.919926, 'address'=>'#445, Monivong Blvd, Sangkat Boeung Pralit, Khan 7 makara, Phnom Penh', 'hotline'=>'012 567 252', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	51, 'lat'=>	11.547168, 'lng'=>	 104.908803, 'address'=>'Land#124, St.388,, Sangkat Tuol Svay Prey I, Khan Chomkamon, Phnom Penh', 'hotline'=>'016 968 355', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	52, 'lat'=>	11.546949, 'lng'=>	 104.909584, 'address'=>'#156, St 388, Phnom Penh', 'hotline'=>'097 909 0311', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	53, 'lat'=>	11.548013, 'lng'=>	 104.909292, 'address'=>'No. 21-25, St. 384, 12308 Phnom Penh, Cambodia', 'hotline'=>'023 987 269', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	54, 'lat'=>	11.561050, 'lng'=>	 104.935822, 'address'=>'313 Sisowath Quay,Phnom Penh 12207, Cambodia', 'hotline'=>'023 214 555', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	55, 'lat'=>	11.560879, 'lng'=>	 104.933302, 'address'=>'No. 56, Sothearos(3), Phnom Penh 12207', 'hotline'=>'011 886 440', 'tower'=>	1, 'floor'=>'7', 'floor_category_id'=>	1],
['id'=>	56, 'lat'=>	11.564869, 'lng'=>	 104.926024, 'address'=>'No 64, Preah Norodom Blvd, Corner St.178, Phnom Penh', 'hotline'=>'', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	57, 'lat'=>	11.561981, 'lng'=>	 104.926451, 'address'=>'#95 Norodom Boulevard, Phnom Penh', 'hotline'=>'023 222 500', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	58, 'lat'=>	11.558320, 'lng'=>	 104.931400, 'address'=>'No. 10B, St.264, Chaktomok 12207', 'hotline'=>'023 987 212', 'tower'=>	1, 'floor'=>'9', 'floor_category_id'=>	1],
['id'=>	59, 'lat'=>	11.556726, 'lng'=>	 104.921656, 'address'=>'#6, Str. 178, Sangkat Phsar Thmey 3, khan Daun Penh, Phnom Penh', 'hotline'=>'023 223 363', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	60, 'lat'=>	11.560704, 'lng'=>	 104.921035, 'address'=>'78, Samdach Chakrei Ponn St. (208), Sangkat Boeng Reang, Phnom Penh', 'hotline'=>'023 217 712', 'tower'=>	1, 'floor'=>'8', 'floor_category_id'=>	1],
['id'=>	61, 'lat'=>	11.564981, 'lng'=>	 104.919343, 'address'=>'Preah Monivong Blvd (93), Phnom Penh', 'hotline'=>'023 221 843', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	62, 'lat'=>	11.565235, 'lng'=>	 104.919646, 'address'=>'No.5, 81 Ung Pokun (St. 109), Phnom Penh', 'hotline'=>'023 214 733', 'tower'=>	1, 'floor'=>'4', 'floor_category_id'=>	1],
['id'=>	63, 'lat'=>	11.565343, 'lng'=>	 104.921505, 'address'=>'#87, Street 63, Sangkat Boeung Raing, Khan Daun Penh, (near Street 172), Phnom Penh', 'hotline'=>'023 525 0777', 'tower'=>	1, 'floor'=>'17', 'floor_category_id'=>	2],
['id'=>	64, 'lat'=>	11.570967, 'lng'=>	 104.918869, 'address'=>'No. 2C, Vivadhapura (St. 120), 12209 Phnom Penh', 'hotline'=>'023 722 250', 'tower'=>	1, 'floor'=>'8', 'floor_category_id'=>	1],
['id'=>	65, 'lat'=>	11.572151, 'lng'=>	 104.918697, 'address'=>'315, Ang Duong Street (Corner of Monivong Boulevard) , Phnom Penh', 'hotline'=>'023 686 0506', 'tower'=>	1, 'floor'=>'33', 'floor_category_id'=>	3],
['id'=>	66, 'lat'=>	11.573427, 'lng'=>	 104.918696, 'address'=>'Preah Ang Non (St. 102), Phnom Penh', 'hotline'=>'023 938 888', 'tower'=>	2, 'floor'=>'39', 'floor_category_id'=>	3],
['id'=>	67, 'lat'=>	11.573973, 'lng'=>	 104.918897, 'address'=>'A-One Building, No. 1A, St. 102 Sangkat Wat Phnom, Khan Daun Penh Phnom Penh Cambodia', 'hotline'=>'023 986 810', 'tower'=>	1, 'floor'=>'10', 'floor_category_id'=>	1],
['id'=>	68, 'lat'=>	11.574166, 'lng'=>	 104.919315, 'address'=>'1A Preah Ang Non (St. 102), Phnom Penh', 'hotline'=>'023 986 810', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	69, 'lat'=>	11.580790, 'lng'=>	 104.918329, 'address'=>'#5E0B, St. 84 corner 65, Srass Chork, Daun Penh, Phnom Penh.', 'hotline'=>'077 898 789', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	70, 'lat'=>	11.580362, 'lng'=>	 104.917890, 'address'=>'No. 15 Botum Soriyavong, Sangkat Srah Chork, Khan Daun Penh, Phnom Penh', 'hotline'=>'023 992 328', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	71, 'lat'=>	11.582567, 'lng'=>	 104.916769, 'address'=>'1 Preah Monivong Blvd (93), Phnom Penh 12201, Phnom Penh', 'hotline'=>'011 366 776', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	72, 'lat'=>	11.564959, 'lng'=>	 104.922314, 'address'=>'No 69 St 174, Sangkat Phsar Thmey III, Phnom Penh 00000', 'hotline'=>'023 988 888', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	73, 'lat'=>	11.561069, 'lng'=>	 104.924402, 'address'=>'Phnom Penh, TitleDeed No 62 Street No.214, Phum 2, Sangkat Boeng Rang, Khan Daun Penh', 'hotline'=>'023 623 2828', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	74, 'lat'=>	11.560904, 'lng'=>	 104.925845, 'address'=>'#16A/B, Street 214, Sangkat Beoung Raing, Khan Daun Penh, 12207, Phnom Penh', 'hotline'=>'023 985 959', 'tower'=>	1, 'floor'=>'13', 'floor_category_id'=>	2],
['id'=>	75, 'lat'=>	11.559441, 'lng'=>	 104.925350, 'address'=>'#51, St. Pasteur (51), Phnom Penh', 'hotline'=>'023 998 555', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	76, 'lat'=>	11.563854, 'lng'=>	 104.922022, 'address'=>'Street. 63 (Preah Trasak Paem) Corner street 178 (Preah SokunMeanbon), Sangkat Phsar thmey III, Khan Doun Penh, Phnom Penh 12210', 'hotline'=>'089 999 222', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	77, 'lat'=>	11.563854, 'lng'=>	 104.922479, 'address'=>'#6, Samdach Preah Sokun Meanbon St. (178), Phnom Penh', 'hotline'=>'098 855 054', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	78, 'lat'=>	11.567713, 'lng'=>	 104.914912, 'address'=>'134, Phnom Penh', 'hotline'=>'096 588 1537', 'tower'=>	2, 'floor'=>'39', 'floor_category_id'=>	3],
['id'=>	79, 'lat'=>	11.567206, 'lng'=>	 104.911258, 'address'=>'No. 144, Tchecoslovaquie Blvd (169), corner of St. 134, 12253 Phnom Penh', 'hotline'=>'098 335 266', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	80, 'lat'=>	11.559689, 'lng'=>	 104.908182, 'address'=>'No. 166, Jawaharlal Nehru Blvd (215)', 'hotline'=>'023 886 886', 'tower'=>	2, 'floor'=>'13', 'floor_category_id'=>	2],
['id'=>	81, 'lat'=>	11.561508, 'lng'=>	 104.901349, 'address'=>'CITY TOWER #321, Mao Tse Toung Blvd, Phsar depo 1 - Khan Toul Kork, Phnom Penh 12153', 'hotline'=>'023 211 556', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	82, 'lat'=>	11.558758, 'lng'=>	 104.906741, 'address'=>'#63, St 219, Phnom Penh', 'hotline'=>'012 727 476', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	83, 'lat'=>	11.582102, 'lng'=>	 104.911637, 'address'=>'City Center Boulvard | Sangkat Sras Chork | Khan Daun Penh | Phnom Penh |, Phnom Penh', 'hotline'=>'023 888 808', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	84, 'lat'=>	11.574860, 'lng'=>	 104.906726, 'address'=>'No.58, St.R8 Sangkat Srah Chas, Khan Doun Penh, Phnom Penh', 'hotline'=>'023 883 438', 'tower'=>	22, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	85, 'lat'=>	11.577715, 'lng'=>	 104.902585, 'address'=>'11A, Street 564, Boeung Kak 1, Toul Kok District, Phnom Penh, Kingdom of Cambodia', 'hotline'=>' 023 883 840', 'tower'=>	1, 'floor'=>'7', 'floor_category_id'=>	1],
['id'=>	86, 'lat'=>	11.576644, 'lng'=>	 104.894179, 'address'=>'st.584, TK, Phnom Penh', 'hotline'=>'097 757 5893', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	87, 'lat'=>	11.574184, 'lng'=>	 104.894799, 'address'=>'No. 28Z, St. 592, Corner St. 307, Phnom Penh 12152', 'hotline'=>'012 810 970', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	88, 'lat'=>	11.574303, 'lng'=>	 104.894193, 'address'=>'No.36, Small road with St. 592, Sangkat Boeung Kok II, Phnom Penh, Phnom Penh', 'hotline'=>'077 766 866', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	89, 'lat'=>	11.572092, 'lng'=>	 104.888877, 'address'=>'158 St 315, Phnom Penh', 'hotline'=>'023 212 815/023212555', 'tower'=>	1, 'floor'=>'20', 'floor_category_id'=>	2],
['id'=>	90, 'lat'=>	11.571829, 'lng'=>	 104.889377, 'address'=>'71 Street 313, Phnom Penh', 'hotline'=>'023 647 7777', 'tower'=>	1, 'floor'=>'14', 'floor_category_id'=>	2],
['id'=>	91, 'lat'=>	11.573394, 'lng'=>	 104.893110, 'address'=>'#9bis, Street 604, Boueng Kor II, Toul Kork, Phnom Penh', 'hotline'=>'023 214 824', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	92, 'lat'=>	11.573501, 'lng'=>	 104.889043, 'address'=>'Nº 38, Street 317, Sangkat Boeung Kok II, khan Toul Kork, Phnom Penh.', 'hotline'=>'0233 88 57 29', 'tower'=>	1, 'floor'=>'11', 'floor_category_id'=>	1],
['id'=>	93, 'lat'=>	11.573688, 'lng'=>	 104.889294, 'address'=>'No. 76, St. 317 Phnom Penh, 12152', 'hotline'=>'012 991 312', 'tower'=>	1, 'floor'=>'6', 'floor_category_id'=>	1],
['id'=>	94, 'lat'=>	11.578186, 'lng'=>	 104.889103, 'address'=>'No. 14, Street 594 L329, Beung Kok 2, Toul Kork, Phnom Penh', 'hotline'=>'023 998 060', 'tower'=>	1, 'floor'=>'8', 'floor_category_id'=>	1],
['id'=>	95, 'lat'=>	11.581197, 'lng'=>	 104.891354, 'address'=>'#23, street 570, Sangkat Beoung kork II, Khan Toul Kork, Phnom Penh', 'hotline'=>'011 816 777', 'tower'=>	1, 'floor'=>'7', 'floor_category_id'=>	1],
['id'=>	96, 'lat'=>	11.581539, 'lng'=>	 104.891914, 'address'=>'#35, Street 568, Sangkat Boeung Kork II, KhanToul Kork, Phnom Penh', 'hotline'=>'012 365 555', 'tower'=>	1, 'floor'=>'6', 'floor_category_id'=>	1],
['id'=>	97, 'lat'=>	11.582023, 'lng'=>	 104.892100, 'address'=>' #24, st 566, sangkat boeng kor II, toul kok.', 'hotline'=>'077 90 22 33', 'tower'=>	1, 'floor'=>'8', 'floor_category_id'=>	1],
['id'=>	98, 'lat'=>	11.580846, 'lng'=>	 104.892842, 'address'=>'#1, Street 566 corner 331, Boeung Kork 2, Tuol Kork, info@sun-apartment.com, Phnom Penh 12152', 'hotline'=>'081 352 204', 'tower'=>	1, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	99, 'lat'=>	11.586914, 'lng'=>	 104.891041, 'address'=>'St 598, Bayab Village, Sangkat Phnom Penh Thmey, Khan Sensok, Phnom Penh 12101', 'hotline'=>' 023 66 88 688', 'tower'=>	2, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	100, 'lat'=>	11.586637, 'lng'=>	 104.889456, 'address'=>'No. 266, St. 598, Phnom Penh Thmei, Sen Sok, Phnom Penh 12101', 'hotline'=>'016 596 789', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	101, 'lat'=>	11.592895, 'lng'=>	 104.894255, 'address'=>'Oknha Mong Reththy St. (1928), Sangkat Phnom Penh Thmei, Khan Saen Sok, Phnom Penh', 'hotline'=>'088 553 8282/023 882 127', 'tower'=>	11, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	102, 'lat'=>	11.592149, 'lng'=>	 104.889579, 'address'=>'Oknha Mong Reththy St. (1928), Phnom Penh', 'hotline'=>'016 596 789', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	103, 'lat'=>	11.590509, 'lng'=>	 104.885963, 'address'=>'Street 1928, Phum Koh Andet, Sangkat Toul Sangke, Khan Russey Keo, Phnom Penh 12105', 'hotline'=>'016 596 789', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	104, 'lat'=>	11.598231, 'lng'=>	 104.883615, 'address'=>'st.1003, Sangkat Phnom Penh Thmei, Khan Sen Sok, Phnom Penh', 'hotline'=>'010 950 896', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	105, 'lat'=>	11.593004, 'lng'=>	 104.874932, 'address'=>'St.1928, Phnom Penh Thmei, Sen Sok, Phnom Penh', 'hotline'=>'061 997 888', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	106, 'lat'=>	11.611146, 'lng'=>	 104.884759, 'address'=>'#56A Angkor Blvd, Phnom Penh 12105', 'hotline'=>'023 667 6888', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	107, 'lat'=>	11.627234, 'lng'=>	 104.881372, 'address'=>'Street 598, Sangkat Chrang Chamreh 1, Khan Russey Keo, Phnom Penh', 'hotline'=>'016 596 789', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	108, 'lat'=>	11.629861, 'lng'=>	 104.878993, 'address'=>'Road 598, Sangkat Chrang Chomres1, Khan Russey Keo, Phnom Penh, Cambodia.', 'hotline'=>'023 988 568', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],
['id'=>	109, 'lat'=>	11.607008, 'lng'=>	 104.901502, 'address'=>'No. 27, St. 598, Khan Russey Keo, Phnom Penh 12105', 'hotline'=>'011 611 777', 'tower'=>	0, 'floor'=>'', 'floor_category_id'=>	1],

        ]);
    }
}