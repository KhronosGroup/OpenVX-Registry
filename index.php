<?php
$static_title = 'Khronos OpenVX Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p>The OpenVX registry contains specifications of the core API, headers, extensions, and related documentation.</p>

<h3>OpenVX API Specification, Headers, and Documentation</h3>

<p>The current version of OpenVX: <b>OpenVX 1.3</b> </p>
  <ul>
    <li>OpenVX 1.3 specification (<a href="specs/1.3/html/OpenVX_Specification_1_3.html">HTML</a>,
        <a href="specs/1.3/OpenVX_Specification_1_3.pdf">PDF</a>)
        (updated September 10, 2020).
    </li>
    <li>OpenVX 1.3 Feature Sets
        (<a href="specs/1.3/vx_khr_feature_sets/1.1/html/vx_khr_feature_sets_1_1.html">HTML</a>,
        <a href="specs/1.3/vx_khr_feature_sets/1.1/vx_khr_feature_sets_1_1.pdf">PDF</a>)
        (updated July 15, 2021).
    </li>
    <li>OpenVX 1.3 <a href="api/1.3/openvx-standard-headers-1.3.tar.bz2">header package</a> 
        (updated January 26, 2021).
    </li>
  </ul>

<p>The current version of OpenVX Safety Critical Specification: <b>OpenVX_SC 1.3</b> </p>
<ul>
  <li>OpenVX Safety Critical Specification 1.3 is published with-in the Feature Set document (<a href="specs/1.3/vx_khr_feature_sets/1.1/html/vx_khr_feature_sets_1_1.html#_safety_critical_deployment_feature_set">HTML</a>,
      <a href="specs/1.3/vx_khr_feature_sets/1.1/vx_khr_feature_sets_1_1.pdf">PDF</a>)
      (updated July 07, 2020).</li>
</ul>

