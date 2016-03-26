module.exports = function(grunt){

  grunt.initConfig({


    /**
    *
    * auto_install
    * Permet d'installer les packages depuis le package.json
    *
    */
    auto_install: {
      local: {},
      subdir: {
        options: {
          cwd: 'subdir',
          stdout: true,
          stderr: true,
          failOnError: true,
          npm: '--production'
        }
      }
    },


    /**
    *
    * Concatenne les js
    *
    */
    concat: {
      options: {
        //separator: ';', // va ajouter un ; a la fin de chaque fichier
      },
      fusion: {
        src: [
          'js/parts/doc_ready_start.js',
          'js/parts/helpers.js',

          //'js/parts/datepicker.js',
          'js/parts/cookies_bar.js',

          'js/parts/misc.js',


          /**
          *
          *   COMPONENTS
          *
          */

          // Forms
          'js/parts/components/forms/form_contact.js',

          // Menu
          'js/parts/components/menu.js',


          // Plugins
          'js/parts/sliders.js',

          // Themes
          'js/parts/header.js',

          'js/parts/doc_ready_end.js'
        ],
        // Selectionne les js dans l'odre donné
        dest: 'js/app.min.js', // crer un fichier de destination
      },
    },

    /**
    *
    * Autoprefixe le CSS
    *
    */
    autoprefixer: {
      your_target: {
        options: {
          browsers: ['last 2 versions'], // 'ie 8', 'ie 9'
          diff: 'css/file.css.patch'
        },
      },
      main: {
        expand: true, 
        src: 'css/app.css',
        dest: ''
      },
    },

    /**
    *
    * Supprime les commentaires
    *
    */
    comments: {
      js: {
        options: {
          singleline: true,
          multiline: true
        },
        src: [ 'app.min.js']
      },
    },

    /**
    *
    * Ecoute les modifications dans les fichiers renseigné dans l'array files
    *
    */
    watch: {
      scripts: {
        files: ['js/parts/*.js','js/parts/*/*.js'],
        tasks: ['concat'],
        options: {
          spawn: false,
        },
      },
    }

  });

  grunt.loadNpmTasks('grunt-auto-install');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-stripcomments');
  //grunt.registerTask('default', ['concat']);
  grunt.registerTask('default', ['watch']);
  // créer une tache à executer, ici on execute Concat puis Uglify
};
