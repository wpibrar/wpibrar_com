module.exports = function(grunt) {

    const sass = require('sass');

    // Configure the Grunt tasks
    grunt.initConfig({
        // concat: {
        //     dist: {
        //         src: [
        //             'src/styles/*.scss',
        //         ],
        //         dest: 'src/build.scss',
        //     }
        // },
        sass: {
            options: {
                sourceMap: true,
                implementation: sass,
            },
            dist: {
                files: {
                    'css/style.css': 'src/style.scss'
                }
            }
        },
        watch: {
            scripts: {
                files: ['src/styles/*.scss', 'src/style.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                },
            },
        },
    });
  
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Load the Grunt plugins
    grunt.loadNpmTasks('grunt-sass');
  
    // Define the Grunt tasks
    grunt.registerTask('default', ['sass']);
};