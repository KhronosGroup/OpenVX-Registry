<?php
$static_title = 'Khronos OpenVX Registry';

include_once("../../assets/static_pages/khr_page_top.php");

function openvx_escape($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function openvx_render_links($links)
{
    if (empty($links)) {
        return;
    }

    $rendered_links = array();
    foreach ($links as $link) {
        $rendered_links[] = '<a href="' . openvx_escape($link['href']) . '">' . openvx_escape($link['label']) . '</a>';
    }

    echo ' (' . implode(', ', $rendered_links) . ')';
}

function openvx_render_updated($updated)
{
    if (!empty($updated)) {
        echo ' <span class="updated">(updated ' . openvx_escape($updated) . ').</span>';
    }
}

function openvx_render_items($items)
{
    echo "<ul>\n";
    foreach ($items as $item) {
        echo "    <li>" . $item['title'];
        if (!empty($item['links'])) {
            openvx_render_links($item['links']);
        }
        if (!empty($item['updated'])) {
            openvx_render_updated($item['updated']);
        }
        if (!empty($item['note'])) {
            echo '<br><span class="note">' . $item['note'] . '</span>';
        }
        if (!empty($item['children'])) {
            echo "\n";
            openvx_render_items($item['children']);
            echo "    ";
        }
        echo "</li>\n";
    }
    echo "</ul>\n";
}

$current_specs = array(
    array(
        'title' => 'OpenVX 1.3.2 specification',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3.2/html/OpenVX_Specification_1_3_2.html'),
            array('label' => 'PDF', 'href' => 'specs/1.3.2/OpenVX_Specification_1_3_2.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
    array(
        'title' => 'OpenVX 1.3.2 Feature Sets',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3.2/vx_khr_feature_sets/html/vx_khr_feature_sets_1_1.html'),
            array('label' => 'PDF', 'href' => 'specs/1.3.2/vx_khr_feature_sets/vx_khr_feature_sets_1_1.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
    array(
        'title' => 'OpenVX 1.3.1 specification',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3.1/html/OpenVX_Specification_1_3_1.html'),
            array('label' => 'PDF', 'href' => 'specs/1.3.1/OpenVX_Specification_1_3_1.pdf'),
        ),
        'updated' => 'Feb 02, 2022',
        'children' => array(
            array(
                'title' => 'Corrections to OpenVX Specification 1.3.1',
                'links' => array(
                    array('label' => 'PDF', 'href' => 'specs/1.3.1/OpenVX_Specification_1_3_1_Correction_1_changes.pdf'),
                ),
                'updated' => 'Nov 07, 2023',
            ),
        ),
    ),
    array(
        'title' => 'OpenVX 1.3 specification',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3/html/OpenVX_Specification_1_3.html'),
            array('label' => 'PDF', 'href' => 'specs/1.3/OpenVX_Specification_1_3.pdf'),
        ),
        'updated' => 'September 10, 2020',
    ),
    array(
        'title' => 'OpenVX 1.3 Feature Sets',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3/vx_khr_feature_sets/1.1/html/vx_khr_feature_sets_1_1.html'),
            array('label' => 'PDF', 'href' => 'specs/1.3/vx_khr_feature_sets/1.1/vx_khr_feature_sets_1_1.pdf'),
        ),
        'updated' => 'July 15, 2021',
    ),
    array(
        'title' => 'OpenVX 1.3.2 header package',
        'links' => array(
            array('label' => 'Download', 'href' => 'api/1.3.2/openvx-headers.tar'),
        ),
        'updated' => 'July 05, 2026',
    ),
);

$safety_specs = array(
    array(
        'title' => 'OpenVX Safety Critical Specification 1.3 is published within the Feature Set document',
        'links' => array(
            array('label' => 'HTML', 'href' => 'specs/1.3.2/vx_khr_feature_sets/html/vx_khr_feature_sets_1_1.html#_safety_critical_deployment_feature_set'),
            array('label' => 'PDF', 'href' => 'specs/1.3.2/vx_khr_feature_sets/vx_khr_feature_sets_1_1.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
);

$khr_extensions = array(
    array(
        'title' => 'OpenVX KHR Neural Network Extension 1.3 (vx_khr_nn)',
        'links' => array(
            array('label' => 'HTML', 'href' => 'extensions/vx_khr_nn/1.3/html/vx_khr_nn_1_3.html'),
            array('label' => 'PDF', 'href' => 'extensions/vx_khr_nn/1.3/vx_khr_nn_1_3.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
    array(
        'title' => 'OpenVX KHR Pipelining Extension 1.1 (vx_khr_pipelining)',
        'links' => array(
            array('label' => 'HTML', 'href' => 'extensions/vx_khr_pipelining/1.1/html/vx_khr_pipelining_1_1_0.html'),
            array('label' => 'PDF', 'href' => 'extensions/vx_khr_pipelining/1.1/vx_khr_pipelining_1_1_0.pdf'),
        ),
        'updated' => 'April 10, 2019',
    ),
    array(
        'title' => 'OpenVX KHR Export And Import Extension 1.1.1 (vx_khr_ix)',
        'links' => array(
            array('label' => 'HTML', 'href' => 'extensions/vx_khr_ix/1.1.1/vx_khr_ix_1_1_1.html'),
            array('label' => 'PDF', 'href' => 'extensions/vx_khr_ix/1.1.1/vx_khr_ix_1_1_1.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
    array(
        'title' => 'OpenVX KHR User Data Object Extension 1.1 (vx_khr_user_data_object)',
        'links' => array(
            array('label' => 'HTML', 'href' => 'extensions/vx_khr_user_data_object/1.1/vx_khr_user_data_object_1_1.html'),
            array('label' => 'PDF', 'href' => 'extensions/vx_khr_user_data_object/1.1/vx_khr_user_data_object_1_1.pdf'),
        ),
        'updated' => 'July 02, 2026',
    ),
    array(
        'title' => 'OpenVX 1.3.2 header package',
        'links' => array(
            array('label' => 'Download', 'href' => 'api/1.3.2/openvx-headers.tar'),
        ),
        'updated' => 'July 05, 2026',
        'note' => 'This package contains header files for the OpenVX 1.3.2 core API, officially supported extensions, and provisional extensions listed below.',
    ),
);

$provisional_extensions = array(
    array('title' => 'OpenVX KHR Node Send Command V1.0 (vx_khr_node_send_command)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_node_send_command/vx_khr_node_send_command_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_node_send_command/vx_khr_node_send_command_1_0.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Target Kernel V1.0 (vx_khr_target_kernel)', 'links' => array(array('label' => 'PDF', 'href' => 'extensions/vx_khr_target_kernel/vx_khr_target_kernel_1_0.pdf')), 'updated' => 'Jan 16, 2026'),
    array('title' => 'OpenVX KHR Pipelining Extension 2.0 (vx_khr_pipelining)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_pipelining/2.0/vx_khr_pipelining_2_0_0/vx_khr_pipelining_2_0_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_pipelining/2.0/vx_khr_pipelining_2_0_0.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Sub Image Arrays (vx_khr_sub_image_arrays)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_sub_image_arrays/vx_khr_sub_image_arrays_1_3_1/vx_khr_sub_image_arrays_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_sub_image_arrays/vx_khr_sub_image_arrays_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Tensor from images (vx_khr_tensor_from_images)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_tensor_from_image/vx_khr_tensor_from_image_1_3_1/vx_khr_tensor_from_image_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_tensor_from_image/vx_khr_tensor_from_image_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Safe Cast 1.3.1 (vx_khr_safe_casts) [provisional, OpenVX 1.3.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_safe_casts/vx_khr_safe_casts_1_3_1/vx_khr_safe_casts_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_safe_casts/vx_khr_safe_casts_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Supplementary Data (vx_khr_supplementary_data) [provisional, OpenVX 1.3.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_supplementary_data/vx_khr_supplementary_data_1_3_1/vx_khr_supplementary_data_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_supplementary_data/vx_khr_supplementary_data_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Bidirectional Parameters Extension 1.3.1 (vx_khr_bidirectional_parameters) [provisional, OpenVX 1.3.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_bidirectional_parameters/vx_khr_bidirectional_parameters_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_bidirectional_parameters/vx_khr_bidirectional_parameters_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Raw Image Extension 1.0 (vx_khr_raw_image) [provisional, OpenVX 1.3.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_raw_image/vx_khr_raw_image_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_raw_image/vx_khr_raw_image_1_0.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Swap And Move kernel Extension 1.3.1 (vx_khr_swap_move) [provisional, OpenVX 1.3.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_swap_move/vx_khr_swap_move_1_3_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_swap_move/vx_khr_swap_move_1_3_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Import Kernel Extension 1.3 (vx_khr_import_kernel) [provisional, OpenVX 1.3]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_import_kernel/1.3/html/vx_khr_import_kernel_1_3.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_import_kernel/1.3/vx_khr_import_kernel_1_3.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Buffer Aliasing Extension 1.0 (vx_khr_buffer_aliasing) [provisional, OpenVX 1.1, 1.2]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Classifier Extension 1.2.1 (vx_khr_class) [provisional, OpenVX 1.2.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Installable Client Driver Extension 1.0.1 (vx_khr_icd) [provisional, OpenVX 1.0.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR OpenCL Interop Extension 1.0 (vx_khr_opencl_interop) [provisional, OpenVX 1.1, 1.2]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR S16 Extension 1.1.1 (vx_khr_s16) [provisional, OpenVX 1.1.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.pdf')), 'updated' => 'July 02, 2026'),
    array('title' => 'OpenVX KHR Tiling Extension 1.0.1 (vx_khr_tiling) [provisional, OpenVX 1.0.1]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.pdf')), 'updated' => 'July 02, 2026'),
    array(
        'title' => 'OpenVX KHR XML Extension 1.1 (vx_khr_xml) [provisional, OpenVX 1.1]',
        'links' => array(
            array('label' => 'HTML', 'href' => 'extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.html'),
            array('label' => 'PDF', 'href' => 'extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.pdf'),
        ),
        'updated' => 'July 02, 2026',
        'children' => array(
            array('title' => 'The XML extension references the <a href="schema/index.php">OpenVX XML Schema</a> documents.'),
            array('title' => 'OpenVX XML User Guide', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.pdf'))),
        ),
    ),
);

$older_specs = array(
    array(
        'heading' => 'OpenVX 1.3 (August 08, 2019)',
        'items' => array(
            array('title' => 'OpenVX 1.3 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.3_08Aug2019/html/OpenVX_Specification_1_3.html'), array('label' => 'PDF', 'href' => 'specs/1.3_08Aug2019/OpenVX_Specification_1_3.pdf'))),
            array('title' => 'OpenVX 1.3 Feature Sets', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.3/vx_khr_feature_sets/1.0/html/vx_khr_feature_sets_1_0.html'), array('label' => 'PDF', 'href' => 'specs/1.3/vx_khr_feature_sets/1.0/vx_khr_feature_sets_1_0.pdf'))),
            array('title' => 'OpenVX 1.3 standard header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.3_08Aug2019/openvx-standard-headers-1.3.tar.bz2'))),
            array('title' => 'OpenVX 1.3 extension header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.3_08Aug2019/openvx-extension-headers-1.3.tar.bz2'))),
        ),
    ),
    array(
        'heading' => 'OpenVX 1.2.1',
        'items' => array(
            array('title' => 'OpenVX 1.2.1 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.2.1/OpenVX_Specification_1_2_1.html'), array('label' => 'PDF', 'href' => 'specs/1.2.1/OpenVX_Specification_1_2_1.pdf')), 'updated' => 'November 27, 2018'),
            array('title' => 'OpenVX 1.2 standard header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.2/openvx-standard-headers-1.2.tar.bz2')), 'updated' => 'October 20, 2017'),
            array('title' => 'OpenVX 1.2 sample code', 'links' => array(array('label' => 'Download', 'href' => 'sample/openvx_sample_1.2.tar.bz2')), 'updated' => 'January 17, 2018'),
            array('title' => 'OpenVX KHR Pipelining, Streaming, And Batch Processing Extension 1.0.1 (vx_khr_pipelining) [provisional, OpenVX 1.1 and 1.2]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.pdf')), 'updated' => 'August 15, 2018'),
            array('title' => 'OpenVX KHR User Data Object Extension 1.0 (vx_khr_user_data_object) [provisional, OpenVX 1.1, 1.2]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.pdf')), 'updated' => 'February 13, 2019'),
        ),
        'note' => 'Beginning with version 1.2.1, the OpenVX specification was generated via a different tool chain from previous versions. Although the formatting is different, the content of OpenVX 1.2.1 is identical to that of OpenVX 1.2. The 1.2 headers, sample implementation, and conformance tests are still applicable to 1.2.1. Some of the extension specs have also been regenerated with the new tool chain, with a similar ".1" suffix added to their version numbers.',
    ),
    array(
        'heading' => 'OpenVX 1.2',
        'items' => array(
            array('title' => 'OpenVX 1.2 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.2/html/index.html'), array('label' => 'PDF', 'href' => 'specs/1.2/OpenVX_Specification_1_2.pdf')), 'updated' => 'Oct 11 2017'),
            array('title' => 'OpenVX 1.2 standard header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.2/openvx-standard-headers-1.2.tar.bz2')), 'updated' => 'Oct 11 2017'),
            array('title' => 'OpenVX 1.2 sample code', 'links' => array(array('label' => 'Download', 'href' => 'sample/openvx_sample_1.2.tar.bz2')), 'updated' => 'Oct 11 2017'),
            array('title' => 'OpenVX KHR Import Kernel Extension 1.1 (vx_khr_import_kernel) [provisional, OpenVX 1.1, 1.2]', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.pdf')), 'updated' => 'March 8, 2019'),
            array('title' => 'OpenVX KHR Export And Import Extension 1.1.1 (vx_khr_export_and_import)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.pdf')), 'updated' => 'Aug 15 2018'),
            array('title' => 'OpenVX 1.1 extension header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.1/openvx-extension-headers-1.1.tar.bz2')), 'updated' => 'April 27, 2017'),
        ),
    ),
    array(
        'heading' => 'Safety Critical Specification',
        'items' => array(
            array('title' => 'OpenVX 1.1 SC specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.1_SC/html/index.html'), array('label' => 'PDF', 'href' => 'specs/1.1_SC/OpenVX_Specification_SC_1_1.pdf')), 'updated' => 'March 8, 2017'),
        ),
    ),
    array(
        'heading' => 'OpenVX 1.1',
        'items' => array(
            array('title' => 'OpenVX 1.1 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.1/html/index.html'), array('label' => 'PDF', 'href' => 'specs/1.1/OpenVX_Specification_1_1.pdf')), 'updated' => 'March 15, 2017'),
            array('title' => 'OpenVX 1.1 standard header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.1/openvx-standard-headers-1.1.tar.bz2')), 'updated' => 'March 15, 2017'),
            array('title' => 'OpenVX 1.1 sample code', 'links' => array(array('label' => 'Download', 'href' => 'sample/openvx_sample_1.1.tar.bz2')), 'updated' => 'June 17, 2016'),
            array('title' => 'OpenVX KHR Export And Import Extension 1.1 (vx_khr_export_and_import)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_ix/1.1/html/index.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_ix/1.1/OpenVX_Export_and_Import_Extension_1_1.pdf')), 'updated' => 'April 27, 2017'),
            array('title' => 'OpenVX KHR Import Kernel Extension 1.0 (vx_khr_import)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.pdf')), 'updated' => 'March 8, 2018'),
            array('title' => 'OpenVX 1.1 extension header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.1/openvx-extension-headers-1.1.tar.bz2')), 'updated' => 'April 27, 2017'),
        ),
    ),
    array(
        'heading' => 'OpenVX 1.0.1 (withdrawn)',
        'intro' => 'The OpenVX 1.0.X specifications have been withdrawn in favor of the improved 1.1 and 1.2 specifications. New submissions for conformance testing of 1.0.X implementations are no longer accepted as of May 15, 2018.',
        'items' => array(
            array('title' => 'OpenVX 1.0.1 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.0.1/html/index.html'), array('label' => 'PDF', 'href' => 'specs/1.0.1/OpenVX_Specification_1_0_1.pdf')), 'updated' => 'June, 2015'),
            array('title' => 'OpenVX 1.0.1 standard header package', 'links' => array(array('label' => 'Download', 'href' => 'api/1.0.1/openvx-standard-headers-1.0.1.tar.bz2')), 'updated' => 'June, 2015'),
            array('title' => 'OpenVX 1.0.1 sample code', 'links' => array(array('label' => 'Download', 'href' => 'sample/openvx_sample_1.0.1.tar.bz2')), 'updated' => 'June 29, 2015'),
            array('title' => 'OpenVX KHR Neural Network Extension 1.1 (vx_khr_nn) (provisional, OpenVX 1.0)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_nn/1.1/html/index.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_nn/1.1/OpenVX_NN_Extension_1_1.pdf')), 'updated' => 'September, 2016'),
            array('title' => 'OpenVX KHR XML Schema Extension 1.1 (vx_khr_xml) (provisional, OpenVX 1.0)', 'links' => array(array('label' => 'HTML', 'href' => 'extensions/vx_khr_xml/1.0/html/index.html'), array('label' => 'PDF', 'href' => 'extensions/vx_khr_xml/1.0/OpenVX_XML_Schema_Extension_1_0.pdf')), 'updated' => 'February 4, 2015', 'children' => array(array('title' => 'The 1.0 XML extension incorporates the <a href="schema/openvx-1-0.xsd">OpenVX XML Schema 1.0</a> document.'))),
        ),
    ),
    array(
        'heading' => 'OpenVX 1.0 (withdrawn)',
        'intro' => 'The OpenVX 1.0.X specifications have been withdrawn in favor of the improved 1.1 and 1.2 specifications. New submissions for conformance testing of 1.0.X implementations are no longer accepted as of May 15, 2018.',
        'items' => array(
            array('title' => 'OpenVX 1.0 specification', 'links' => array(array('label' => 'HTML', 'href' => 'specs/1.0/html/index.html'), array('label' => 'PDF', 'href' => 'specs/1.0/OpenVX_Specification_1_0.pdf')), 'updated' => 'October, 2014'),
            array('title' => 'OpenVX 1.0 provisional V2 specification', 'links' => array(array('label' => 'PDF', 'href' => 'specs/provisional/OpenVX_Specification_1_0-provisional-20140502.pdf')), 'updated' => 'May 2, 2014'),
            array('title' => 'OpenVX Tiling Extension 1.0 provisional', 'links' => array(array('label' => 'PDF', 'href' => 'specs/provisional/OpenVX_Tiling_Extension_1_0-provisional-20130924.pdf')), 'updated' => 'September 24, 2013'),
            array('title' => 'OpenVX 1.0 sample code', 'links' => array(array('label' => 'Download', 'href' => 'sample/openvx_sample_20141217.tar.gz')), 'updated' => 'December 17, 2014'),
        ),
    ),
);
?>

