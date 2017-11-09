<?php
$static_title = 'Khronos OpenVX Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p>The OpenVX registry contains specifications of the core API, headers,
  extensions, and related documentation.</p>

<h3>OpenVX API Specification, Headers, and Documentation</h3>

<p>The current version of OpenVX is OpenVX 1.2:</p>
<ul>
  <li> OpenVX 1.2 specification (<a href="specs/1.2/html/index.html">HTML</a>,
    <a href="specs/1.2/OpenVX_Specification_1_2.pdf">PDF</a>)
    (updated October 11, 2017).</li>
  <li> <a href="api/1.2/openvx-standard-headers-1.2.tar.bz2"> OpenVX 1.2 header
    package </a> (updated October 20, 2017).</li>
  <li> <a href="sample/openvx_sample_1.2.tar.bz2">OpenVX 1.2 sample code</a>
    (updated October 20, 2017). </p>
</ul>

<p>There are two KHR extensions to OpenVX that are supported by the
  OpenVX 1.2 conformance tests: </p>
<ul>
  <li>OpenVX 1.2 neural network extension
    (<a href="extensions/neural_network_1.2/html/index.html">HTML</a>,
    <a href="extensions/neural_network_1.2/OpenVX_NN_Extension_1_2.pdf">PDF</a>)
    (updated November 8, 2017).</li>
  <li>OpenVX 1.1 export and import extension
    (<a href="extensions/export_import_1.1/html/index.html">HTML</a>,
    <a href="extensions/export_import_1.1/OpenVX_Export_and_Import_Extension_1_1.pdf">PDF</a>)
      (updated April 27, 2017).</li>
    <ul>
      <li>This extension designed for OpenVX 1.1 is valid without change for OpenVX 1.2.</li>
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
    (<a href="extensions/export_import_1.1/html/index.html">HTML</a>,
    <a href="extensions/export_import_1.1/OpenVX_Export_and_Import_Extension_1_1.pdf">PDF</a>)
      (updated April 27, 2017).</li>
  <li> <a href="api/1.1/openvx-extension-headers-1.1.tar.bz2"> OpenVX
      1.1 extension header package </a> (updated April 27, 2017).</li>
</ul>

<p><b>OpenVX 1.0.1 (withdrawn)</b></p>
<p><em>The OpenVX 1.0.X specifications are being withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations will not be accepted after May 15, 2018.</em></p>
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
</ul>

<p><b>OpenVX 1.0 (withdrawn)</b></p>
<p><em>The OpenVX 1.0.X specifications are being withdrawn in favor of the
improved 1.1 and 1.2 specifications. New submissions for conformance testing of
1.0.X implementations will not be accepted after May 15, 2018.</em></p>
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

<h3> OpenVX Provisional Extensions </h3>
<ul>
  <li>Classifier extension (provisional, OpenVX 1.2)
    (<a href="extensions/vx_khr_class/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_class/OpenVX_Classifier_Extension_1_2.pdf">PDF</a>)
    (updated Jul 11, 2017).</li>
  <li>Export and import extension (provisional, OpenVX 1.1)
    (<a href="extensions/export_import/html/index.html">HTML</a>,
    <a href="extensions/export_import/OpenVX_Export_and_Import_Extension_1_1.pdf">PDF</a>)
    (updated September, 2016).</li>
  <li>Installable client driver extension (provisional, OpenVX 1.0)
    (<a href="extensions/vx_khr_icd/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_icd/OpenVX_ICD_Extension.pdf">PDF</a>)
    (updated September, 2016).</li>
  <li>Neural network extension (provisional, OpenVX 1.0)
    (<a href="extensions/neural_network/html/index.html">HTML</a>,
    <a href="extensions/neural_network/OpenVX_NN_Extension_1_1.pdf">PDF</a>)
    (updated September, 2016).</li>
  <li>S16 extension (provisional, OpenVX 1.1)
    (<a href="extensions/vx_khr_s16/1.1/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_s16/1.1/OpenVX_S16_Extension_1.1.pdf">PDF</a>)
    (updated February, 2017).</li>
  <li>Tiling extension (provisional, OpenVX 1.0)
    (<a href="extensions/vx_khr_tiling/1.0/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_tiling/1.0/OpenVX_Tiling_Extension_1_0.pdf">PDF</a>)
    (updated January, 2015).</li>
  <li>XML schema extension (provisional, OpenVX 1.0)
    (<a href="extensions/vx_khr_xml/1.0/html/index.html">HTML</a>,
    <a href="extensions/vx_khr_xml/1.0/OpenVX_XML_Schema_Extension_1_0.pdf">PDF</a>)
    (updated February, 2015).
    <ul>
      <li>The XML extension incorporates the
	<a href="schema/openvx-1-0.xsd">OpenVX XML Schema</a> document.
    </ul>
  </li>

</ul>

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
</body>
</html>
