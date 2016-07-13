tinymce.create('tinymce.plugins.chapeau', {
  init : function(ed, url) {
    /**
    * Inserts shortcode content
    */
    ed.addButton( 'chapeau', {
      title : 'Créer un chapeau',
      image : '../wp-content/themes/franc-muller-v2/includes/shortcode/chapeau/sc_chapeau.svg',
      onclick : function() {

        ed.selection.setContent('[chapeau]'+ed.selection.getContent()+'[/chapeau]');
      }
    });

  },
  createControl : function(n, cm) {
    return null;
  },
});
/* Start the buttons */
tinymce.PluginManager.add( 'chapeau', tinymce.plugins.chapeau);
