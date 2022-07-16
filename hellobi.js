/*
 * grunt
 * http://gruntjs.com/
 *
 * Copyright (c) 2013 "Cowboy" Ben Alman
 * Licensed under the MIT license.
 * https://github.com/gruntjs/grunt/blob/master/LICENSE-MIT
 */

// This is the default port that livereload listens on;
// change it if you configure livereload to use another port.
var LIVERELOAD_PORT = 35729;
// lrSnippet is just a function.
// It's a piece of Connect middleware that injects
// a script into the static served html.
var lrSnippet = require('connect-livereload')({
	port: LIVERELOAD_PORT
});
// All the middleware necessary to serve static files.
var livereloadMiddleware = function(connect, options) {
	return [
		// Inject a livereloading script into static files.
		lrSnippet,
		// Serve static files.
		connect.static(options.base[0]),
		// Make empty directories browsable.
		connect.directory(options.base[0])
	];
};

// The first part is the "wrapper" function, which encapsulates your Grunt configuration
module.exports = function(grunt) {

	'use strict';

	// Load grunt tasks automatically
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	var plugins = ['karma-mocha'];
	var browsers = [];

	// Time how long tasks take. Can help when optimizing build times
	require('time-grunt')(grunt);

	// Define the configuration for all the tasks
	grunt.initConfig({
		// Next we can read in the project settings from the package.json file into the pkg property. This allows us to refer to the values of properties within our package.json file.
		pkg: grunt.file.readJSON('package.json'),

		// Project settings
		jsb: {
			// Configurable paths
			app: 'src',
			dist: 'dist',
			test: 'test'
		},
		// Empties folders to st