<h3>OpenVX KHR Extensions</h3>
<p><b>NOTE:</b> OpenVX KHR Extensions have conformance tests available</p>
  <ul>
    <li>OpenVX KHR Neural Network Extension 1.3 (vx_khr_nn)
        (<a href="extensions/vx_khr_nn/1.3/html/vx_khr_nn_1_3.html">HTML</a>,
        <a href="extensions/vx_khr_nn/1.3/vx_khr_nn_1_3.pdf">PDF</a>)
        (updated August 08, 2019).
    </li>
    <li>OpenVX KHR Pipelining Extension 1.1 (vx_khr_pipelining)
        (<a href="extensions/vx_khr_pipelining/1.1/html/vx_khr_pipelining_1_1_0.html">HTML</a>,
        <a href="extensions/vx_khr_pipelining/1.1/vx_khr_pipelining_1_1_0.pdf">PDF</a>)
        (updated April 10, 2019).
    </li>
    <li>OpenVX KHR Export And Import Extension 1.1.1 (vx_khr_export_and_import) 
        (<a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.html">HTML</a>,
        <a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.pdf">PDF</a>)
        (updated August 15, 2018).
    </li>
    <li>OpenVX KHR User Data Object Extension 1.1 (vx_khr_user_data_object)
        (<a href="extensions/vx_khr_user_data_object/1.1/vx_khr_user_data_object_1_1.html">HTML</a>,
        <a href="extensions/vx_khr_user_data_object/1.1/vx_khr_user_data_object_1_1.pdf">PDF</a>)
        (updated October 08, 2020).
    </li>
    <li>OpenVX 1.3 <a href="api/1.3/openvx-extension-headers-1.3.tar.bz2">extension header package</a> 
        (updated July 07, 2020).
    </li>
    <ul>
      <li>
          This package contains header files for these officially supported extensions <em>and</em> for the provisional extensions listed below.
      </li>
    </ul>
</ul>

<h3>OpenVX KHR Provisional Extensions</h3>
<p><b>NOTE:</b> OpenVX KHR Provisional Extensions do not have conformance tests</p>
<ul>
  <li>OpenVX KHR Import Kernel Extension 1.3 (vx_khr_import_kernel) [provisional, OpenVX 1.3]
      (<a href="extensions/vx_khr_import_kernel/1.3/html/vx_khr_import_kernel_1_3.html">HTML</a>,
      <a href="extensions/vx_khr_import_kernel/1.3/vx_khr_import_kernel_1_3.pdf">PDF</a>)
      (updated August 08, 2019).
  </li>
  <li>OpenVX KHR Buffer Aliasing Extension 1.0 (vx_khr_buffer_aliasing) [provisional, OpenVX 1.1, 1.2]
      (<a href="extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.html">HTML</a>,
      <a href="extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.pdf">PDF</a>)
      (updated February 13, 2019).
  </li>
  <li>OpenVX KHR Classifier Extension 1.2.1 (vx_khr_class) [provisional, OpenVX 1.2.1]
      (<a href="extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.html">HTML</a>,
      <a href="extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.pdf">PDF</a>)
      (updated August 15, 2018).
  </li>
  <li>OpenVX KHR Installable Client Driver Extension 1.0.1 (vx_khr_icd) [provisional, OpenVX 1.0.1]
      (<a href="extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.html">HTML</a>,
      <a href="extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.pdf">PDF</a>)
      (updated August 15, 2018).
  </li>
  <li>OpenVX KHR OpenCL Interop Extension 1.0 (vx_khr_opencl_interop) [provisional, OpenVX 1.1, 1.2]
      (<a href="extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.html">HTML</a>,
      <a href="extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.pdf">PDF</a>)
      (updated January 25, 2018).
  </li>
  <li>OpenVX KHR S16 Extension 1.1.1 (vx_khr_s16) [provisional, OpenVX 1.1.1]
      (<a href="extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.html">HTML</a>,
      <a href="extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.pdf">PDF</a>)
      (updated August 15, 2018).
  </li>
  <li>OpenVX KHR Tiling Extension 1.0.1 (vx_khr_tiling) [provisional, OpenVX 1.0.1]
      (<a href="extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.html">HTML</a>,
      <a href="extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.pdf">PDF</a>)
      (updated August 15, 2018).
  </li>
  <li>OpenVX KHR XML Extension 1.1 (vx_khr_xml) [provisional, OpenVX 1.1]
      (<a href="extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.html">HTML</a>,
      <a href="extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.pdf">PDF</a>)
      (updated December 10, 2018).
      <ul>
        <li>The XML extension references the
            <a href="schema/index.php">OpenVX XML Schema</a> documents.
        </li>
        <li>An OpenVX XML User Guide is available for additional information
            (<a href="extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.html">HTML</a>,
            <a href="extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.pdf">PDF</a>).
        </li>
      </ul>
  </li>
</ul>

<h3>Older Specifications</h3>

<p>Older versions of the OpenVX specification provided for reference</p>

<h4>OpenVX 1.3 (August 08, 2019)</h4>
<ul>
    <li>OpenVX 1.3 specification (<a href="specs/1.3_08Aug2019/html/OpenVX_Specification_1_3.html">HTML</a>,
        <a href="specs/1.3_08Aug2019/OpenVX_Specification_1_3.pdf">PDF</a>).
    </li>
    <li>OpenVX 1.3 Feature Sets
        (<a href="specs/1.3/vx_khr_feature_sets/1.0/html/vx_khr_feature_sets_1_0.html">HTML</a>,
        <a href="specs/1.3/vx_khr_feature_sets/1.0/vx_khr_feature_sets_1_0.pdf">PDF</a>).
    </li>
    <li>OpenVX 1.3 <a href="api/1.3_08Aug2019/openvx-standard-headers-1.3.tar.bz2">header package</a>.
    </li>
    <li>OpenVX 1.3 <a href="api/1.3_08Aug2019/openvx-extension-headers-1.3.tar.bz2">extension header package</a>.
    </li>
</ul>

<h4>OpenVX 1.2.1</h4>
<ul>
  <li>OpenVX 1.2.1 specification (<a href="specs/1.2.1/OpenVX_Specification_1_2_1.html">HTML</a>,
      <a href="specs/1.2.1/OpenVX_Specification_1_2_1.pdf">PDF</a>)
      (updated November 27, 2018).
  </li>
  <li>OpenVX 1.2 <a href="api/1.2/openvx-standard-headers-1.2.tar.bz2">header package</a> 
      (updated October 20, 2017).
  </li>
  <li>OpenVX 1.2 <a href="sample/openvx_sample_1.2.tar.bz2">sample code</a>
      (updated January 17, 2018).
  </li>
  <li>OpenVX KHR Pipelining, Streaming, And Batch Processing Extension 1.0.1 (vx_khr_pipelining) [provisional, OpenVX 1.1 and 1.2]
      (<a href="extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.html">HTML</a>,
      <a href="extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.pdf">PDF</a>)
      (updated August 15, 2018).
  </li>
  <li>OpenVX KHR User Data Object Extension 1.0 (vx_khr_user_data_object) [provisional, OpenVX 1.1, 1.2]
      (<a href="extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.html">HTML</a>,
      <a href="extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.pdf">PDF</a>)
      (updated February 13, 2019).
  </li>
</ul>

<h5>NOTE: Tool Chain Change</h5>
<p>
<font size="-1">Beginning with version 1.2.1, the OpenVX specification was generated via a different tool
chain from previous versions.  Although the formatting is different, the content of
OpenVX 1.2.1 is identical to that of OpenVX 1.2.  The 1.2 headers, sample implementation,
and conformance tests are still applicable to 1.2.1.  Some of the extension specs have
also been regenerated with the new tool chain, with a similar ".1" suffix added to their
version numbers.</font>
</p>

<h4>OpenVX 1.2</h4>
<ul>
  <li>OpenVX 1.2 specification
      (<a href="specs/1.2/html/index.html">HTML</a>,
      <a href="specs/1.2/OpenVX_Specification_1_2.pdf">PDF</a>)
      (updated Oct 11 2017).
  </li>
  <li>OpenVX 1.2 <a href="api/1.2/openvx-standard-headers-1.2.tar.bz2">header package</a> 
      (updated Oct 11 2017).
  </li>
  <li>OpenVX 1.2 <a href="sample/openvx_sample_1.2.tar.bz2">sample code</a>
      (updated Oct 11 2017).
  </li>
  <li>OpenVX KHR Import Kernel Extension 1.1 (vx_khr_import_kernel) [provisional, OpenVX 1.1, 1.2]
      (<a href="extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.html">HTML</a>,
      <a href="extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.pdf">PDF</a>)
      (updated March 8, 2019).
  </li>
  <li>OpenVX KHR Export And Import Extension 1.1.1 (vx_khr_export_and_import)
      (<a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.html">HTML</a>,
      <a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.pdf">PDF</a>)
      (updated Aug 15 2018).
  </li>
  <li>OpenVX 1.1 <a href="api/1.1/openvx-extension-headers-1.1.tar.bz2">extension header package</a> 
      (updated April 27, 2017).
  </li>
</ul>

<p>Safety Critical Specification</p>
<ul>
  <li>OpenVX 1.1 SC specification (<a href="specs/1.1_SC/html/index.html">HTML</a>,
      <a href="specs/1.1_SC/OpenVX_Specification_SC_1_1.pdf">PDF</a>)
      (updated March 8, 2017).
  </li>
</ul>

<h4>OpenVX 1.1</h4>
<ul>
  <li>OpenVX 1.1 specification
      (<a href="specs/1.1/html/index.html">HTML</a>,
      <a href="specs/1.1/OpenVX_Specification_1_1.pdf">PDF</a>)
      (updated March 15, 2017).
  </li>
  <li>OpenVX 1.1 <a href="api/1.1/openvx-standard-headers-1.1.tar.bz2">header package</a> 
      (updated March 15, 2017).
  <li>OpenVX 1.1 <a href="sample/openvx_sample_1.1.tar.bz2">sample code</a>
      (updated June 17, 2016).
  </li>
  <li>OpenVX KHR Export And Import Extension 1.1 (vx_khr_export_and_import)
      (<a href="extensions/vx_khr_ix/1.1/html/index.html">HTML</a>,
      <a href="extensions/vx_khr_ix/1.1/OpenVX_Export_and_Import_Extension_1_1.pdf">PDF</a>)
      (updated April 27, 2017).
  </li>
  <li>OpenVX KHR Import Kernel Extension 1.0 (vx_khr_import)
      (<a href="extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.html">HTML</a>,
      <a href="extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.pdf">PDF</a>)
      (updated March 8, 2018).
  </li>
  <li> OpenVX 1.1 <a href="api/1.1/openvx-extension-headers-1.1.tar.bz2">extension header package</a> 
      (updated April 27, 2017).
  </li>
</ul>

<h4>OpenVX 1.0.1 (withdrawn)</h4>
<p><em>The OpenVX 1.0.X specifications have been withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations are no longer accepted as of May 15, 2018.</em></p>
<ul>
  <li>OpenVX 1.0.1 specification
      (<a href="specs/1.0.1/html/index.html">HTML</a>,
      <a href="specs/1.0.1/OpenVX_Specification_1_0_1.pdf">PDF</a>)
      (updated June, 2015).
  </li>
  <li>OpenVX 1.0.1 <a href="api/1.0.1/openvx-standard-headers-1.0.1.tar.bz2">header package</a> 
      (updated June, 2015). 
  </li>
  <li>OpenVX 1.0.1 <a href="sample/openvx_sample_1.0.1.tar.bz2">sample code</a> 
      (updated June 29, 2015). 
  </li>
  <li>OpenVX KHR Neural Network Extension 1.1 (vx_khr_nn) (provisional, OpenVX 1.0)
      (<a href="extensions/vx_khr_nn/1.1/html/index.html">HTML</a>,
      <a href="extensions/vx_khr_nn/1.1/OpenVX_NN_Extension_1_1.pdf">PDF</a>)
      (updated September, 2016).
  </li>
  <li>OpenVX KHR XML Schema Extension 1.1 (vx_khr_xml) (provisional, OpenVX 1.0)
      (<a href="extensions/vx_khr_xml/1.0/html/index.html">HTML</a>,
      <a href="extensions/vx_khr_xml/1.0/OpenVX_XML_Schema_Extension_1_0.pdf">PDF</a>)
      (updated February 4, 2015).
      <ul>
        <li>
          The 1.0 XML extension incorporates the <a href="schema/openvx-1-0.xsd">OpenVX XML Schema 1.0</a> document.
        </li>
      </ul>
  </li>
</ul>

<h4>OpenVX 1.0 (withdrawn)</h4>
<p><em>The OpenVX 1.0.X specifications have been withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations are no longer accepted as of May 15, 2018.</em></p>
<ul>
  <li>OpenVX 1.0 specification
      (<a href="specs/1.0/html/index.html">HTML</a>,
      <a href="specs/1.0/OpenVX_Specification_1_0.pdf">PDF</a>)
      (updated October, 2014).
  </li>
  <li>OpenVX 1.0 provisional V2 specification
      (<a href="specs/provisional/OpenVX_Specification_1_0-provisional-20140502.pdf">PDF</a>)
      (updated May 2, 2014). 
  </li>
  <li>OpenVX Tiling Extension 1.0 () provisional
      (<a href="specs/provisional/OpenVX_Tiling_Extension_1_0-provisional-20130924.pdf">PDF</a>)
      (updated September 24, 2013). 
  </li>
  <li>OpenVX 1.0 <a href="sample/openvx_sample_20141217.tar.gz">sample code</a> 
      (updated December 17, 2014).
  </li>
</ul>

<hr>

<h4>Providing Feedback on OpenVX</h4>

<p> To provide feedback or file issues with the OpenVX API, extensions, and
    headers, file an issue in the <a
    href="https://github.com/KhronosGroup/OpenVX-api-docs">
    KhronosGroup/OpenVX-api-docs </a> Github project, where the
    Specification source documents are hosted.
</p>

<p> To provide feedback on the OpenVX registry itself (such as reporting
    missing content, bad links, etc.), file an issue in the <a
    href="https://github.com/KhronosGroup/OpenVX-Registry/issues">
    OpenVX-Registry </a> Github project. 
</p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
