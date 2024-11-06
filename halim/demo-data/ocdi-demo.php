<?php 

  function halim_import_files() {
      return [
        [
          'import_file_name'             => esc_html__('Halim Data Import', 'halim'),
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/demo-content/content.xml',
          'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/demo-content/widgets.wie',
        ]
      ];
    }
    add_filter( 'ocdi/import_files', 'halim_import_files' );

  add_filter( 'pt-ocdi/import_files', 'halim_import_files' );

?>