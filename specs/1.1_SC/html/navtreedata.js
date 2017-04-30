var NAVTREE =
[
  [ "The OpenVX Specification", "index.html", [
    [ "Introduction", "index.html", [
      [ "Abstract", "index.html#sec_abstract", null ],
      [ "Purpose", "index.html#sec_purpose", null ],
      [ "Scope of Specification", "index.html#sec_scope", null ],
      [ "Normative References", "index.html#sec_normative", null ],
      [ "Version/Change History", "index.html#sec_versions", null ],
      [ "Deprecation", "index.html#sec_deprecation", null ],
      [ "Requirements Language", "index.html#sec_requirements", null ],
      [ "Typographical Conventions", "index.html#sec_typo", [
        [ "Naming Conventions", "index.html#sec_naming_conventions", null ]
      ] ],
      [ "Glossary and Acronyms", "index.html#sec_glossary", null ],
      [ "Acknowledgements", "index.html#sec_acknowledgements", null ]
    ] ],
    [ "Design Overview", "d0/d84/page_design.html", [
      [ "Software Landscape", "d0/d84/page_design.html#sec_overview", null ],
      [ "Design Objectives", "d0/d84/page_design.html#sec_design_objective", [
        [ "Hardware Optimizations", "d0/d84/page_design.html#sec_sub_optimizations", null ],
        [ "Hardware Limitations", "d0/d84/page_design.html#sec_design_hw_limitations", null ]
      ] ],
      [ "Assumptions", "d0/d84/page_design.html#sec_assumptions", [
        [ "Portability", "d0/d84/page_design.html#sec_portability", null ],
        [ "Opaqueness", "d0/d84/page_design.html#sec_opaque", null ]
      ] ],
      [ "Object-Oriented Behaviors", "d0/d84/page_design.html#sec_framework", null ],
      [ "OpenVX Framework Objects", "d0/d84/page_design.html#sec_framework_objects", null ],
      [ "OpenVX Data Objects", "d0/d84/page_design.html#sec_data_objects", null ],
      [ "Error Objects", "d0/d84/page_design.html#sec_errors", null ],
      [ "Graphs Concepts", "d0/d84/page_design.html#sub_graphs", [
        [ "Linking Nodes", "d0/d84/page_design.html#sub_graph_linking", null ],
        [ "Virtual Data Objects", "d0/d84/page_design.html#sec_data_virtual", null ],
        [ "Node Parameters", "d0/d84/page_design.html#sub_node_parameters", null ],
        [ "Graph Parameters", "d0/d84/page_design.html#sub_graph_parameters", null ],
        [ "Execution Model", "d0/d84/page_design.html#sub_graphs_execution", [
          [ "Asynchronous Mode", "d0/d84/page_design.html#sub_graphs_execution_asynch", null ]
        ] ],
        [ "Graph Formalisms", "d0/d84/page_design.html#sub_graphs_rules", [
          [ "Contained & Overlapping Data Objects", "d0/d84/page_design.html#sub_graphs_rules_data_obj", null ]
        ] ],
        [ "Node Execution Independence", "d0/d84/page_design.html#sec_graph_indep", null ],
        [ "Verification", "d0/d84/page_design.html#sec_graph_verification", null ]
      ] ],
      [ "Callbacks", "d0/d84/page_design.html#sec_callback", null ],
      [ "User Kernels", "d0/d84/page_design.html#sec_user_kernels", [
        [ "Parameter Validation", "d0/d84/page_design.html#sec_user_node_validation", [
          [ "The Meta Format Object", "d0/d84/page_design.html#subsec_meta_format", null ]
        ] ],
        [ "User Kernels Naming Conventions", "d0/d84/page_design.html#sec_functionnaming", null ]
      ] ],
      [ "Targets", "d0/d84/page_design.html#sec_target", null ],
      [ "Base Vision Functions", "d0/d84/page_design.html#sec_vision_functions", [
        [ "Inputs", "d0/d84/page_design.html#sec_vision_function_inputs", null ],
        [ "Outputs", "d0/d84/page_design.html#sec_vision_function_outputs", null ]
      ] ],
      [ "Lifecycles", "d0/d84/page_design.html#sec_lifecycle", [
        [ "OpenVX Context Lifecycle", "d0/d84/page_design.html#sec_lc_context", null ],
        [ "Graph Lifecycle", "d0/d84/page_design.html#sub_lc_graph", null ],
        [ "Data Object Lifecycle", "d0/d84/page_design.html#sec_data_object_lifecycle", [
          [ "OpenVX Image Lifecycle", "d0/d84/page_design.html#sec_lc_image", null ]
        ] ]
      ] ],
      [ "Host Memory Data Object Access Patterns", "d0/d84/page_design.html#sec_host_memory", [
        [ "Matrix Access Example", "d0/d84/page_design.html#sub_matrix_access", null ],
        [ "Image Access Example", "d0/d84/page_design.html#sub_image_access", null ],
        [ "Array Access Example", "d0/d84/page_design.html#sub_array_access", null ]
      ] ],
      [ "Concurrent Data Object Access", "d0/d84/page_design.html#sec_concurrent_access", null ],
      [ "Valid Image Region", "d0/d84/page_design.html#sec_valid_region", null ],
      [ "Extending OpenVX", "d0/d84/page_design.html#sec_extending", [
        [ "Extending Attributes", "d0/d84/page_design.html#sub_attribute_extensions", null ],
        [ "Vendor Custom Kernels", "d0/d84/page_design.html#sub_kernel_extensions", null ],
        [ "Vendor Custom Extensions", "d0/d84/page_design.html#sub_framework_extensions", null ],
        [ "Hinting", "d0/d84/page_design.html#sub_hints", null ],
        [ "Directives", "d0/d84/page_design.html#sub_directives", null ]
      ] ],
      [ "Import and Export Framework", "d0/d84/page_design.html#sec_import", [
        [ "Import and Export of Objects", "d0/d84/page_design.html#subsec_req", null ],
        [ "Creation of Objects Upon Import", "d0/d84/page_design.html#subsec_creation", null ],
        [ "Import and Export of Data Values For Objects To Be Created By The Framework", "d0/d84/page_design.html#subsec_Imandexp", null ],
        [ "Import and Export of Values For Objects To Be Created By The Application", "d0/d84/page_design.html#subsec_createdapp", null ],
        [ "Import and Export of Meta Data", "d0/d84/page_design.html#subsec_IData", null ],
        [ "Restrictions Upon What References May Be Exported", "d0/d84/page_design.html#subsec_restrictions", null ],
        [ "Access To Object References In The Imported Object", "d0/d84/page_design.html#subsec_access", null ]
      ] ],
      [ "Safety-critical Features", "d0/d84/page_design.html#sec_sc", [
        [ "The Development and Deployment Feature Sets", "d0/d84/page_design.html#subsec_sc_deployment", null ],
        [ "Node creation APIs", "d0/d84/page_design.html#subsec_sc_node", null ],
        [ "Basic and Administrative Features APIs", "d0/d84/page_design.html#subsec_sc_features", null ],
        [ "Attributes", "d0/d84/page_design.html#subsec_sc_attributes", null ]
      ] ]
    ] ],
    [ "Bibliography", "d0/de3/citelist.html", null ],
    [ "Modules", "modules.html", "modules" ],
    [ "Data Structures", "annotated.html", [
      [ "Data Structures", "annotated.html", "annotated_dup" ],
      [ "Data Fields", "functions.html", [
        [ "All", "functions.html", null ],
        [ "Variables", "functions_vars.html", null ]
      ] ]
    ] ]
  ] ]
];

var NAVTREEINDEX =
[
"annotated.html",
"d4/dae/group__group__basic__features.html#ga1ddb983b9696cafdb4256c0df757171c",
"d8/d69/group__group__node__callback.html#ga04a77098044842c96b6945c1eeb06509",
"dd/de7/group__group__performance.html#adae6b5d0c938176c81e3527cbbe41e0b"
];

var SYNCONMSG = 'click to disable panel synchronisation';
var SYNCOFFMSG = 'click to enable panel synchronisation';