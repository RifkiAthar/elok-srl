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
 * Form for editing HTML block instances.
 *
 * @package   block_srlblock
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_srlblock extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_srlblock');
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
            <h5 style="text-align: left;">
                <p style="text-align: center;"><a href="../local/srl/srlclass"><img src="img/ic_virtual tutor.png"></a></p>
            </h5>
            <h5 style="text-align: center;"><strong style="font-size: 0.9375rem;"><a href="../local/srl/srlclass">Algoritme dan Struktur Data</a>&nbsp;</strong><br></h5>

            <p style="text-align: center;">Semester Ganjil 2020/2021</p>
        </body>
    </html>';
        return $this->content;
    }
}
