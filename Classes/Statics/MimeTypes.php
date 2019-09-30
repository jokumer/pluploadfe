<?php

namespace FelixNagel\Pluploadfe\Statics;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-2018 Felix Nagel <info@felixnagel.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * MimeTypes
 */
class MimeTypes
{
    /**
     * @var array
     */
    public static $imageTypes = [
        'gif',
        'jpeg',
        'jpg',
        'png',
        'swf',
        'psd',
        'bmp',
        'tiff',
        'tif',
        'jpc',
        'jp2',
        'jpx',
        'jb2',
        'swc',
        'iff',
        'wbmp',
        'xbm',
        'ico',
    ];

    /**
     * @var array
     */
    public static $mimeTypes = [
        '3dmf' => ['x-world/x-3dmf'],
        '3dm' => ['x-world/x-3dmf'],
        '7z' => ['application/x-7z-compressed', 'application/zip'],
        'avi' => ['video/x-msvideo'],
        'ai' => ['application/postscript'],
        'bin' => ['application/octet-stream', 'application/x-macbinary'],
        'bmp' => ['image/bmp'],
        'cab' => ['application/x-shockwave-flash'],
        'c' => ['text/plain'],
        'c++' => ['text/plain'],
        'class' => ['application/java'],
        'css' => ['text/css'],
        'csv' => ['text/comma-separated-values'],
        'cdr' => ['application/cdr'],
        'doc' => ['application/msword'],
        'dot' => ['application/msword'],
        'docx' => ['application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
        'dotx' => ['application/vnd.openxmlformats-officedocument.wordprocessingml.template'],
        'dwg' => ['application/acad'],
        'eps' => ['application/postscript'],
        'exe' => ['application/octet-stream'],
        'gif' => ['image/gif'],
        'gz' => ['application/gzip'],
        'gtar' => ['application/x-gtar'],
        'f4v' => ['video/mp4'],
        'flv' => ['video/x-flv'],
        'fh4' => ['image/x-freehand'],
        'fh5' => ['image/x-freehand'],
        'fhc' => ['image/x-freehand'],
        'help' => ['application/x-helpfile'],
        'hlp' => ['application/x-helpfile'],
        'html' => ['text/html'],
        'htm' => ['text/html'],
        'ico' => ['image/x-icon'],
        'imap' => ['application/x-httpd-imap'],
        'inf' => ['application/inf'],
        'jpe' => ['image/jpeg'],
        'jpeg' => ['image/jpeg'],
        'jpg' => ['image/jpeg'],
        'js' => ['application/x-javascript'],
        'java' => ['text/x-java-source'],
        'latex' => ['application/x-latex'],
        'log' => ['text/plain'],
        'm3u' => ['audio/x-mpequrl'],
        'midi' => ['audio/midi'],
        'mid' => ['audio/midi'],
        'mov' => ['video/quicktime'],
        'mp3' => ['audio/mpeg'],
        'm4v' => ['video/mp4'],
        'mp4' => ['video/mp4', 'audio/mp4', 'audio/m4a'],
        'mpeg' => ['video/mpeg'],
        'mpg' => ['video/mpeg'],
        'mp2' => ['video/mpeg'],
        'ogg' => ['video/ogg', 'application/ogg', 'audio/ogg'],
        'ogm' => ['video/ogg'],
        'ogv' => ['video/ogg'],
        'odt' => ['application/vnd.oasis.opendocument.text', 'application/x-vnd.oasis.opendocument.text'],
        'odp' => ['application/vnd.oasis.opendocument.presentation'],
        'ods' => ['application/vnd.oasis.opendocument.spreadsheet'],
        'phtml' => ['application/x-httpd-php'],
        'php' => ['application/x-httpd-php'],
        'pdf' => ['application/pdf'],
        'pgp' => ['application/pgp'],
        'png' => ['image/png'],
        'pps' => ['application/mspowerpoint', 'application/vnd.ms-powerpoint'],
        'ppt' => ['application/mspowerpoint', 'application/vnd.ms-powerpoint'],
        'pptx' => ['application/vnd.openxmlformats-officedocument.presentationml.presentation'],
        'ppz' => ['application/mspowerpoint'],
        'pot' => ['application/mspowerpoint'],
        'ps' => ['application/postscript'],
        'qt' => ['video/quicktime'],
        'qd3d' => ['x-world/x-3dmf'],
        'qd3' => ['x-world/x-3dmf'],
        'qxd' => ['application/x-quark-express'],
        'rar' => ['application/x-rar-compressed'],
        'ra' => ['audio/x-realaudio'],
        'ram' => ['audio/x-pn-realaudio'],
        'rm' => ['audio/x-pn-realaudio'],
        'rtf' => ['text/rtf'],
        'spr' => ['application/x-sprite'],
        'sprite' => ['application/x-sprite'],
        'stream' => ['audio/x-qt-stream'],
        'swf' => ['application/x-shockwave-flash'],
        'svg' => ['text/xml-svg'],
        'sgml' => ['text/x-sgml'],
        'sgm' => ['text/x-sgml'],
        'tar' => ['application/x-tar'],
        'tiff' => ['image/tiff'],
        'tif' => ['image/tiff'],
        'tgz' => ['application/x-compressed'],
        'tex' => ['application/x-tex'],
        'txt' => ['text/plain'],
        'vob' => ['video/x-mpg'],
        'wav' => ['audio/x-wav'],
        'webm' => ['video/webm'],
        'wrl' => ['model/vrml', 'x-world/x-vrml'],
        'xla' => ['application/msexcel', 'application/vnd.ms-excel'],
        'xlt' => ['application/msexcel', 'application/vnd.ms-excel'],
        'xls' => ['application/msexcel', 'application/vnd.ms-excel'],
        'xlsx' => ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
        'xltx' => ['application/vnd.openxmlformats-officedocument.spreadsheetml.template'],
        'xlc' => ['application/vnd.ms-excel'],
        'xml' => ['text/xml'],
        'zip' => ['application/x-zip-compressed', 'application/x-zip', 'application/zip'],
    ];
}
