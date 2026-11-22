<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost
 *
 * @package    core
 * @subpackage dbtransfer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Đang kiểm tra cấu trúc bảng nguồn';
$string['copyingtable'] = 'Đang sao chép bảng {$a}';
$string['copyingtables'] = 'Đang sao chép nội dung các bảng';
$string['creatingtargettables'] = 'Đang tạo các bảng trong cơ sở dữ liệu đích';
$string['dbexport'] = 'Xuất cơ sở dữ liệu';
$string['dbtransfer'] = 'Chuyển cơ sở dữ liệu';
$string['differenttableexception'] = 'Cấu trúc bảng {$a} không khớp.';
$string['done'] = 'Hoàn tất';
$string['exportschemaexception'] = 'Cấu trúc cơ sở dữ liệu hiện tại không khớp với tất cả các tệp install.xml. <br /> {$a}';
$string['importschemaexception'] = 'Cấu trúc cơ sở dữ liệu hiện tại không khớp với tất cả các tệp install.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'Phiên bản hiện tại {$a->currentver} không khớp với phiên bản đã xuất {$a->schemaver}.';
$string['malformedxmlexception'] = 'Phát hiện XML không đúng định dạng, không thể tiếp tục.';
$string['tablex'] = 'Bảng {$a}:';
$string['unknowntableexception'] = 'Phát hiện bảng {$a} không xác định trong tệp xuất.';
