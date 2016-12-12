<?php
$static_title = 'Khronos OpenVX Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'OpenVX Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos OpenVX&trade; Registry</h1>
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenVX&trade; Registry </h1>

<p> The OpenVX registry contains specifications of the core API, headers,
    extensions, and related documentation. </p>

<h3> OpenVX Core API Specification, Headers, and Documentation </h3>

<p> The current version of OpenVX is OpenVX 1.1. </p>

<ul>
<li> <a href="specs/1.1/html/index.html"> OpenVX 1.1 Specification (HTML)
     </a> (updated September, 2016). The specification is also available in
     <a href="specs/1.1/OpenVX_Specification_1_1.pdf"> PDF </a> format for
     offline reading.
<li> <a href="api/1.1/openvx-standard-headers-1.1.tar.bz2"> OpenVX
     1.1 header package </a> (updated June 17, 2016).
</ul>

<h3> OpenVX 1.1 Sample Implementation </h3>

<p> <a href="sample/openvx_sample_1.1.tar.bz2">OpenVX 1.1 Sample Code</a>
    (last updated June 17, 2016). </p>

<h3> Older Specifications </h3>

<p> Older versions of the OpenVX Specification provided for reference. </p>

<p> <b> OpenVX 1.0.1 </b> </p>

<ul>
<li> <a href="specs/1.0.1/html/index.html"> OpenVX 1.0.1 Specification
     (HTML) </a> (updated June, 2015). The specification is also
     available in <a href="specs/1.0.1/OpenVX_Specification_1_0_1.pdf">
     PDF </a> format for offline reading. </li>
<li> <a href="api/1.0.1/openvx-standard-headers-1.0.1.tar.bz2"> OpenVX
     1.0.1 header package </a> (updated June, 2015). </li>
<li> <a href="sample/openvx_sample_1.0.1.tar.bz2">OpenVX 1.0.1 Sample
     Code</a> (last updated June 29, 2015). </li>
</ul>

<p> <b> OpenVX 1.0 </b> </p>

<ul>
<li> <a href="specs/1.0/html/index.html"> OpenVX 1.0 Specification
     (HTML) </a> (updated October, 2014). The specification is also
     available in <a href="specs/1.0/OpenVX_Specification_1_0.pdf"> PDF
     </a> format for offline reading. </li>
<li> <a href="specs/provisional/OpenVX_Specification_1_0-provisional-20140502.pdf">
     OpenVX 1.0 Provisional V2 Specification </a> (updated May 2, 2014). </li>
<li> <a href="specs/provisional/OpenVX_Tiling_Extension_1_0-provisional-20130924.pdf">
     OpenVX Tiling Extension 1.0 Provisional </a> (updated September 24,
     2013). </li>
<li> <a href="sample/openvx_sample_20141217.tar.gz">OpenVX 1.0 Sample
     Code</a> (last updated December 17, 2014). </li>
</ul>

<h3> OpenVX Extensions </h3>

<ul>
<li> <a href="extensions/vx_khr_tiling/1.0/html/index.html"> OpenVX 1.0
     Tiling Extension Provisional (HTML) </a> (updated January, 2015).
     The extension specification is also available in <a
     href="extensions/vx_khr_tiling/1.0/OpenVX_Tiling_Extension_1_0.pdf">
     PDF </a> format for offline reading. </li>
<li> <a href="extensions/vx_khr_xml/1.0/html/index.html"> OpenVX 1.0 XML
     Schema Extension Provisional (HTML) </a> (updated February, 2015).
     The extension specification is also available in <a
     href="extensions/vx_khr_xml/1.0/OpenVX_XML_Schema_Extension_1_0.pdf">
     PDF </a> format for offline reading. The extension incorporates the
     <a href="schema/openvx-1-0.xsd">OpenVX XML Schema</a> document.
     </li>
<li> <a href="extensions/vx_khr_icd/html/index.html"> OpenVX 1.0
     Installable Client Driver Extension Provisional (HTML) </a> (updated
     September, 2016). The extension specification is also available in <a
     href="extensions/vx_khr_icd/OpenVX_ICD_Extension.pdf"> PDF </a>
     format for offline reading. </li>
<li> <a href="extensions/export_import/html/index.html"> OpenVX 1.0
     Export and Import Extension Provisional (HTML) </a> (updated September,
     2016). The extension specification is also available in <a
     href="extensions/export_import/OpenVX_Export_and_Import_Extension_1_1.pdf">
     PDF </a> format for offline reading. </li>
<li> <a href="extensions/neural_network/html/index.html"> OpenVX 1.0
     Neural Network Extension Provisional (HTML) </a> (updated September,
     2016). The extension specification is also available in <a
     href="extensions/neural_network/OpenVX_NN_Extension_1_1.pdf"> PDF
     </a> format for offline reading. </li>
</ul>

<h6> Providing Feedback on the Registry </h6>

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
</body>
</html>
