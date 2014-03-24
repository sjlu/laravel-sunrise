module.exports = function (grunt) {
  grunt.initConfig({

    files: {
      js: ['public/assets/js/**/*.js'],
      less: ['public/assets/less/**/*.less']
    },

    /**
     * JS compilation
     * All this does is smush and minify.
     */
    concat: {
      options: {
        separator: ';'
      },
      default: {
        src: '<%= files.js %>',
        dest: 'public/assets/scripts.js'
      }
    },

    /**
     * LESS compilation
     * If you are creating any new files they
     * should all be referenced in base.less
     * and not here as this is only a compiler.
     */
    less: {
      options: {
        paths: [
          'public/assets/less'
        ]
      },
      default: {
        files: {
          "public/assets/styles.css": "public/assets/less/base.less"
        }
      }
    },

    /**
     * Watch
     * Watch the filesystem and auto-run these commands
     */
    watch: {
      options: {
        debounceDelay: 100,
        spawn: false
      },
      js: {
        files: '<%= files.js %>',
        tasks: ['concat']
      },
      less: {
        files: '<%= files.less %>',
        tasks: ['less']
      }
    }

  });

  /**
   * Plugins
   * We load the necessary Grunt plugins that
   * help us run our compilation. You will also
   * need to reference this in package.json
   */
  require("matchdep").filterDev([
    "grunt-*",
    "!grunt-template-jasmine-requirejs"
  ]).forEach(grunt.loadNpmTasks);
 
  /*
   * Tasks
   */
  grunt.registerTask('default', ['concat', 'less', 'watch']);
};
