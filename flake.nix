# TODO set 
environment.systemPackages = with pkgs; [ php ];

environment.systemPackages = [
  (pkgs.php.buildEnv {
    extensions = ({ enabled, all }: enabled ++ (with all; [
      xdebug
    ]));
    extraConfig = ''
      xdebug.mode=debug
      
    '';
  })
];


