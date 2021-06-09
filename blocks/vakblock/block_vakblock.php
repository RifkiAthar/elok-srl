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
 * Form for editing VAK block instances.
 *
 * @package   block_vakblock
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_vakblock extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_vakblock');
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
            <link href="css/sidebar.css" rel="stylesheet">
        </head>
        <body>
        <p dir="ltr" style="text-align: left;"><img src="ic_virtual_tutor" alt="" width="200" height="200" role="presentation" class="atto_image_button_left"></p>
        <p style="text-align: left;"><strong style="font-size: 1.17188rem;">Tes Gaya Belajar</strong></p>
        <p style="text-align: left;"><span style="font-size: 0.9375rem;">Tes gaya belajar bertujuan untuk mengetahui area yang dominan dalam belajar, yaitu visual, auditori, atau kinestetik.</span><br></p>
        <p><span style="font-size: 0.9375rem;">Hasil tes gaya belajar akan digunakan untuk memberi rekomendasi strategi belajar.</span></p>
        <a href="../local/srl/vak/vak1.php">Mulai Tes Gaya Belajar</a>
        <p><br></p>
        </body>
    </html>';
        return $this->content;
    }
}
