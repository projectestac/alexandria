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
 * Simple Format.
 *
 * @package   format_simple
 * @copyright 2012-onwards UPCnet
 * @author    Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat, 
 *            Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es, Israel Forés Monzó israel.fores@ithinkupc.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace format_simple\output\courseformat\content\section;

use core_courseformat\output\local\content\section\cmitem as cmitem_base;
use stdClass;
use renderer_base;

class cmitem extends cmitem_base {
	
	/**
     * Returns the output class template path.
     *
     * This method redirects the default template when the course cmitem is rendered.
     */
	public function get_template_name(\renderer_base $renderer): string {
		global $PAGE;

        if ($PAGE->user_is_editing()) {
        	return 'core_courseformat/local/content/section/cmitem';
        }
		return 'format_simple/local/content/section/cmitem';
	}

}