# Rails 3 simple template
# USE ONLY ON EMPTY APPS - USAGE:rails new app_name -m rails3-templates/base.rb 

# Remove Default
run 'mv public/index.html public/test-rails3.html'

# Install JQuery
inside "public/javascripts" do
  FileUtils.rm_rf %w(controls.js dragdrop.js effects.js prototype.js rails.js)
  run "wget https://github.com/rails/jquery-ujs/raw/master/src/rails.js --no-check-certificate"
end

# Install HTML5-Boilerplate

inside "public" do
  run "git clone http://github.com/paulirish/html5-boilerplate.git"

  run 'cp html5-boilerplate/* . -R'
  run 'mv js/* javascripts/'
  run 'mv javascripts/libs/* javascripts/'
  run 'mv css/* stylesheets/'
  run 'rm -Rf js css html5-boilerplate'
  run 'mv index.html example-html5b.html'
  inside "javascripts" do
    run "mv jquery-*.min.js jquery.js"
    run "mv modernizr-* modernizr.js"  
  end
  
end

run 'rm app/views/layouts/application.html.erb'

# Layout
file 'app/views/layouts/application.html.haml', <<-FILE
<!doctype html>
/ paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
/[if lt IE 7 ] <html lang="en" class="no-js ie6">
/[if IE 7 ] <html lang="en" class="no-js ie7">
/[if IE 8 ] <html lang="en" class="no-js ie8">
/[if IE 9 ] <html lang="en" class="no-js ie9">
/ [if (gt IE 9)|!(IE)]><!
%html.no-js{:lang => "en"}
  / <![endif]
  %head
    %meta{:charset => "utf-8"}
    /
      Always force latest IE rendering engine (even in intranet) & Chrome Frame
      Remove this if you use the .htaccess
    %meta{:content => "IE=edge,chrome=1", "http-equiv" => "X-UA-Compatible"}
    %title
    %meta{:content => "", :name => "description"}
    %meta{:content => "", :name => "author"}
    / Mobile viewport optimized: j.mp/bplateviewport
    %meta{:content => "width=device-width; initial-scale=1.0", :name => "viewport"}
    / Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references
    %link{:href => "/favicon.ico", :rel => "shortcut icon"}
    %link{:href => "/apple-touch-icon.png", :rel => "apple-touch-icon"}
    = stylesheet_link_tag :all
    = javascript_include_tag 'jquery', 'rails', 'modernizr'
    = csrf_meta_tag
  %body
    #container
      %header
      #main
        = yield
      %footer
    / end of #container
    / Javascript at the bottom for fast page loading
    %script{:src => "/javascripts/plugins.js?v=1"}
    %script{:src => "/javascripts/script.js?v=1"}
    /[if lt IE 7 ]
      <script src="/javascripts/dd_belatedpng.js?"></script>
      <script>
      DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images
      </script>
    - if Rails.env == 'production'
      :javascript
        var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
        (function(d, t) {
         var g = d.createElement(t),
             s = d.getElementsByTagName(t)[0];
         g.async = true;
         g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         s.parentNode.insertBefore(g, s);
        })(document, 'script');
FILE
