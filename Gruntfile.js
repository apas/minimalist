module.exports = function(grunt) {
  
  require('load-grunt-tasks')(grunt); // npm install --save-dev load-grunt-tasks

  grunt.initConfig({
      sass: {
          options: {
              sourceMap: true
          },
          dist: {
              files: {
                  'css/main.min.css': 'sass/main.scss'
              }
          }
      },
      postcss: {
        options: {
          map: true,
          processors: [
            require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
            require('cssnano')() // minify the result
          ]
        },
        dist: {
          src: 'css/*.css'
        }
      },
      watch: {
        css: {
          files: 'sass/*.scss',
          tasks: ['sass', 'postcss'],
          options: {
            livereload: true,
          },
        },
      }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.registerTask('default', ['sass', 'postcss', 'watch ']);

};