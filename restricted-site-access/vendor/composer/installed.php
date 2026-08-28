<?php return array(
    'root' => array(
        'name' => '10up/restricted-site-access',
        'pretty_version' => '7.6.2',
        'version' => '7.6.2.0',
        'reference' => '38a7147377e22a737d7461d29ca076db3860df7d',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        '10up/restricted-site-access' => array(
            'pretty_version' => '7.6.2',
            'version' => '7.6.2.0',
            'reference' => '38a7147377e22a737d7461d29ca076db3860df7d',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        '10up/wp-compat-validation-tool' => array(
            'pretty_version' => '0.4.0',
            'version' => '0.4.0.0',
            'reference' => '803d75864699503da0ff64db9b4ba51ea94a316a',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../10up-lib/wp-compat-validation-tool',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '2a9170263fcd9cc4fd0b50917293c21d6c1a5bfe',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'mlocati/ip-lib' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'a2c0e36416a814ca164d873da77b19f6e7749aef',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mlocati/ip-lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
