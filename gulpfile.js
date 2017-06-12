// Include Gulp
var gulp = require( 'gulp' );

// Include Plugins
var sass = require( 'gulp-sass' );
var autoprefixer = require( 'gulp-autoprefixer' );
var sourcemaps = require( 'gulp-sourcemaps' );
var csscomb = require( 'gulp-csscomb' );
var livereload = require( 'gulp-livereload' );
var notify = require( 'gulp-notify' );

// Styles tasks
gulp.task( 'styles', function() {
	return gulp.src( 'stylesheets/zombie-style-guide.scss' )
		.pipe( sourcemaps.init() )
		.pipe( sass( { style: 'expanded' } ) )
		.on( 'error', notify.onError( function( err ) {
			return "Stylesheet Error in " + err.message;
		} ) )
		.pipe( autoprefixer( { browsers: ['last 2 versions', 'ie >= 9'], cascade: false } ) )
		.pipe( sourcemaps.write( '', { includeContent: false, sourceRoot: 'source' } ) )
		.pipe( gulp.dest( 'stylesheets' ) )
		.pipe( livereload() );
});

// Watch files for changes
gulp.task( 'watch', function() {
	livereload.listen();
	gulp.watch( 'stylesheets/**/*.scss', ['styles'] );
} );

// Default Task
gulp.task( 'default', ['styles', 'watch'] );
