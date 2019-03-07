<?php
$static_title = 'Khronos OpenVX Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p>The OpenVX registry contains specifications of the core API, headers,
  extensions, and related documentation.</p>

<h3>OpenVX API Specification, Headers, and Documentation</h3>

<p>The current version of OpenVX is OpenVX 1.2.1:</p>
<ul>
  <li> OpenVX 1.2.1 specification (<a href="specs/1.2.1/OpenVX_Specification_1_2_1.html">HTML</a>,
    <a href="specs/1.2.1/OpenVX_Specification_1_2_1.pdf">PDF</a>)
    (updated November 27, 2018).</li>
  <li> <a href="api/1.2/openvx-standard-headers-1.2.tar.bz2"> OpenVX 1.2 header
    package </a> (updated October 20, 2017).</li>
  <li> <a href="sample/openvx_sample_1.2.tar.bz2">OpenVX 1.2 sample code</a>
    (updated January 17, 2018). </p>
</ul>

<p>There are two KHR extensions to OpenVX that are supported by the
  OpenVX 1.2 conformance tests: </p>
<ul>
  <li>OpenVX 1.2.1 Neural Network extension
    (<a href="extensions/vx_khr_nn/1.2.1/vx_khr_nn_1_2_1.html">HTML</a>,
    <a href="extensions/vx_khr_nn/1.2.1/vx_khr_nn_1_2_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>OpenVX 1.1.1 Export and Import extension
    (<a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.html">HTML</a>,
    <a href="extensions/vx_khr_ix/1.1.1/vx_khr_export_and_import_1_1_1.pdf">PDF</a>)
      (updated August 15, 2018).</li>
    <ul>
      <li>This extension designed for OpenVX 1.1 is valid without change for OpenVX 1.2(.1).</li>
    </ul>
  <li> <a href="api/1.2/openvx-extension-headers-1.2.tar.bz2"> OpenVX 1.2
      extension header package </a> (updated November 8, 2017).
    <ul>
      <li>
        This package contains header files for these officially supported
        extensions <em>and</em> for the provisional extensions listed below.</li>
    </ul>
</ul>

<p>The current Safety Critical version of OpenVX is OpenVX1.1 SC:</p>
<ul>
  <li>OpenVX 1.1 SC specification (<a href="specs/1.1_SC/html/index.html">HTML</a>,
    <a href="specs/1.1_SC/OpenVX_Specification_SC_1_1.pdf">PDF</a>)
    (updated March 8, 2017).</li>
</ul>

<h3> OpenVX Provisional Extensions </h3>
<ul>
  <li>Buffer aliasing extension (provisional, OpenVX 1.1, 1.2)
    (<a href="extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.html">HTML</a>,
    <a href="extensions/vx_khr_buffer_aliasing/1.0/vx_khr_buffer_aliasing_1_0.pdf">PDF</a>)
    (updated February 13, 2019).</li>
  <li>Classifier extension (provisional, OpenVX 1.2.1)
    (<a href="extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.html">HTML</a>,
    <a href="extensions/vx_khr_class/1.2.1/vx_khr_class_1_2_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>Import kernel extension (provisional, OpenVX 1.1, 1.2)
    (<a href="extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.html">HTML</a>,
    <a href="extensions/vx_khr_import_kernel/1.1/vx_khr_import_kernel_1_1.pdf">PDF</a>)
    (updated March 6, 2019).</li>
  <li>Installable client driver extension (provisional, OpenVX 1.0.1)
    (<a href="extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.html">HTML</a>,
    <a href="extensions/vx_khr_icd/1.0.1/vx_khr_icd_1_0_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>OpenCL interop extension (provisional, OpenVX 1.1, 1.2)
    (<a href="extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.html">HTML</a>,
    <a href="extensions/vx_khr_opencl_interop/1.0/vx_khr_opencl_interop_1_0.pdf">PDF</a>)
    (updated January 25, 2018).</li>
  <li>Pipelining, streaming,and batch processing extension (provisional, OpenVX 1.1 and 1.2)
    (<a href="extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.html">HTML</a>,
    <a href="extensions/vx_khr_pipelining/1.0.1/vx_khr_pipelining_1_0_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>S16 extension (provisional, OpenVX 1.1.1)
    (<a href="extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.html">HTML</a>,
    <a href="extensions/vx_khr_s16/1.1.1/vx_khr_s16_1_1_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>Tiling extension (provisional, OpenVX 1.0.1)
    (<a href="extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.html">HTML</a>,
    <a href="extensions/vx_khr_tiling/1.0.1/vx_khr_tiling_1_0_1.pdf">PDF</a>)
    (updated August 15, 2018).</li>
  <li>User data object extension (provisional, OpenVX 1.1, 1.2)
    (<a href="extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.html">HTML</a>,
    <a href="extensions/vx_khr_user_data_object/1.0/vx_khr_user_data_object_1_0.pdf">PDF</a>)
    (updated February 13, 2019).</li>
  <li>XML extension (provisional, OpenVX 1.1)
    (<a href="extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.html">HTML</a>,
    <a href="extensions/vx_khr_xml/1.1/vx_khr_xml_1_1.pdf">PDF</a>)
    (updated December 10, 2018).
    <ul>
      <li>The XML extension references the
        <a href="schema/index.php">OpenVX XML Schema</a> documents.
      <li>An OpenVX XML User Guide is available for additional information 
	(<a href="extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.html">HTML</a>,
	<a href="extensions/vx_khr_xml/1.1/vx_khr_xml_ug_1_1.pdf">PDF</a>).
    </ul>
  </li>

</ul>

<h3>Tool Chain Change</h3>
<p>
Beginning with version 1.2.1, the OpenVX specification was generated via a different tool
chain from previous versions.  Although the formatting is different, the content of
OpenVX 1.2.1 is identical to that of OpenVX 1.2.  The 1.2 headers, sample implementation,
and conformance tests are still applicable to 1.2.1.  Some of the extension specs have
also been regenerated with the new tool chain, with a similar ".1" suffix added to their
version numbers.  The old versions of the specifications generated with the previous tool
chain are available <a href="prev_tools.php">here</a>.
</p>

<h3>Older Specifications</h3>

<p>Older versions of the OpenVX specification provided for reference.</p>

<p><b>OpenVX 1.1</b></p>
<ul>
  <li>OpenVX 1.1 specification
    (<a href="specs/1.1/html/index.html">HTML</a>,
    <a href="specs/1.1/OpenVX_Specification_1_1.pdf">PDF</a>)
    (updated March 15, 2017).</li>
  <li><a href="api/1.1/openvx-standard-headers-1.1.tar.bz2">OpenVX 1.1 header
      package </a> (updated March 15, 2017).
  <li> <a href="sample/openvx_sample_1.1.tar.bz2">OpenVX 1.1 sample code</a>
    (updated June 17, 2016).
  <li>OpenVX 1.1 export and import extension
    (<a href="extensions/vx_khr_ix/1.1/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_ix/1.1/OpenVX_Export_and_Import_Extension_1_1.pdf">PDF</a>)
      (updated April 27, 2017).</li>
  <li>Import kernel extension
    (<a href="extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.html">HTML</a>,
    <a href="extensions/vx_khr_import_kernel/1.0/vx_khr_import_kernel_1_0.pdf">PDF</a>)
    (updated March 8, 2018).</li>
  <li> <a href="api/1.1/openvx-extension-headers-1.1.tar.bz2"> OpenVX
      1.1 extension header package </a> (updated April 27, 2017).</li>
</ul>

<p><b>OpenVX 1.0.1 (withdrawn)</b></p>
<p><em>The OpenVX 1.0.X specifications have been withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations are no longer accepted as of May 15, 2018.</em></p>
<ul>
  <li>
    OpenVX 1.0.1 specification
    (<a href="specs/1.0.1/html/index.html">HTML</a>,
    <a href="specs/1.0.1/OpenVX_Specification_1_0_1.pdf">PDF</a>)
    (updated June, 2015).</li>
  <li> <a href="api/1.0.1/openvx-standard-headers-1.0.1.tar.bz2"> OpenVX
      1.0.1 header package </a> (updated June, 2015). </li>
  <li> <a href="sample/openvx_sample_1.0.1.tar.bz2">OpenVX 1.0.1 sample
      code</a> (updated June 29, 2015). </li>
  <li>Neural network extension (provisional, OpenVX 1.0)
    (<a href="extensions/vx_khr_nn/1.1/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_nn/1.1/OpenVX_NN_Extension_1_1.pdf">PDF</a>)
    (updated September, 2016).</li>
  <li>XML schema extension (provisional, OpenVX 1.0)
    (<a href="extensions/vx_khr_xml/1.0/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_xml/1.0/OpenVX_XML_Schema_Extension_1_0.pdf">PDF</a>)
    (updated February 4, 2015).
    <ul>
      <li>The 1.0 XML extension incorporates the
        <a href="schema/openvx-1-0.xsd">OpenVX XML Schema 1.0</a> document.
    </ul>
  </li>
</ul>

<p><b>OpenVX 1.0 (withdrawn)</b></p>
<p><em>The OpenVX 1.0.X specifications have been withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations are no longer accepted as of May 15, 2018.</em></p>
<ul>
  <li>OpenVX 1.0 specification
    (<a href="specs/1.0/html/index.html">HTML</a>,
    <a href="specs/1.0/OpenVX_Specification_1_0.pdf">PDF</a>)
    (updated October, 2014).</li>
  <li>OpenVX 1.0 provisional v2 specification
    (<a href="specs/provisional/OpenVX_Specification_1_0-provisional-20140502.pdf">PDF</a>)
    (updated May 2, 2014). </li>
  <li>OpenVX tiling extension 1.0 provisional
    (<a href="specs/provisional/OpenVX_Tiling_Extension_1_0-provisional-20130924.pdf">PDF</a>)
    (updated September 24, 2013). </li>
  <li> <a href="sample/openvx_sample_20141217.tar.gz">OpenVX 1.0 sample
     code</a> (updated December 17, 2014). </li>
</ul>

<hr>

<h4>Providing Feedback on the Registry</h4>

<p> Khronos welcomes comments and bug reports. To provide feedback on the
    OpenVX registry itself (such as reporting missing content, bad links,
    etc.), file an issue in the <a
    href="https://github.com/KhronosGroup/OpenVX-Registry/issues">
    OpenVX-Registry </a> Github project. </p>

<p> For the OpenVX API, extensions, and headers, file a bug on the <a
    href="http://www.khronos.org/bugzilla/"> Khronos Bugzilla </a>. Make
    sure to fill in the &quot;Product&quot; field in the bug entry form as
    &quot;OpenVX&quot;, and pick appropriate values for the Component and
    other fields. </p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