<p>The OpenVX registry contains specifications of the core API, headers, extensions, and related documentation.</p>

<h3>OpenVX Registry Contents</h3>
<ul>
    <li><a href="#current-specifications">Current Specifications</a></li>
    <li><a href="#khr-extensions">Ratified KHR Extensions</a></li>
    <li><a href="#provisional-extensions">Provisional KHR Extensions</a></li>
    <li><a href="#older-specifications">Older Specifications</a></li>
    <li><a href="#feedback">Feedback</a></li>
</ul>

<h3 id="current-specifications">Current Specifications, Headers, and Documentation</h3>

<p>The current version of OpenVX: <strong>OpenVX 1.3.2</strong></p>
<?php openvx_render_items($current_specs); ?>

<p>The current version of OpenVX Safety Critical Specification: <strong>OpenVX_SC 1.3</strong></p>
<?php openvx_render_items($safety_specs); ?>

<h3 id="khr-extensions">OpenVX KHR Extensions</h3>
<p><strong>NOTE:</strong> OpenVX KHR Extensions have conformance tests available.</p>
<?php openvx_render_items($khr_extensions); ?>

<h3 id="provisional-extensions">OpenVX KHR Provisional Extensions</h3>
<p><strong>NOTE:</strong> OpenVX KHR Provisional Extensions do not have conformance tests.</p>
<?php openvx_render_items($provisional_extensions); ?>

<h3 id="older-specifications">Older Specifications</h3>
<p>Older versions of the OpenVX specification are provided for reference.</p>

<?php foreach ($older_specs as $section) { ?>
<h4><?php echo openvx_escape($section['heading']); ?></h4>
<?php if (!empty($section['intro'])) { ?>
<p><em><?php echo openvx_escape($section['intro']); ?></em></p>
<?php } ?>
<?php openvx_render_items($section['items']); ?>
<?php if (!empty($section['note'])) { ?>
<p><small><?php echo openvx_escape($section['note']); ?></small></p>
<?php } ?>
<?php } ?>

<hr>

<h3 id="feedback">Providing Feedback on OpenVX</h3>

<p>To provide feedback or file issues with the OpenVX API, extensions, and
    headers, file an issue in the <a href="https://github.com/KhronosGroup/OpenVX-api-docs">
        KhronosGroup/OpenVX-api-docs</a> Github project, where the
    Specification source documents are hosted.
</p>

<p>To provide feedback on the OpenVX registry itself (such as reporting
    missing content, bad links, etc.), file an issue in the <a
        href="https://github.com/KhronosGroup/OpenVX-Registry/issues">
        OpenVX-Registry</a> Github project.
</p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
