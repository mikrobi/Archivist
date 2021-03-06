<?php
/**
 * Archivist
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Archivist, a simple archive navigation system for MODx
 * Revolution.
 *
 * Archivist is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Archivist is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Archivist; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package archivist
 */
/**
 * Default properties for getArchives snippet
 *
 * @package archivist
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'Name of a chunk serving as a resource template.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'filterField',
        'desc' => 'The field to use to filter by when filtering by archives. Make sure this is the same as the sortBy parameter on the Archivist snippet call.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'publishedon',
    ),
    array(
        'name' => 'filterPrefix',
        'desc' => 'The prefix to use for GET parameters with the Archivist links. Make sure this is the same as the filterPrefix parameter on the Archivist snippet call.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'arc_',
    ),
    array(
        'name' => 'tagsIndex',
        'desc' => 'If set, and a REQUEST var of this index is found, will automatically filter results by the value.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tags',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplOdd',
        'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplFirst',
        'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplLast',
        'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortby',
        'desc' => 'Field to sort by. Defaults to publishedon.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'publishedon',
    ),
    array(
        'name' => 'sortbyAlias',
        'desc' => 'Query alias for sortby field. Defaults to an empty string.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortbyEscaped',
        'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    ),
    array(
        'name' => 'sortdir',
        'desc' => 'Order which to sort by. Defaults to DESC.',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','vaue' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'DESC',
    ),
    array(
        'name' => 'limit',
        'desc' => 'Limits the number of resources returned. Defaults to 5.',
        'type' => 'textfield',
        'options' => '',
        'value' => '5',
    ),
    array(
        'name' => 'offset',
        'desc' => 'An offset of resources returned by the criteria to skip.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    ),
    array(
        'name' => 'tvFilters',
        'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimeter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'depth',
        'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
    ),
    array(
        'name' => 'parents',
        'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'includeContent',
        'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'includeTVs',
        'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'processTVs',
        'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'tvPrefix',
        'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tv.',
    ),
    array(
        'name' => 'idx',
        'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'first',
        'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'last',
        'desc' => ' Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'debug',
        'desc' => 'If true, will send the SQL query to the MODx log. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
);

return $properties;