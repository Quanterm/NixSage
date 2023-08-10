# TODO make sample working 
{
  packages = [
    pkgs.yarn
  ];

  languages.javascript.enable = true;
  languages.php.enable = true;

  # You can use also symfony-cli like in the examples, but I like it more explict
  languages.php.fpm.pools.web = {
    settings = {
      "clear_env" = "no";
      "pm" = "dynamic";
      "pm.max_children" = 10;
      "pm.start_servers" = 2;
      "pm.min_spare_servers" = 1;
      "pm.max_spare_servers" = 10;
    };
  };

  services.caddy.enable = true;
  services.caddy.virtualHosts.":8000" = {
    extraConfig = ''
      root * public
      php_fastcgi unix/${config.languages.php.fpm.pools.web.socket}
      file_server
    '';
  };

  processes.build-assets.exec = "yarn watch";
}

