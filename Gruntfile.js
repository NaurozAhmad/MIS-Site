module.exports = function(grunt) {
	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		cssmin: {
			combine: {
				files: {
					'assets/css/core.min.css': [
						'assets/plugins/pace/pace-theme-flash.css',
						'assets/plugins/bootstrap/css/bootstrap.min.css',
						'assets/plugins/bootstrap/css/bootstrap-theme.min.css',
						'assets/css/animate.min.css',
						'assets/plugins/perfect-scrollbar/perfect-scrollbar.css'
					],
					'assets/css/charts.min.css': [
						'assets/plugins/morris-chart/css/morris.css',
						'assets/plugins/rickshaw-chart/css/graph.css',
						'assets/plugins/rickshaw-chart/css/detail.css',
						'assets/plugins/rickshaw-chart/css/legend.css',
						'assets/plugins/rickshaw-chart/css/extensions.css',
						'assets/plugins/rickshaw-chart/css/rickshaw.min.css',
						'assets/plugins/rickshaw-chart/css/lines.css'
					],
					'assets/css/admin-charts.min.css': [
						'assets/plugins/rickshaw-chart/css/graph.css',
						'assets/plugins/rickshaw-chart/css/detail.css',
						'assets/plugins/rickshaw-chart/css/legend.css',
						'assets/plugins/rickshaw-chart/css/extensions.css',
						'assets/plugins/rickshaw-chart/css/rickshaw.min.css',
						'assets/plugins/rickshaw-chart/css/lines.css'
					],
					'assets/css/plugins.min.css': [
						'assets/plugins/jquery-ui/smoothness/jquery-ui.min.css',
						'assets/plugins/icheck/skins/minimal/white.css'
					],
					'assets/css/custom.min.css': [
						'assets/css/style.css',
						'assets/css/responsive.css',
						'assets/css/custom.css',
						'assets/css/footer.css'
					]
				}
			}
		},

		uglify: {
			my_target: {
				files: {
					'assets/js/core.min.js': [
						'assets/js/jquery-1.11.2.min.js',
						'assets/js/jquery.easing.min.js',
						'assets/plugins/bootstrap/js/bootstrap.min.js',
						'assets/plugins/pace/pace.min.js',
						'assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
						'assets/plugins/viewport/viewportchecker.js',
						'assets/plugins/jquery-ui/smoothness/jquery-ui.min.js',
						'assets/plugins/sparkline-chart/jquery.sparkline.min.js',
						'assets/js/chart-sparkline.js'
					]
				}
			}
		},

		watch: {
			scripts: {
				files: ['**/*.*'],
				tasks: ['cssmin'],
				options: {
					interrupt: true,
					livereload: true
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['cssmin', 'uglify']);
};