# A sample Guardfile
# More info at https://github.com/guard/guard#readme

## Uncomment and set this to only include directories you want to watch
# directories %w(app lib config test spec features) \
#  .select{|d| Dir.exists?(d) ? d : UI.warning("Directory #{d} does not exist")}

## Note: if you are using the `directories` clause above and you are not
## watching the project directory ('.'), then you will want to move
## the Guardfile to a watched dir and symlink it back, e.g.
#
#  $ mkdir config
#  $ mv Guardfile config/
#  $ ln -s config/Guardfile .
#
# and, you'll have to watch "config/Guardfile" instead of "Guardfile"


group :development do
  guard :livereload do
    watch(%r{.+\.(css|js|php|html?)$})
  end

  if File.exists?("./config.rb")
    # Compile on start.
    puts `compass compile --time --quiet`
    # https://github.com/guard/guard-compass
    guard :compass do
      watch(%r{sass/(.*)\.s[ac]ss$})
    end
  end
end
