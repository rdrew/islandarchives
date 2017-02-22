var gulp = require("gulp"),
  sass = require("gulp-sass"),
  browserSync = require("browser-sync").create(),
  runSequence = require("run-sequence"),
  del = require("del"),
  glob = require("glob"),
  autoprefixer = require("gulp-autoprefixer"),
  importer = require('node-sass-globbing');


var config = {

  // CHANGE THIS!
  remoteURL: "http://hp1.islandarchives.ca/",
  themeName: "islandarchives",
  srcDir: "./src",
  injectDir: "./build",
  //localPath: "/local-assets",
  localPath: "/sites/all/themes/islandarchives/build",

  localAssets: {
    css: [
      "css/**/*.css"
    ],
    js: [
      "js/**/*.js"
    ]
  }

};

var sass_config = {

  importer: importer,

  includePaths: [
    //'node_modules/breakpoint-sass/stylesheets/',
    //'node_modules/singularitygs/stylesheets/',
    'node_modules/compass-mixins/lib/',
    //'node_modules/bourbon/app/assets/stylesheets/',
    //'node_modules/bourbon-neat/app/assets/stylesheets/'
  ]


};

gulp.task("clean", function() {
  return del.sync(config.injectDir);
});

gulp.task("sass", function() {
  return gulp.src(config.srcDir + "/sass/**/*.scss")
    .pipe(sass(sass_config).on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(config.injectDir + "/css"))
    .pipe(browserSync.stream());
});

gulp.task('images', function() {
  return gulp.src(config.srcDir + '/img/**/*')
    .pipe(gulp.dest(config.injectDir + '/img'))
});

gulp.task("js", function() {
  return gulp.src(config.srcDir + "/js/**/*.js")
    .pipe(gulp.dest(config.injectDir + "/js"))
    .pipe(browserSync.stream());
});

gulp.task("browserSync", ["sass", "js"], function() {
  var targetCss = config.themeName;
  browserSync.init({
    proxy: {
      target: config.remoteURL
    },
    rewriteRules: [
      {
        match: /css\/islandarchives/g,
        //match: targetCss,
        fn: function (req, res, match) {
          return 'null';
        }


      },

      {
        // Inject Local CSS at the end of HEAD
        match: /<\/head>/i,
        fn: function(req, res, match) {
          var localCssAssets = "";
          for (var i = 0; i < config.localAssets.css.length; i++) {

            var files = glob.sync(config.localAssets.css[i], {
              cwd: config.injectDir
            });

            for (var file in files) {
              localCssAssets += "<link rel=\"stylesheet\" type=\"text/css\" href=\"" + config.localPath + "/" + files[file] + "\">";
              //localCssAssets += "<link rel=\"stylesheet\" type=\"text/css\" href=\"" + config.localPath + "/" + config.themeName + "/" + files[file] + "\">";
            }
          }

          return localCssAssets + match;
        }
      }, {
        // Inject Local JS at the end of BODY
        match: /<\/body>/i,
        fn: function(req, res, match) {
          var localJsAssets = "";
          for (var i = 0; i < config.localAssets.js.length; i++) {

            var files = glob.sync(config.localAssets.js[i], {
              cwd: config.injectDir
            });

            for (var file in files) {
              localJsAssets += "<script src=\"" + config.localPath + "/" + files[file] + "\"></script>";
            }
          }

          return localJsAssets + match;
        }
      }],
    serveStatic: [{
      route: config.localPath,
      dir: config.injectDir
    }],
    watchTask: true
  });
});

gulp.task("watch", ["browserSync", "js", "images", "sass"], function() {
  gulp.watch(config.srcDir + "/sass/**/*.scss", ["sass"]);
  gulp.watch(config.srcDir + "/img/**/*", ["images"]);
  gulp.watch(config.srcDir + "/js/**/*.js", ["js"]);
});

gulp.task("build", function() {
  runSequence([
    "clean",
    "sass",
    "js",
    "images"
  ]);
});

gulp.task("default", function() {
  runSequence(["build", "browserSync", "watch"]);
});
